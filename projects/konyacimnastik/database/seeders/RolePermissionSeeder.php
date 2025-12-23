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
        $editor     = Role::where('key', 'editor')->first();

        // SUPER ADMIN → HER ŞEY
        $superAdmin->permissions()->sync(
            Permission::pluck('id')->toArray()
        );

        // EDITOR → SINIRLI
        $editor->permissions()->sync(
            Permission::whereIn('key', [
                'dashboard.view',
                'blog.view',
                'blog.create',
                'blog.edit',
            ])->pluck('id')->toArray()
        );
    }
}
