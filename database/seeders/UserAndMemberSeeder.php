<?php

namespace Database\Seeders;

use App\Models\Member;
use App\Models\MembershipLevel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAndMemberSeeder extends Seeder
{
    protected string $securityCsv = __DIR__ . '/../../database/data/nsme_security_members.csv';
    protected string $rosterCsv   = __DIR__ . '/../../database/data/nsme_roster.csv';
    protected string $DEFAULT_CHAPTER = 'CAK';

    public function run(): void
    {
        $this->guardFiles();

        $this->command->line('  -> Importing user accounts...');
        $usersByEmail = $this->importUsers();
        $this->command->info("    Users: {$usersByEmail->count()} upserted");

        $this->command->line('  -> Importing membership roster...');
        [$imported, $unmatched] = $this->importMembers($usersByEmail);
        $this->command->info("    Members: {$imported} imported");

        if ($unmatched > 0) {
            $this->command->warn("    {$unmatched} roster rows had no matching user account");
        }

        $this->command->line('  -> Assigning roles...');
        $this->assignRoles();
        $this->command->info('    Roles assigned');
    }

    protected function importUsers(): \Illuminate\Support\Collection
    {
        $handle  = fopen($this->securityCsv, 'r');
        $headers = null;
        $byEmail = collect();

        while (($row = fgetcsv($handle)) !== false) {
            if ($headers === null) {
                $row[0]  = ltrim($row[0], "\xEF\xBB\xBF\xFF\xFE");
                $headers = array_map('trim', $row);
                continue;
            }

            $data  = array_combine($headers, array_map('trim', $row));
            $email = strtolower($data['Email'] ?? '');

            if (! $email || ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->command->warn("    Skipping invalid email: '{$email}'");
                continue;
            }

            $name = trim(($data['First Name'] ?? '') . ' ' . ($data['Surname'] ?? '')) ?: $email;

            $user = User::updateOrCreate(
                ['email' => $email],
                [
                    'name'              => $name,
                    'password'          => Hash::make(Str::random(32)),
                    'email_verified_at' => now(),
                ]
            );

            $byEmail->put($email, $user);
        }

        fclose($handle);
        return $byEmail;
    }

    protected function importMembers(\Illuminate\Support\Collection $usersByEmail): array
    {
        $handle    = fopen($this->rosterCsv, 'r');
        $headers   = null;
        $imported  = 0;
        $unmatched = 0;

        while (($row = fgetcsv($handle)) !== false) {
            if ($headers === null) {
                $row[0]  = ltrim($row[0], "\xEF\xBB\xBF\xFF\xFE");
                $headers = array_map('trim', $row);
                continue;
            }

            while (count($row) < count($headers)) {
                $row[] = '';
            }

            $data = array_combine($headers, array_map('trim', $row));

            $email = strtolower($data['Email Address'] ?? '');
            if (! $email || ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->command->warn("    Skipping invalid email: '{$email}'");
                continue;
            }

            $levelName = $data['Membership Level'] ?? '';
            $level     = MembershipLevel::where('name', $levelName)->first();

            $expiresAt = null;
            $expRaw    = $data['Expiration Date'] ?? '';
            if ($expRaw) {
                try {
                    $expiresAt = Carbon::createFromFormat('M j, Y', $expRaw)->toDateString();
                } catch (\Throwable) {
                    try {
                        $expiresAt = Carbon::parse($expRaw)->toDateString();
                    } catch (\Throwable) {
                        $this->command->warn("    Could not parse expiry '{$expRaw}' for {$email}");
                    }
                }
            }

            $phone = $this->normalizePhone($data['Phone Number'] ?? '');

            $user = $usersByEmail->get($email);
            if (! $user) {
                $this->command->warn("    No user account for: {$email}");
                $unmatched++;
            }

            Member::updateOrCreate(
                ['email' => $email],
                [
                    'user_id'               => $user?->id,
                    'first_name'            => trim($data['First Name']   ?? ''),
                    'last_name'             => trim($data['Last Name']    ?? ''),
                    'company_name'          => trim($data['Company Name'] ?? '') ?: null,
                    'phone'                 => $phone ?: null,
                    'chapter'               => $this->DEFAULT_CHAPTER,
                    'membership_level_id'   => $level?->id,
                    'membership_expires_at' => $expiresAt,
                    'is_active'             => $expiresAt
                        ? Carbon::parse($expiresAt)->isFuture()
                        : false,
                ]
            );

            $imported++;
        }

        fclose($handle);
        return [$imported, $unmatched];
    }

    protected function assignRoles(): void
    {
        User::whereIn('email', fn($q) => $q->select('email')->from('members'))
            ->each(function (User $user) {
                if (! $user->hasRole('member')) {
                    $user->assignRole('member');
                }
            });

        $boardLevels = ['Executive/Board Member', 'Board Member'];
        Member::whereHas('membershipLevel', fn($q) => $q->whereIn('name', $boardLevels))
            ->with('user')
            ->each(function (Member $member) {
                $member->user?->assignRole('board');
            });
    }

    protected function normalizePhone(string $raw): string
    {
        $digits = preg_replace('/\D/', '', $raw);
        if (strlen($digits) === 11 && str_starts_with($digits, '1')) {
            $digits = substr($digits, 1);
        }
        if (strlen($digits) === 10) {
            return substr($digits, 0, 3) . '-' . substr($digits, 3, 3) . '-' . substr($digits, 6);
        }
        return $raw;
    }

    protected function guardFiles(): void
    {
        $missing = [];
        if (! file_exists($this->securityCsv)) $missing[] = 'database/data/nsme_security_members.csv';
        if (! file_exists($this->rosterCsv))   $missing[] = 'database/data/nsme_roster.csv';
        if ($missing) {
            foreach ($missing as $f) $this->command->error("  Missing: {$f}");
            exit(1);
        }
    }
}
