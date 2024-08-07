<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\WebMaster;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('pass')
        ]);

        WebMaster::create([
            'key' => 'env',
            'value' => 'development'
        ]);
    }
}