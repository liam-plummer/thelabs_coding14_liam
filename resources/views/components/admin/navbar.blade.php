@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <a href="{{route('home')}}"><h1>Navbar</h1></a>
    <hr class="w-50">
</div>
    <table class="table">
      <thead class="thead-light">
        <tr> 
          <th scope="col">Item1</th>
          <th scope="col">Item2</th>
          <th scope="col">Item3</th>
          <th scope="col">Item4</th>
          <th scope="col">Logo</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($navbars as $e)
        <tr>
          <th scope="row">{{$e->item1}}</th>
          <td>{{$e->item2}}</td>
          <td>{{$e->item3}}</td>
          <td>{{$e->item4}}</td>
          <td><img src="{{asset('img/'.$e->image)}}" alt="" height="50px" width="100px"></td>
          <td><a class="bg-success border-0 p-2" href="/navbar/{{ $e->id }}/edit">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
@stop