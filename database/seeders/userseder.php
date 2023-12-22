<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userseder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       

    DB::table('users')->insert([
    'name' => "pramudya azis",
    'email' => 'pramudyaazis144@gmail.com',
    'password' => Hash::make('12345678'),
    // 'level' => 'admin',
    ]);

    }
}
