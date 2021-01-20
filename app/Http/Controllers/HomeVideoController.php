<?php

namespace App\Http\Controllers;

use App\Models\HomeVideo;
use Illuminate\Http\Request;

class HomeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homevideos = HomeVideo::all();
        return view('components.admin.homeVideo', compact('homevideos'));
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
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function show(HomeVideo $homeVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homevideo  $homevideo
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeVideo $homevideo)
    {
        return view('components.edit.editHomeVideo', compact('homevideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeVideo  $homeVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homevideo $homevideo)
    {
        $request->validate([
            'video' => 'required',
            'thumbnail' => 'required'
        ]);
        $homevideo->video = $request->video ; 
        $homevideo->thumbnail = $request->thumbnail; 
        $homevideo->thumbnail = $request->file("thumbnail")->hashName();
        $request->file("thumbnail")->storePublicly("img", "public");
        $homevideo->save();
        return redirect()->route('homevideo.index');
    }
}
