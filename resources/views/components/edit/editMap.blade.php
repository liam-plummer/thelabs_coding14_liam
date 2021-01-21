@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/map/{{ $mapAdress->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("put")
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <h3 class="text-center my-5">Edit Map Location</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Adress</label>
          <input type="text" class="form-control" name="btn1" value="{{ $mapAdress->adress }}">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop