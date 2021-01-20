<!-- Testimonial section -->
<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach($testimonials as $e)
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$e->testimonial}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{asset('img/avatar/'.$e->image)}}" alt="">
								</div>
								<div class="client-name">
									<h2>{{$e->name}}</h2>
									<p>{{$e->job}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->