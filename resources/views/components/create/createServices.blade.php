@extends('adminlte::page')


@section('content')

<div class="container">
    <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <h3 class="text-center my-5">Create services</h3>
        <div class="form-group">
        <label for="exampleInputPassword1">icon</label>
            <select class="form-select" aria-label="Default select example" name="icon">
                <option name="icon">flaticon-001-picture</option>
                <option name="icon">flaticon-002-caliper</option>
                <option name="icon">flaticon-003-energy-drink</option>
                <option name="icon">flaticon-004-build</option>
                <option name="icon">flaticon-005-thinking-1</option>
                <option name="icon">flaticon-006-prism</option>
                <option name="icon">flaticon-007-paint</option>
                <option name="icon">flaticon-008-team</option>
                <option name="icon">flaticon-009-idea-3</option>
                <option name="icon">flaticon-010-diamond</option>
                <option name="icon">flaticon-011-compass</option>
                <option name="icon">flaticon-012-cube</option>
                <option name="icon">flaticon-013-puzzle</option>
                <option name="icon">flaticon-014-magic-wand</option>
                <option name="icon">flaticon-015-book</option>
                <option name="icon">flaticon-016-vision</option>
                <option name="icon">flaticon-017-notebook</option>
                <option name="icon">flaticon-018-laptop-1</option>
                <option name="icon">flaticon-019-coffee-cup</option>
                <option name="icon">flaticon-020-creativity</option>
                <option name="icon">flaticon-021-thinking</option>
                <option name="icon">flaticon-022-branding</option>
                <option name="icon">flaticon-023-flask</option>
                <option name="icon">flaticon-024-idea-2</option>
                <option name="icon">flaticon-025-imagination</option>
                <option name="icon">flaticon-026-search</option>
                <option name="icon">flaticon-027-monitor</option>
                <option name="icon">flaticon-028-idea-1</option>
                <option name="icon">flaticon-029-sketchbook</option>
                <option name="icon">flaticon-030-computer</option>
                <option name="icon">flaticon-031-scheme</option>
                <option name="icon">flaticon-032-explorer</option>
                <option name="icon">flaticon-033-museum</option>
                <option name="icon">flaticon-034-cactus</option>
                <option name="icon">flaticon-035-smartphone</option>
                <option name="icon">flaticon-036-brainstorming</option>
                <option name="icon">flaticon-037-idea</option>
                <option name="icon">flaticon-038-graphic-tool-1</option>
                <option name="icon">flaticon-039-vector</option>
                <option name="icon">flaticon-040-rgb</option>
                <option name="icon">flaticon-041-graphic-tool</option>
                <option name="icon">flaticon-042-typography</option>
                <option name="icon">flaticon-043-sketch</option>
                <option name="icon">flaticon-044-paint-bucket</option>
                <option name="icon">flaticon-045-video-player</option>
                <option name="icon">flaticon-046-laptop</option>
                <option name="icon">flaticon-047-artificial-intelligence</option>
                <option name="icon">flaticon-048-abstract</option>
                <option name="icon">flaticon-049-projector</option>
                <option name="icon">flaticon-050-satellite</option>
            </select>
        </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Description</label>
          <input type="text" class="form-control" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@stop