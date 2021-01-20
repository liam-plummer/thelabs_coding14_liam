<?php

namespace App\Http\Controllers;

use App\Models\Bouton;
use Illuminate\Http\Request;

class BoutonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boutons = Bouton::all();
        return view('components.admin.bouton', compact('boutons'));
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
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function show(Bouton $bouton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function edit(Bouton $bouton)
    {
        return view('components.edit.editBoutons', compact('bouton'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bouton $bouton)
    {
        $request->validate([
            'btn1' => 'required',
            'btn2' => 'required'
        ]);

        $bouton->btn1 = $request->btn1;
        $bouton->btn2 = $request->btn2;
        $bouton->save();
        return redirect()->route('bouton.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bouton  $bouton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bouton $bouton)
    {
        //
    }
}
