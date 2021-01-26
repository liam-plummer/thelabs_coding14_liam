<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('blog_posts')->insert([
            'image' => 'blog-3.jpg',
            'title' => 'Just a simple blog post',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo',
            'author' => 'user_id',
        ]);
        DB::table('blog_posts')->insert([
            'image' => 'blog-1.jpg',
            'title' => 'Just a simple blog post',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo',
            'author' => 'user_id',
        ]);
        DB::table('blog_posts')->insert([
            'image' => 'blog-2.jpg',
            'title' => 'Just a simple blog post',
            'post' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo',
            'author' => 'user_id',
        ]);
        foreach(BlogPost::all() as $blogpost) {
            $tags = \App\Models\Tag::all()->shuffle()->take(2)->pluck('id');
            $blogpost->tags()->attach($tags);
        }
        
    }
}
