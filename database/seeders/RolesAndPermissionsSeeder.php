<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * NSME Roles & Permissions Seeder
 * 
 * Run after installing Spatie Laravel Permission:
 *   composer require spatie/laravel-permission
 *   php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
 *   php artisan migrate
 *   php artisan db:seed --class=RolesAndPermissionsSeeder
 * 
 * -------------------------------------------------------------------------
 * ROLE HIERARCHY
 * -------------------------------------------------------------------------
 *  super_admin  — Full access. You (the dev/org owner). Roughly: "Deity" 😄
 *  admin        — Manages members, events, blog, advertising. Staff/board officers.
 *  board        — Board members. Read-only access to roster + extra board content.
 *  member       — Standard logged-in member. Basic portal access.
 * -------------------------------------------------------------------------
 */
class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Clear cached roles/permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // ----------------------------------------------------------------
        // PERMISSIONS  (granular — assigned to roles below)
        // ----------------------------------------------------------------
        $permissions = [

            // Members
            'view members',
            'create members',
            'edit members',
            'delete members',
            'import members',
            'export members',

            // Events & Calendar
            'view events',
            'create events',
            'edit events',
            'delete events',
            'manage event registrations',

            // Blog
            'view blog posts',
            'create blog posts',
            'edit blog posts',
            'delete blog posts',
            'publish blog posts',

            // Advertising
            'view ads',
            'create ads',
            'edit ads',
            'delete ads',
            'approve ads',

            // Membership Applications
            'view applications',
            'approve applications',
            'reject applications',

            // Accent on Excellence
            'view aoe entries',
            'create aoe entries',
            'edit aoe entries',
            'delete aoe entries',

            // Admin / Settings
            'view admin dashboard',
            'manage settings',
            'manage roles',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // ----------------------------------------------------------------
        // ROLES  (assign permission groups)
        // ----------------------------------------------------------------

        // Member — basic portal access
        $member = Role::firstOrCreate(['name' => 'member']);
        $member->syncPermissions([
            'view events',
            'view blog posts',
            'view aoe entries',
        ]);

        // Board — read-only access to roster + all member perms
        $board = Role::firstOrCreate(['name' => 'board']);
        $board->syncPermissions([
            'view events',
            'view blog posts',
            'view aoe entries',
            'view members',           // Can see the roster
            'view applications',      // Can see pending applications
        ]);

        // Admin — manages day-to-day operations
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->syncPermissions([
            'view admin dashboard',
            'view members', 'create members', 'edit members', 'import members', 'export members',
            'view events', 'create events', 'edit events', 'delete events', 'manage event registrations',
            'view blog posts', 'create blog posts', 'edit blog posts', 'delete blog posts', 'publish blog posts',
            'view ads', 'create ads', 'edit ads', 'delete ads', 'approve ads',
            'view applications', 'approve applications', 'reject applications',
            'view aoe entries', 'create aoe entries', 'edit aoe entries', 'delete aoe entries',
        ]);

        // Super Admin — everything, including role management
        // Tip: Spatie also supports a wildcard via ->assignRole() bypass,
        // but explicit permissions keeps auditing cleaner.
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $superAdmin->syncPermissions(Permission::all());

        $this->command->info('✅ Roles and permissions seeded successfully.');
        $this->command->table(
            ['Role', 'Permission Count'],
            [
                ['member',      $member->permissions()->count()],
                ['board',       $board->permissions()->count()],
                ['admin',       $admin->permissions()->count()],
                ['super_admin', $superAdmin->permissions()->count()],
            ]
        );
    }
}
