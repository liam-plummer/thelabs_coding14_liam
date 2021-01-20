@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/navbar/{{ $navbar->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit navbars</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Item1</label>
          <input type="text" class="form-control" name="item1" value="{{ $navbar->item1 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Item2</label>
          <input type="text" class="form-control" name="item2" value="{{ $navbar->item2 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Item3</label>
          <input type="text" class="form-control" name="item3" value="{{ $navbar->item3 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Item4</label>
          <input type="text" class="form-control" name="item4" value="{{ $navbar->item4 }}">
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Logo</label>
          <input class="form-control" type="file" id="formFile" name="image" value="{{ $navbar->image }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop