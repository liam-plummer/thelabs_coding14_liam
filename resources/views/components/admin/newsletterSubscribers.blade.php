@extends('adminlte::page')


@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($newsletterMails as $e)
        <tr>
            <th scope="row">{{$e->id}}</th>
            <td>{{$e->email}}</td>
            <td>                
                <form action="/newsletters/{{ $e->id }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger ml-2" type="submit">Remove</button>
                </form>
            </td>
        </tr>
    @endforeach

  </tbody>
</table>
@stop