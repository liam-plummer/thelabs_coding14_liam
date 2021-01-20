@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/bouton/{{ $bouton->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit About Info</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Bouton Service</label>
          <input type="text" class="form-control" name="btn1" value="{{ $bouton->btn1 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Bouton Newsletter</label>
          <input type="text" class="form-control" name="btn2" value="{{ $bouton->btn2 }}">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop