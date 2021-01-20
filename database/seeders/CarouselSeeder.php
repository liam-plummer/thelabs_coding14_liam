<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            'banner' => '01.jpg',
        ]);
        DB::table('carousels')->insert([
            'banner' => '02.jpg',
        ]);
    }
}
