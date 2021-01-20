<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Branding'
        ]);
        DB::table('tags')->insert([
            'name' => 'Identity'
        ]);
        DB::table('tags')->insert([
            'name' => 'Video'
        ]);
        DB::table('tags')->insert([
            'name' => 'Design'
        ]);
        DB::table('tags')->insert([
            'name' => 'Inspiration'
        ]);
        DB::table('tags')->insert([
            'name' => 'Web Design'
        ]);
        DB::table('tags')->insert([
            'name' => 'Photography'
        ]);
    }
}
