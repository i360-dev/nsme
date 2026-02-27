<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\MembershipLevel;

/**
 * Seeds known NSME membership tiers from the Member Roster export.
 * Fees are placeholders — update to match actual NSME pricing.
 */
class MembershipLevelsSeeder extends Seeder
{
    public function run(): void
    {
        $levels = [
            [
                'name'        => 'Professional Member',
                'description' => 'Standard individual membership.',
                'annual_fee'  => null,   // TODO: confirm pricing
                'sort_order'  => 1,
            ],
            [
                'name'        => 'Executive Member',
                'description' => 'Senior-level individual membership.',
                'annual_fee'  => null,
                'sort_order'  => 2,
            ],
            [
                'name'        => 'Executive/Board Member',
                'description' => 'Executive member serving on the NSME board.',
                'annual_fee'  => null,
                'sort_order'  => 3,
            ],
            [
                'name'        => 'Trade Agreement Member',
                'description' => 'Chamber or trade organization partner membership.',
                'annual_fee'  => null,
                'sort_order'  => 4,
            ],
        ];

        foreach ($levels as $level) {
            MembershipLevel::firstOrCreate(
                ['slug' => Str::slug($level['name'])],
                array_merge($level, ['slug' => Str::slug($level['name'])])
            );
        }

        $this->command->info('✅ Membership levels seeded.');
    }
}
