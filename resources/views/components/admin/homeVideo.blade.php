@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <a href="{{route('home')}}"><h1>Video</h1></a>
    <hr class="w-50">
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Thumbnail</th>
      <th scope="col">Video Link</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($homevideos as $e)
    <tr>
      <th scope="row"><img src="{{asset('img/'.$e->thumbnail)}}" alt="" width="250px" height="150px"></th>
      <td>{{$e -> video}}</td>
      <td><a class="bg-success border-0 p-2" href="/homevideo/{{ $e->id }}/edit">Edit</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@stop