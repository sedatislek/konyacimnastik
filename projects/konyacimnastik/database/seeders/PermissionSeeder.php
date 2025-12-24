<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'dashboard.view' => 'Dashboard View',

            'settings.manage' => 'Settings Manage',

            'blog.view'   => 'Blog View',
            'blog.create' => 'Blog Create',
            'blog.edit'   => 'Blog Edit',
            'blog.delete' => 'Blog Delete',

            'users.view'   => 'Users View',
            'users.manage' => 'Users Manage',

            'roles.manage' => 'Roles Manage',
        ];

        foreach ($permissions as $key => $name) {
            Permission::updateOrCreate(
                ['key' => $key],
                ['name' => $name]
            );
        }
    }
}

