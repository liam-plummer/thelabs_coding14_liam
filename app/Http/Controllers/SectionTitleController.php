<?php

namespace App\Http\Controllers;

use App\Models\SectionTitle;
use Illuminate\Http\Request;

class SectionTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titles = SectionTitle::all();
        return view('components.admin.sectionTitles', compact('titles'));
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
     * @param  \App\Models\SectionTitle  $sectionTitle
     * @return \Illuminate\Http\Response
     */
    public function show(SectionTitle $sectionTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionTitle  $sectionTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionTitle $sectionTitle)
    {
        return view('components.edit.editTitles', compact('sectionTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionTitle  $sectionTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionTitle $sectionTitle)
    {
        $request->validate([
            'title1' => 'required',
            'title2' => 'required'
        ]);
        $sectionTitle->title1=$request->title1;
        $sectionTitle->title2=$request->title2;

        $sectionTitle->save();
        return redirect('title.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionTitle  $sectionTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionTitle $sectionTitle)
    {
        //
    }
}
