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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">First</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $e)
            <tr>
                <th scope="row">{{$e->name}}</th>
                <td>{{$e->email}}</td>
                <td>{{$e->roles->name}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$users->links()}}
        </div>
    </div>
@stop
