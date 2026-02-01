<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call UserSeeder to insert users
        $this->call(UserSeeder::class);
    }
}
