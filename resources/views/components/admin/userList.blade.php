@extends('adminlte::page')


@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">First</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $e)
        <tr>
            <th scope="row">{{$e->name}}</th>
            <td>{{$e->email}}</td>
            <td>{{$e->roles->name}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{$users->links()}}
    </div>
@stop