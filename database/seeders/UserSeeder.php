<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
                'phone' => '08123456789',
                'role' => 'admin',
                'status' => 'active',
            ],

            [
                'name' => 'User1',
                'username' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('123456789'),
                'phone' => '08123456788',
                'role' => 'user',
                'status' => 'active',
            ],

            [
                'name' => 'User2',
                'username' => 'user2',
                'email' => 'user2@gmail.com',
                'password' => Hash::make('123456789'),
                'phone' => '08123456789',
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
