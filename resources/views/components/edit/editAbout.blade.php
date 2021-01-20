@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
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
          <label for="exampleInputPassword1">Title</label>
          <input type="text" class="form-control" name="title" value="{{ $about->title }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Text Gauche</label>
          <input type="textarea" class="form-control" name="text1" value="{{ $about->text1 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Text Droite</label>
          <input type="textarea" class="form-control" name="text2" value="{{ $about->text2 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Text Bouton</label>
          <input type="text" class="form-control" name="button" value="{{ $about->button }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop