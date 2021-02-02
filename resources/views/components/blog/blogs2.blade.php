
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
								<h2>{{$e->created_at->format('d')}}</h2>
								<h3>{{$e->created_at->format('M Y')}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title">{{$e->title}}</h2>
							<div class="post-meta">
								<a href="">{{$e->users->name}}</a>
								<a href="">
									@foreach($e->tags as $tag)
										@if ($loop->first)
											{{$tag ->name}},
    									@endif
    									@if ($loop->last)
    									    {{$tag ->name}}
    									@endif
									@endforeach
								</a>
								<a href="">{{count($comments) }} Comments</a>
							</div>
							<p>{{$e->post}}</p>
							<a href="{{route('blogpost')}}" class="read-more">Read More</a>
						</div>
					</div>
					@endforeach
					<!-- Post item -->
				
					<!-- Pagination -->
					<div class="text-center">
    				    {{ $blogposts->links() }}
    				</div>
				</div>
                @include('components.blog.sidebar2')
            </div>
        </div>
    </div>

