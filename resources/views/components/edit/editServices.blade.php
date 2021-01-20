@extends('adminlte::page')


@section('content')
<div class="container">
    <form action="/services/{{ $service->id }}" method="POST" enctype="multipart/form-data">
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
        <h3 class="text-center my-5">Edit services</h3>
        <div class="form-group">
          <label for="exampleInputPassword1">icon</label>
            <select class="form-select" aria-label="Default select example" name="icon"">
                <option value="{{$service->icon}}">flaticon-001-picture</option>
                <option value="{{$service->icon}}">flaticon-002-caliper</option>
                <option value="{{$service->icon}}">flaticon-003-energy-drink</option>
                <option value="{{$service->icon}}">flaticon-004-build</option>
                <option value="{{$service->icon}}">flaticon-005-thinking-1</option>
                <option value="{{$service->icon}}">flaticon-006-prism</option>
                <option value="{{$service->icon}}">flaticon-007-paint</option>
                <option value="{{$service->icon}}">flaticon-008-team</option>
                <option value="{{$service->icon}}">flaticon-009-idea-3</option>
                <option value="{{$service->icon}}">flaticon-010-diamond</option>
                <option value="{{$service->icon}}">flaticon-011-compass</option>
                <option value="{{$service->icon}}">flaticon-012-cube</option>
                <option value="{{$service->icon}}">flaticon-013-puzzle</option>
                <option value="{{$service->icon}}">flaticon-014-magic-wand</option>
                <option value="{{$service->icon}}">flaticon-015-book</option>
                <option value="{{$service->icon}}">flaticon-016-vision</option>
                <option value="{{$service->icon}}">flaticon-017-notebook</option>
                <option value="{{$service->icon}}">flaticon-018-laptop-1</option>
                <option value="{{$service->icon}}">flaticon-019-coffee-cup</option>
                <option value="{{$service->icon}}">flaticon-020-creativity</option>
                <option value="{{$service->icon}}">flaticon-021-thinking</option>
                <option value="{{$service->icon}}">flaticon-022-branding</option>
                <option value="{{$service->icon}}">flaticon-023-flask</option>
                <option value="{{$service->icon}}">flaticon-024-idea-2</option>
                <option value="{{$service->icon}}">flaticon-025-imagination</option>
                <option value="{{$service->icon}}">flaticon-026-search</option>
                <option value="{{$service->icon}}">flaticon-027-monitor</option>
                <option value="{{$service->icon}}">flaticon-028-idea-1</option>
                <option value="{{$service->icon}}">flaticon-029-sketchbook</option>
                <option value="{{$service->icon}}">flaticon-030-computer</option>
                <option value="{{$service->icon}}">flaticon-031-scheme</option>
                <option value="{{$service->icon}}">flaticon-032-explorer</option>
                <option value="{{$service->icon}}">flaticon-033-museum</option>
                <option value="{{$service->icon}}">flaticon-034-cactus</option>
                <option value="{{$service->icon}}">flaticon-035-smartphone</option>
                <option value="{{$service->icon}}">flaticon-036-brainstorming</option>
                <option value="{{$service->icon}}">flaticon-037-idea</option>
                <option value="{{$service->icon}}">flaticon-038-graphic-tool-1</option>
                <option value="{{$service->icon}}">flaticon-039-vector</option>
                <option value="{{$service->icon}}">flaticon-040-rgb</option>
                <option value="{{$service->icon}}">flaticon-041-graphic-tool</option>
                <option value="{{$service->icon}}">flaticon-042-typography</option>
                <option value="{{$service->icon}}">flaticon-043-sketch</option>
                <option value="{{$service->icon}}">flaticon-044-paint-bucket</option>
                <option value="{{$service->icon}}">flaticon-045-video-player</option>
                <option value="{{$service->icon}}">flaticon-046-laptop</option>
                <option value="{{$service->icon}}">flaticon-047-artificial-intelligence</option>
                <option value="{{$service->icon}}">flaticon-048-abstract</option>
                <option value="{{$service->icon}}">flaticon-049-projector</option>
                <option value="{{$service->icon}}">flaticon-050-satellite</option>
            </select> 
        </div>
        <div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$service->icon}} p-5"></i>
						</div>
					</div>
				</div>
        <div class="form-group">
          <label for="exampleInputPassword1">title</label>
          <input type="text" class="form-control" name="title" value="{{ $service->title}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">description</label>
          <input type="text" class="form-control" name="description" value="{{ $service->description }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@stop