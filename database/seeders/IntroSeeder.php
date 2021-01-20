<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intros')->insert([
            'logo' => 'logo.png',
            'image1' => '01.jpg',
            'image2' => '02.jpg',
            'slogan' => 'Get your freebie template now!', 
            'nav1' => 'Home',
            'nav2' => 'Services',
            'nav3' => 'Blog',
            'nav4' => 'Contact',
        ]);
    }
}
