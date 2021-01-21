@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <a href="{{route('home')}}"><h1>Titres</h1></a>
    <hr class="w-50">
</div>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Titre Service</th>
          <th scope="col">Titre Team</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($titles as $e)
        <tr>
            <th scope="row">{{$e->title1}}</th>
            <td><strong>{{$e->title2}}</strong></td>
            <td><a class="bg-success border-0 p-2" href="/title/{{$e->id}}/edit">Edit</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

@stop