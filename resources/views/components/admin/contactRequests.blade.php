@extends('adminlte::page')


@section('content')
    <table class="table table-borderless mx-auto w-25">
    @foreach($contactforms as $e)
        <tr><td><br></td></tr>
        <tr class="border border-dark mt-5 d-flex flex-column">
            <td class="p-5">
                  <h4 class="text-info">{{$e->name}}</h4>
            </td>
            <td class="p-5">{{$e->subject}}</td>
            <td class="p-5">{{$e->message}}</td>
        </tr>
        <tr><td><br></td></tr>
    @endforeach
@stop