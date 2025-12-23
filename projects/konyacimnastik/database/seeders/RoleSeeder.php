<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'Super Admin', 'key' => 'superadmin'],
            ['name' => 'Editor', 'key' => 'editor'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['key' => $role['key']],
                ['name' => $role['name']]
            );
        }
    }
}
