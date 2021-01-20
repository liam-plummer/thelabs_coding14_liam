<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_cards')->insert([
            'title' => 'GET IN THE LAB',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'image' => 'card-1.jpg'
        ]);
        DB::table('service_cards')->insert([
            'title' => 'PROJECTS ONLINE',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'image' => 'card-2.jpg'
        ]);
        DB::table('service_cards')->insert([
            'title' => 'SMART MARKETING',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'image' => 'card-3.jpg'
        ]);
    }
}
