<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
               'name'   =>  'User',
               'email'  =>  'user@gmail.com',
               'role'   =>  0,
               'password'   => bcrypt('12344321'),
            ],
            [
               'name'   =>  'Admin',
               'email'  =>  'admin@gmail.com',
               'role'   =>  1,
               'password'   => bcrypt('12344321'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
