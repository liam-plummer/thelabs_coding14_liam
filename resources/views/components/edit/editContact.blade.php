@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/contacts/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit Contact Info</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">Title</label>
          <input type="text" class="form-control" name="title" value="{{ $contact->title }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">text</label>
          <input type="text" class="form-control" name="text" value="{{ $contact->text }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">recipient</label>
          <input type="text" class="form-control" name="recipient" value="{{ $contact->recipient }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">street</label>
          <input type="text" class="form-control" name="street" value="{{ $contact->street }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">place</label>
          <input type="text" class="form-control" name="place" value="{{ $contact->place }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">phoneNumber</label>
          <input type="text" class="form-control" name="phoneNumber" value="{{ $contact->phoneNumber }}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">email</label>
          <input type="text" class="form-control" name="email" value="{{ $contact->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop