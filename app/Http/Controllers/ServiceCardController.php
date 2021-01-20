<?php

namespace App\Http\Controllers;

use App\Models\ServiceCard;
use Illuminate\Http\Request;

class ServiceCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicecards = ServiceCard::all();
        return view('components.admin.serviceCards', compact('servicecards'));
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
     * @param  \App\Models\ServiceCard  $serviceCard
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCard $serviceCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceCard  $serviceCard
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCard $serviceCard)
    {
        return view('components.edit.editServiceCards', compact('servicecard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceCard  $serviceCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCard $serviceCard)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'required'
        ]);
        $serviceCard->title=$request->title;
        $serviceCard->description=$request->description;
        $serviceCard->image=$request->image;
        $serviceCard->image = $request->file("image")->hashName();
        $request->file("image")->storePublicly("img", "public");
        $serviceCard->save();
        return redirect()->route('servicecard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceCard  $serviceCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCard $serviceCard)
    {
        //
    }
}
