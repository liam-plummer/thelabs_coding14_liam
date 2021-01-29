@extends('adminlte::page')


@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Member</th>
    </tr>
  </thead>
  <tbody>
    @foreach($newsletterMails as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td>{{$e->email}}</td>
            <td>No</td>
        </tr>
    @endforeach
    @foreach($users as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td>{{$e->email}}</td>
            <td>Yes</td>
        </tr>
    @endforeach

  </tbody>
</table>
@stop