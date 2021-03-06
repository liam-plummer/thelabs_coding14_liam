<?php

namespace App\Http\Controllers;

use App\Models\MapAdress;
use Illuminate\Http\Request;

class MapAdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adresses = MapAdress::all();
        return view('components.admin.map', compact('adresses'));
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
     * @param  \App\Models\MapAdress  $mapAdress
     * @return \Illuminate\Http\Response
     */
    public function show(MapAdress $mapAdress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MapAdress  $mapAdress
     * @return \Illuminate\Http\Response
     */
    public function edit(MapAdress $mapAdress)
    {
        return view('components.edit.editMap', compact('mapAdress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MapAdress  $mapAdress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MapAdress $mapAdress)
    {
        $request->validate([
            'adress' => "required"
        ]);
        $mapAdress->adress=$request->adress;

        $mapAdress->save();
        return redirect()->route('map.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MapAdress  $mapAdress
     * @return \Illuminate\Http\Response
     */
    public function destroy(MapAdress $mapAdress)
    {
        //
    }
}
