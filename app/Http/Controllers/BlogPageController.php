<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use App\Models\BlogInsta;
use App\Models\BlogPost;
use App\Models\Categorie;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPageController extends Controller
{
    public function index()
    {
        $navbars = Navbar::all();
        $tags = Tag::all()->random(9)->shuffle();
        $categories = Categorie::all()->take(6)->shuffle();
        $instas = BlogInsta::all();
        $footers = Footer::all();
        $blogposts = BlogPost::paginate(3);
        $comments= BlogComment::all();
        return view('pages.blog', compact('navbars','tags', 'categories', 'instas','footers', 'blogposts', 'comments'));
    }
}
