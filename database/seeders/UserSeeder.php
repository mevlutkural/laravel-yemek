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
            'name_surname' => 'Hakan ICOZ',
            'email'        => 'hakanicoz@gmail.com',
            'password'     => Hash::make('12345'),
            'is_active'    => 1,
            'is_admin'     => 1
        ]);
    }
}
