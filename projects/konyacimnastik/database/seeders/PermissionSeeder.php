<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            // Dashboard
            ['name' => 'Dashboard View', 'key' => 'dashboard.view'],

            // Settings
            ['name' => 'Settings Manage', 'key' => 'settings.manage'],

            // Blog
            ['name' => 'Blog View', 'key' => 'blog.view'],
            ['name' => 'Blog Create', 'key' => 'blog.create'],
            ['name' => 'Blog Edit', 'key' => 'blog.edit'],
            ['name' => 'Blog Delete', 'key' => 'blog.delete'],

            // Users
            ['name' => 'Users View', 'key' => 'users.view'],
            ['name' => 'Users Manage', 'key' => 'users.manage'],

            // Roles & Permissions
            ['name' => 'Roles Manage', 'key' => 'roles.manage'],
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['key' => $permission['key']],
                ['name' => $permission['name']]
            );
        }
    }
}
