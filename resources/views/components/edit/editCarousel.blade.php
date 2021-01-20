@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/carousel/{{ $carousel->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit Image</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Banner</label>
          <input type="file" class="form-control" name="banner" value="{{ $carousel->banner }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop