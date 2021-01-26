<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\Bouton;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\NewsletterMail as ModelsNewsletterMail;
use App\Models\PrimeService;
use App\Models\SectionTitle;
use App\Models\Service;
use App\Models\ServiceCard;
use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $servicecards = ServiceCard::all();
        $navbars = Navbar::all();
        $primeservices1 = Service::all()->slice(3,3);
        $primeservices2 = Service::all()->slice(6,3);
        $services = Service::paginate(9);
        $boutons = Bouton::all();
        $primes = PrimeService::all();
        $titles = SectionTitle::all();
        $newsletterMails = ModelsNewsletterMail::all();
        $footers = Footer::all();
        return view('pages.service', compact('services','contacts', 'servicecards', 'navbars', 'primeservices1', 'primeservices2', 'primes', 'boutons', 'titles', 'footers', 'newsletterMails'));
    }
}
