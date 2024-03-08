<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Clear existing records to start with a clean slate
                DB::table('users')->truncate();

                // Seed default user
                DB::table('users')->insert([
                    'name' => 'Nasari Admin',
                    'email' => 'admin@nadi.co.id',
                    'password' => Hash::make('password'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
    }
}
