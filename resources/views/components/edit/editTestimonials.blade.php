@extends('adminlte::page')
@section('content')
  <div class="container">
    <form action="/testimonial/{{ $testimonial->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("put")
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <h3 class="text-center my-5">Edit Titres</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Titre Services</label>
          <input type="text" class="form-control" name="name" value="{{ $testimonial->name }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Titre Team</label>
          <input type="text" class="form-control" name="job" value="{{ $testimonial->job }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Titre Team</label>
          <input type="file" class="form-control" name="image" value="{{ $testimonial->image }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Titre Team</label>
          <input type="textarea" class="form-control" name="testimonial" value="{{ $testimonial->testimonial }}">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@stop