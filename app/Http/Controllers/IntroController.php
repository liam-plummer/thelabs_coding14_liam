<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function show(Intro $intro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function edit(Intro $intro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intro $intro)
    {
        $request->validate([
            'logo' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'slogan' => 'required',
            'nav1' => 'required',
            'nav2' => 'required',
            'nav3' => 'required',
            'nav4' => 'required',
        ]);
        $intro->logo = $request->logo;
        $intro->logo = $request->file("logo")->hashName();
        $request->file("logo")->storePublicly("img", "public");
        $intro->image1 = $request->image1;
        $intro->image2 = $request->image2;
        $intro->image3 = $request->image3;
        $intro->nav1 = $request->nav1;
        $intro->nav2 = $request->nav2;
        $intro->nav3 = $request->nav3;
        $intro->nav4 = $request->nav4;
        $intro->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intro  $intro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Intro $intro)
    {
        //
    }
}
