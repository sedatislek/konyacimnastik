<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = Admin::updateOrCreate(
            ['email' => 'admin@konyacimnastik.test'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('1234'),
            ]
        );

        $editor = Admin::updateOrCreate(
            ['email' => 'editor@konyacimnastik.test'],
            [
                'name' => 'Editor Admin',
                'password' => Hash::make('1234'),
            ]
        );

        $superRole  = Role::where('key', 'superadmin')->first();
        $editorRole = Role::where('key', 'editor')->first();

        $superAdmin->roles()->sync([$superRole->id]);
        $editor->roles()->sync([$editorRole->id]);
    }
}

