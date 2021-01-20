<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prime_services')->insert([
            'title' => 'GET IN THE LAB AND DISCOVER THE WORLD',
            'button' => 'BROWSE'
        ]);
    }
}
