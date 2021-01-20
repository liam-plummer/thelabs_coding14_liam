@extends('adminlte::page')


@section('content')
  <div class="mb-5 text-center">
      <a href="{{route('home')}}"><h1>Testimonials</h1></a>
      <hr class="w-50">
  </div>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Job</th>
        <th scope="col">Testimonial</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($testimonials as $e)
      <tr>
          <th scope="row"><img src="{{asset('img/avatar/'.$e->image)}}" alt=""></th>
          <td>{{$e->name}}</td>
          <td>{{$e->job}}</td>
          <td>{{$e->testimonial}}</td>
          <td><a class="bg-success border-0 p-2" href="/testimonial/{{$e->id}}/edit">Edit</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@stop
