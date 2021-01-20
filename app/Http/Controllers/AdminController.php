<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\HomeVideo;
use App\Models\Icon;
use App\Models\Intro;
use App\Models\Navbar;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $intros = Intro::all();
        $promotions = Promotion::all();
        $teams = Team::all();
        $services = Service::all();
        $abouts = About::all();
        $videos = HomeVideo::all();
        $contacts = Contact::all();
        $navbars = Navbar::all();
        $icons = Icon::all();
        return view('home', compact('testimonials', 'intros', 'promotions', 'teams', 'services', 'abouts', 'videos','contacts','navbars', 'icons'));
    }
}
