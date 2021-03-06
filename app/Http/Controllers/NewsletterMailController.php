<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail as MailNewsLetterMail;
use App\Models\NewsletterMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletterMails = NewsletterMail::all();
        $users= User::all();
        return view('components.admin.newsletterSubscribers', compact('newsletterMails', 'users'));
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
        $newsletterMail = new NewsletterMail;
        $request->validate([
            "email" => "required"
        ]);
        $newsletterMail->email=$request->email;
        Mail::to($newsletterMail)->send(new MailNewsLetterMail(''));
        $newsletterMail->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function show(NewsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsletterMail $newsletterMail)
    {
        $newsletterMail->delete();
        return redirect()->back();
    }
}
