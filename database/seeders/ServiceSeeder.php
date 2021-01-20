<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Get in the lab',
            'icon' => 'flaticon-023-flask',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'Projects online',
            'icon' => 'flaticon-011-compass',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'SMART MARKETING',
            'icon' => 'flaticon-037-idea',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'Social Media',
            'icon' => 'flaticon-039-vector',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'Brainstorming',
            'icon' => 'flaticon-036-brainstorming',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'Documented',
            'icon' => 'flaticon-026-search',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'Responsive',
            'icon' => 'flaticon-018-laptop-1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'Retina ready',
            'icon' => 'flaticon-043-sketch',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
        DB::table('services')->insert([
            'title' => 'Ultra Modern',
            'icon' => 'flaticon-012-cube',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..'
        ]);
    }
}
