<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            'item1' => 'Home',
            'item2' => 'Services',
            'item3' => 'Blog',
            'item4' => 'Contact',
            'image' => 'big-logo.png',
        ]);
    }
}
