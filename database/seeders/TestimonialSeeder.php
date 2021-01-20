<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'image' => '01.jpg',
            'name' =>'Michael Smith',
            'job' => 'CEO Company',
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image' => '02.jpg',
            'name' =>'Michael Smith',
            'job' => 'CEO Company',
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image' => '03.jpg',
            'name' =>'Michael Smith',
            'job' => 'CEO Company',
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image' => '02.jpg',
            'name' =>'Michael Smith',
            'job' => 'CEO Company',
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image' => '03.jpg',
            'name' =>'Michael Smith',
            'job' => 'CEO Company',
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image' => '01.jpg',
            'name' =>'Michael Smith',
            'job' => 'CEO Company',
            'testimonial' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
    }
}
