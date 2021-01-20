@extends('adminlte::page')


@section('content')
<div class="mb-5 text-center">
    <a href="{{route('service')}}"><h1>Services</h1></a>
    <hr class="w-50">
    <a class="btn btn-primary" href="{{ route('services.create') }}">Create</a>
</div>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">Icon</th>
          <th scope="col">Text</th>
          <th scope="col">Descriptiuon</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($services as $e)
        <tr>
            <th scope="row">						
              <div class="icon">
			    	    <i class="{{$e->icon}}"></i>
			        </div>
            </th>
            <td>{{$e->title}}</td>
            <td>{{$e->description}}</td>
            <td>
              <div class="d-flex">
                <a class="bg-success border-0 p-2" href="/services/{{$e->id}}/edit">Edit</a>
                <form action="/services/{{ $e->id }}" method="post">
                  @csrf
                  @method("delete")
                  <button class="btn btn-danger ml-2"  type="submit">Delete</button>
                </form>
              </div>
            </td>
        </tr>
      @endforeach
      </tbody>
    </table>
@stop