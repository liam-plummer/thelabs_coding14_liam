<?php

namespace App\Http\Controllers;

use App\Models\BlogInsta;
use App\Models\BlogPost;
use App\Models\Categorie;
use App\Models\Navbar;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function index()
    {
        // $blogposts = BlogPost::all();
        $navbars = Navbar::all();
        $tags = Tag::all()->random(9)->shuffle();
        $categories = Categorie::all()->take(6)->shuffle();
        $instas = BlogInsta::all();
        return view('pages.blog', compact('navbars','tags', 'categories', 'instas'));
    }
}
