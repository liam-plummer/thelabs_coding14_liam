<!-- Services section -->
<div class="services-section spad">
		<div class="container">
		@foreach($titles as $e)
			<div class="section-title dark">
				<h2>{{$e->title1}}</h2>
			</div>
		@endforeach
			<div class="row">
			@foreach($services as $e)
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$e->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$e->title}}</h2>
							<p>{{$e->description}}</p>
						</div>
					</div>
				</div>
			@endforeach
			@foreach($boutons as $btn)
				<div class="text-center">
					<a href="{{route('service')}}" class="site-btn">{{$btn->btn1}}</a>
				</div>
			@endforeach
		</div>
	</div>
	<!-- services section end -->
</div>