@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <a href="{{route('contactpage')}}"><h1>Map</h1></a>
    <hr class="w-50">
</div>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Adresss</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($adresses as $e)
        <tr>
            <th scope="row">{{$e->adress}}</th>
            <td><a class="bg-success border-0 p-2" href="/map/{{$e->id}}/edit">Edit</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

@stop