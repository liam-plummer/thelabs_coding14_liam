<!-- Services section -->
<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
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
		</div>
	</div>
    <div class="text-center">
        {{ $services->links('pagination::bootstrap-4') }}
    </div>
	<!-- services section end -->
</div>