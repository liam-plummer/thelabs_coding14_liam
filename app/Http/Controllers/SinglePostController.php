<?php

namespace App\Http\Controllers;

use App\Models\BlogInsta;
use App\Models\BlogComment;
use App\Models\BlogPost;
use App\Models\Categorie;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\SinglePost;
use App\Models\Tag;
use Illuminate\Http\Request;

class SinglePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbars = Navbar::all();
        $tags = Tag::all()->random(9)->shuffle();
        $categories = Categorie::all()->take(6)->shuffle();
        $instas = BlogInsta::all();
        $footers = Footer::all();
        $blogposts = BlogPost::all();
        $comments = BlogComment::all()
        return view('pages.blogPost', compact('navbars','tags', 'categories', 'instas','footers', 'blogposts', 'comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SinglePost  $singlePost
     * @return \Illuminate\Http\Response
     */
    public function show(SinglePost $singlePost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SinglePost  $singlePost
     * @return \Illuminate\Http\Response
     */
    public function edit(SinglePost $singlePost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SinglePost  $singlePost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SinglePost $singlePost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SinglePost  $singlePost
     * @return \Illuminate\Http\Response
     */
    public function destroy(SinglePost $singlePost)
    {
        //
    }
}
