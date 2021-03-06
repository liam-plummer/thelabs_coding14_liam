<?php

namespace Database\Seeders;

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
            'name' => 'Liam',
            'email' => 'test@email.com',
            'password' => Hash::make('password'),
            'role_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Liam',
            'email' => 'author@email.com',
            'password' => Hash::make('password'),
            'role_id' => 5
        ]);
    }
}
