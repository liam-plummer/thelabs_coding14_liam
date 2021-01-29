<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_comments') -> insert([
            'subject' => "Reply",
            'name' => 'Michael Smith',
            'comment' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            'email' => "random@mail.com",
            "image" => 
            'created_at' => now()
        ]);
        DB::table('blog_comments') -> insert([
            'subject' => "Reply",
            'name' => 'Michael Smith',
            'comment' => "Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
            'email' => "random@mail.com",
            'created_at' => now()
        ]);
    }
}
