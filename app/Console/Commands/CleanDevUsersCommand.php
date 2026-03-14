<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CleanDevUsersCommand extends Command
{
    protected $signature   = 'dev:clean';
    protected $description = 'Remove dev/QA test accounts (non-production only)';

    /**
     * The test emails managed by DevSeeder.
     * Update this list if DevSeeder accounts change.
     */
    const TEST_EMAILS = [
        'dev.admin@nsme.test',
        'dev.board@nsme.test',
        'dev.member@nsme.test',
    ];

    public function handle(): int
    {
        if (app()->isProduction()) {
            $this->error('This command cannot run in production.');
            return self::FAILURE;
        }

        $found = User::whereIn('email', self::TEST_EMAILS)->get();

        if ($found->isEmpty()) {
            $this->info('No dev accounts found — nothing to remove.');
            return self::SUCCESS;
        }

        $this->table(
            ['Name', 'Email', 'Roles'],
            $found->map(fn($u) => [
                $u->name,
                $u->email,
                $u->getRoleNames()->join(', '),
            ])
        );

        if (! $this->confirm('Remove these ' . $found->count() . ' dev account(s)?')) {
            $this->line('Aborted.');
            return self::SUCCESS;
        }

        $deleted = User::whereIn('email', self::TEST_EMAILS)->delete();

        $this->info("Removed {$deleted} dev account(s).");

        return self::SUCCESS;
    }
}
