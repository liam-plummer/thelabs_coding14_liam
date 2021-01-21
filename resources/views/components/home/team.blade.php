<!-- Team Section -->
<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
		@foreach($titles as $e)
			<div class="section-title">
				<h2>{{$e->title2}}</h2>
			</div>
		@endforeach
			<div class="row">
				@foreach($teams as $e)
				<!-- single member -->
					<div class="col-sm-4">
						<div class="member">
							<img src="{{asset('img/team/'.$e->image)}}" alt="">
							<h2>{{$e->name}}</h2>
							<h3>{{$e->job}}</h3>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->