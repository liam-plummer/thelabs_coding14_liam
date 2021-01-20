<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Vestibulum maximus'
        ]);
        DB::table('categories')->insert([
            'category' => 'Nisi eu lobortis pharetra'
        ]);
        DB::table('categories')->insert([
            'category' => 'Orci quam accumsan'
        ]);
        DB::table('categories')->insert([
            'category' => 'Auguen pharetra massa'
        ]);
        DB::table('categories')->insert([
            'category' => 'Auguen pharetra massa'
        ]);
        DB::table('categories')->insert([
            'category' => 'Tellus ut nulla'
        ]);
        DB::table('categories')->insert([
            'category' => 'Etiam egestas viverra'
        ]);
    }
}
