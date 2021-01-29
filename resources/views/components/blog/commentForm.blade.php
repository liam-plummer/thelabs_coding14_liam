@if(Auth::user())
	<div class="row">
		<div class="col-md-9 comment-from">
			<h2>Leave a comment</h2>
			<form class="form-class" action="{{route('comment.store')}}" method="POST" enctype="multipart/form-data">
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
			<div class="row">
				<div class="col-sm-6">
					<input type="text" name="name" placeholder="Your name">
				</div>
				<div class="col-sm-6">
					<input type="text" name="email" placeholder="Your email">
				</div>
				<div class="col-sm-12">
					<input type="text" name="subject" placeholder="Subject">
					<textarea name="comment" placeholder="Message"></textarea>
					<button class="site-btn">send</button>
				</div>
			</div>
			</form>
		</div>
	</div>
@else
	<a href="{{ route('login') }}" class="btn btn-success">Login</a>
	<a href="{{ route('register') }}" class="btn btn-info">Register</a>
@endif