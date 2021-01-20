<?php

namespace App\Http\Controllers;

use App\Models\Bouton;
use App\Models\Contact;
use App\Models\MapAdress;
use App\Models\Navbar;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $navbars = Navbar::all();
        $boutons = Bouton::all();
        $adress = MapAdress::all();
        return view('pages.contact', compact('contacts','navbars', 'boutons', 'adress'));
    }
}
