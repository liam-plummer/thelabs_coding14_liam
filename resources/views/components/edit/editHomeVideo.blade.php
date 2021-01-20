@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/homevideo/{{ $homevideo->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit servicecardss</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Thumbnail</label>
          <input type="file" class="form-control" name="thumbnail" value="{{ $homevideo->thumbnail }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Video</label>
          <input type="text" class="form-control" name="video" value="{{ $homevideo->video }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop