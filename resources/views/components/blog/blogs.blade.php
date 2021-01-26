
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach($blogposts as $e)
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{asset('img/blog/'.$e->image)}}" alt="">
							<div class="post-date">
								<h2>03</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$e->title}}</h2>
							<div class="post-meta">
								<a href="">Loredana Papp</a>
								@foreach($e->tags as $tag)
									<a href="">{{$tag ->name}}</a>
								@endforeach
								<a href="">2 Comments</a>
							</div>
							<p>{{$e->post}}</p>
							<a href="blog-post.html" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach
					<!-- Post item -->
				
					<!-- Pagination -->
					<div class="page-pagination">
						<a class="active" href="">01.</a>
						<a href="">02.</a>
						<a href="">03.</a>
					</div>
				</div>
                @include('components.blog.rightSidebar')
            </div>
        </div>
    </div>

