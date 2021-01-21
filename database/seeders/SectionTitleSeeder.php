<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('section_titles')->insert([
            'title1' => 'GET IN ~ THE LAB ~~ AND SEE THE SERVICES',
            'title2' =>  'GET IN ~ THE LAB ~~ AND MEET THE TEAM'
        ]);
    }
}
