<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Role::where('key', 'superadmin')->first();

        if (! $superAdmin) {
            throw new Exception('Superadmin role not found');
        }

        $superAdmin->permissions()->sync(
            Permission::pluck('id')->toArray()
        );
    }
}


