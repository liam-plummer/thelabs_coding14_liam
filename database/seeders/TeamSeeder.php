<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' =>  'Christinne Williams',
            'image'=> '1.jpg',
            'job' => 'Project Manager'
        ]);
        DB::table('teams')->insert([
            'name' =>  'Christinne Williams',
            'image'=> '2.jpg',
            'job' => 'Junior Developer'
        ]);
        DB::table('teams')->insert([
            'name' =>  'Christinne Williams',
            'image'=> '3.jpg',
            'job' => 'Digital Designer'
        ]);
    }
}
