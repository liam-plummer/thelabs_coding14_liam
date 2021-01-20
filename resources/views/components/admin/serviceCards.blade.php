@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <h1>Home Video</h1>
    <hr class="w-50">
</div>
<table class="table">
      <thead class="thead-light">
        <tr> 
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($servicecards as $e)
        <tr>
            <td>{{$e->description}}</td>
          <th scope="row">{{$e->title}}</th>        
          <td><img src="{{asset('img/'.$e->image)}}"></td>
          <td><a class="bg-success border-0 p-2" href="/servicecard/{{ $e->id }}/edit">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
</table>
@stop