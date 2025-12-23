<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EditorAdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::updateOrCreate(
            ['email' => 'editor@konyacimnastik.test'],
            [
                'name' => 'Editor Admin',
                'password' => Hash::make('1234'),
            ]
        );
    }
}
