@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">What would you like to edit?</p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Choose...
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{route('navbar.index')}}">Navbar</a>
                          <a class="dropdown-item" href="{{route('services.index')}}">Services</a>
                          <a class="dropdown-item" href="{{route('contacts.index')}}">Contact info</a>
                          <a class="dropdown-item" href="{{route('homevideo.index')}}">Home Video</a>
                          <a class="dropdown-item" href="{{route('about.index')}}">About info</a>
                          <a class="dropdown-item" href="{{route('servicecards.index')}}">ServiceCards</a>
                          <a class="dropdown-item" href="{{route('bouton.index')}}">Bouton</a>
                          <a class="dropdown-item" href="{{route('testimonial.index')}}">Testimonials</a>
                          <a class="dropdown-item" href="{{route('carousel.index')}}">Image Carousel</a>
                          <a class="dropdown-item" href="{{route('title.index')}}">Titres Section</a>
                          <a class="dropdown-item" href="{{route('map.index')}}">Google Maps</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column ml-2 p-2">
                    <h6>Members List</h6>
                    <a href="{{route('userlist.index')}}" class="btn-success p-2 w-25">View Users</a>
                </div>
                <div class="d-flex flex-column ml-2 p-2">
                    <h6>Newsletter Subscribers</h6>
                    <a href="{{route('newsletters.index')}}" class="btn-primary p-2 w-25">View Subscribers</a>
                </div>
                <div class="d-flex flex-column ml-2 p-2">
                    <h6>Contact Requests</h6>
                    <a href="{{route('contactform.index')}}" class="btn-primary p-2 w-25">View Contact Requests</a>
                </div>
            </div>
        </div>
    </div>
@stop
