<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Insert Admin
        DB::table('users')->insert([
            'username' => 'Admin',
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert User1
        DB::table('users')->insert([
            'username' => 'User1',
            'password' => Hash::make('password1'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert User2
        DB::table('users')->insert([
            'username' => 'User2',
            'password' => Hash::make('password2'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
