@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <a href="{{route('home')}}"><h1>Section About</h1></a>
    <hr class="w-50">
</div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Text Guache</th>
      <th scope="col">Text Droite</th>
      <th scope="col">Text Bouton</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($abouts as $e)
    <tr>
      <th scope="row">{{$e->title}}</th>
      <td>{{$e -> text1}}</td>
      <td>{{$e -> text2}}</td>
      <td>{{$e -> button}}</td>
      <td><a class="bg-success border-0 p-2" href="/about/{{ $e->id }}/edit">Edit</a></td>
    </tr>
  @endforeach
  </tbody>
</table>
@stop
