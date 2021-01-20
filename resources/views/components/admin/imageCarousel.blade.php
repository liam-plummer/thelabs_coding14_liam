@extends('adminlte::page')


@section('content')

<div class="mb-5 text-center">
    <a href="{{route('home')}}"><h1>Carousel</h1></a>
    <hr class="w-50">
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($banners as $e)
    <tr>
      <th scope="row"><img src="{{asset('img/'.$e->banner)}}" alt="" width="250px" height="150px"></th>
      <td><a class="bg-success border-0 p-2" href="/carousel/{{ $e->id }}/edit">Edit</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@stop