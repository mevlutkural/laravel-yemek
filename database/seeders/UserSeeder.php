<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name_surname' => 'Admin Admin',
            'email'        => 'admin@admin',
            'password'     => Hash::make('admin'),
            'is_active'    => 1,
            'is_admin'     => 1
        ]);
    }
}
