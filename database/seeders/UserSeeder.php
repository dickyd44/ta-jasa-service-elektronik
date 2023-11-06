<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Novi',
            'email' => 'novi@gmail.com',
            'phone' => '089567452587',
            'role' => 'ADMIN',
            'password' => Hash::make('Novi-123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dicky',
            'email' => 'dicky@gmail.com',
            'phone' => '087773592720',
            'role' => 'TEKNISI',
            'password' => Hash::make('Dicky-123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Azqa',
            'email' => 'azqa@gmail.com',
            'phone' => '085354879625',
            'role' => 'TEKNISI',
            'password' => Hash::make('Azqa-123'),
        ]);
    }
}
