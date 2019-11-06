<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Michael Urbina',
            'email' => 'michael130199@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
