<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Michael Urbina',
            'email' => 'michael130199@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
