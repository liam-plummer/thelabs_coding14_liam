<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bouton;
use App\Models\Button;
use App\Models\Carousel;
use App\Models\Contact;
use App\Models\Home;
use App\Models\HomeVideo;
use App\Models\Intro;
use App\Models\MapAdress;
use App\Models\Navbar;
use App\Models\Promotion;
use App\Models\SectionTitle;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all()->take(6);
        $intros = Intro::all();
        $promotions = Promotion::all();
        $teams = Team::all();
        $services = Service::all()->shuffle();
        $aboutServices = Service::all()->random(3);
        $abouts = About::all();
        $videos = HomeVideo::all();
        $contacts = Contact::all();
        $navbars = Navbar::all();
        $boutons = Bouton::all();
        $banners = Carousel::all();
        $adress = MapAdress::all();
        $titles = SectionTitle::all();
        return view('pages.home', compact('testimonials', 'intros', 'promotions', 'teams', 'services', 'abouts', 'videos', 'aboutServices','contacts','navbars', 'boutons', 'banners', 'adress', 'titles'));
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
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
