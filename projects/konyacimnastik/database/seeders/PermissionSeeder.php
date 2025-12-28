<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'settings',
            'roles',
            'ai',
            'charts',
            'components',
            'forms',
            'invoice',
            'tables',
            'users',
            'blog',
            'crypto',
        ];

        foreach ($permissions as $key) {
            Permission::firstOrCreate(
                ['key' => $key],
                ['name' => ucfirst($key)]
            );
        }
    }
}
