@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <a href="{{route('home')}}"><h1>Boutons</h1></a>
    <hr class="w-50">
</div>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Bouton Services</th>
          <th scope="col">Bouton Newsletter</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($boutons as $e)
        <tr>
            <th scope="row">{{$e->btn1}}</th>
            <td>{{$e->btn2}}</td>
            <td><a class="bg-success border-0 p-2" href="/bouton/{{$e->id}}/edit">Edit</a></td>
        </tr>
      @endforeach
      </tbody>
    </table>

@stop