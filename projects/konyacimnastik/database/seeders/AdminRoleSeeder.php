<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Admin::where('email', 'admin@konyacimnastik.test')->first();
        $editorAdmin = Admin::where('email', 'editor@konyacimnastik.test')->first();

        $superRole = Role::where('key', 'superadmin')->first();
        $editorRole = Role::where('key', 'editor')->first();

        $superAdmin?->roles()->sync([$superRole->id]);
        $editorAdmin?->roles()->sync([$editorRole->id]);
    }
}
