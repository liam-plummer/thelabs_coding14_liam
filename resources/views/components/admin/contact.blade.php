@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <h1>Contact info</h1>
    <hr class="w-50">
</div>
<table class="table">
      <thead class="thead-light">
        <tr> 
          <th scope="col">Title</th>
          <th scope="col">Text</th>
          <th scope="col">Recipient</th>
          <th scope="col">Street</th>
          <th scope="col">Place</th>
          <th scope="col">Phonenumber</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($contacts as $e)
        <tr>
          <th scope="row">{{$e->title}}</th>
          <td>{{$e->text}}</td>
          <td>{{$e->recipient}}</td>
          <td>{{$e->street}}</td>
          <td>{{$e->place}} {{$e->postcode}}</td>
          <td>{{$e->phoneNumber}}</td>
          <td>{{$e->email}}</td>
          <td><a class="bg-success border-0 p-2" href="/contacts/{{ $e->id }}/edit">Edit</a></td>
        </tr>
        @endforeach
      </tbody>
</table>
@stop