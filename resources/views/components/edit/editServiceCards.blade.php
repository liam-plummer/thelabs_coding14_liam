@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/servicecards/{{ $servicecards->id }}" method="POST" enctype="multipart/form-data">
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
          <label for="exampleInputPassword1">Item1</label>
          <input type="text" class="form-control" name="item1" value="{{ $servicecards->item1 }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">title</label>
          <input type="text" class="form-control" name="title" value="{{ $servicecards->title }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">description</label>
          <input type="text" class="form-control" name="description" value="{{ $servicecards->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop