<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogInstaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_instas')->insert([
            'image' => '1.jpg'
        ]);
        DB::table('blog_instas')->insert([
            'image' => '2.jpg'
        ]);
        DB::table('blog_instas')->insert([
            'image' => '3.jpg'
        ]);
        DB::table('blog_instas')->insert([
            'image' => '4.jpg'
        ]);
        DB::table('blog_instas')->insert([
            'image' => '5.jpg'
        ]);
        DB::table('blog_instas')->insert([
            'image' => '6.jpg'
        ]);
    }
}
