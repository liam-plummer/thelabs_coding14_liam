<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\BoutonController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeVideoController;
use App\Http\Controllers\MapAdressController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterMailController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SectionTitleController;
use App\Http\Controllers\ServiceCardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicesPageController;
use App\Http\Controllers\SinglePostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Models\About;
use App\Models\Bouton;
use App\Models\Carousel;
use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\HomeVideo;
use App\Models\Icon;
use App\Models\Intro;
use App\Models\MapAdress;
use App\Models\Navbar;
use App\Models\NewsletterMail;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\SinglePost;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('navbar', NavbarController::class);
Route::resource('about', AboutController::class);
Route::resource('contacts', ContactController::class);
Route::resource('promotion', PromotionController::class);
Route::resource('services', ServiceController::class);
Route::resource('servicecards', ServiceCardController::class);
Route::resource('team', TeamController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('homevideo', HomeVideoController::class);
Route::resource('bouton', BoutonController::class);
Route::resource('carousel', CarouselController::class);
Route::resource('newsletters', NewsletterMailController::class);
Route::resource('contactform', ContactFormController::class);
Route::resource('userlist', UserController::class);
Route::resource('title', SectionTitleController::class);
Route::resource('map', MapAdressController::class);
Route::get('/dashboard', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/admin', function() {
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
    $boutons = Bouton::all();
    $banners = Carousel::all();
    $users = User::simplePaginate(5);
    $contactform = ContactForm::all();
    $newsletterMails = NewsletterMail::all();
    $adresses = MapAdress::all();
    return view('home', compact('testimonials', 'intros', 'promotions', 'teams', 'services', 'abouts', 'videos','contacts','navbars', 'icons', 'boutons', 'banners', 'users', 'contactform', 'newsletterMails', 'adresses'));
})->name('admin')->middleware('auth');

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('/blogPost', [SinglePostController::class, 'index'])->name('blogpost');
Route::get('/service', [ServicesPageController::class, 'index'])->name("service");
Route::get('/contact',  [ContactPageController::class, 'index'])->name("contactpage");