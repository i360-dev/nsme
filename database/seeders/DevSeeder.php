<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DevSeeder extends Seeder
{
    /**
     * Test accounts for local and staging environments only.
     *
     * NEVER runs in production — hard-guarded by APP_ENV check.
     *
     * To seed:   php artisan db:seed --class=DevSeeder
     * To remove: php artisan dev:clean
     */

    const TEST_EMAILS = [
        'dev.admin@nsme.test',
        'dev.board@nsme.test',
        'dev.member@nsme.test',
    ];

    public function run(): void
    {
        if (app()->isProduction()) {
            $this->command->error('  DevSeeder refuses to run in production.');
            return;
        }

        $users = [
            [
                'name'  => 'Dev Admin',
                'email' => 'dev.admin@nsme.test',
                'role'  => 'admin',
            ],
            [
                'name'  => 'Dev Board',
                'email' => 'dev.board@nsme.test',
                'role'  => 'board',
            ],
            [
                'name'  => 'Dev Member',
                'email' => 'dev.member@nsme.test',
                'role'  => 'member',
            ],
        ];

        foreach ($users as $data) {
            $user = User::updateOrCreate(
                ['email' => $data['email']],
                [
                    'name'              => $data['name'],
                    'password'          => Hash::make('password'),
                    'email_verified_at' => now(),
                ]
            );

            // Wipe any existing roles first so re-runs are clean
            $user->syncRoles([$data['role']]);

            $this->command->info("  + {$data['name']} ({$data['email']}) → {$data['role']}");
        }

        $this->command->warn('  Password for all dev accounts: password');
        $this->command->warn('  Remove with: php artisan dev:clean');
    }
}
