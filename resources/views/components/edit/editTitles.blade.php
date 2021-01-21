@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/title/{{ $sectionTitle->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit Titres</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Titre Services</label>
          <input type="text" class="form-control" name="title1" value="{{ $sectionTitle->title1 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Titre Team</label>
          <input type="text" class="form-control" name="title2" value="{{ $sectionTitle->title2 }}">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@stop