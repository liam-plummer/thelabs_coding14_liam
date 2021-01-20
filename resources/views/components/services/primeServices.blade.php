<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
        @foreach($primes as $e)
			<div class="section-title">
				<h2>{{$e->title}}</h2>
			</div>
        @endforeach
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
                    @foreach($primeservices1 as $e)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$e->title}}</h2>
							<p>{{$e->description}}</p>
						</div>
						<div class="icon">
							<i class="{{$e->icon}}"></i>
						</div>
					</div>
                    @endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
                @foreach($primeservices2 as $e)
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$e->icon}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$e->title}}</h2>
							<p>{{$e->description}}</p>
						</div>
					</div>
                @endforeach
				</div>
			</div>
            @foreach($primes as $e)
			<div class="text-center mt100">
				<a href="" class="site-btn">{{$e->button}}</a>
			</div>
            @endforeach
		</div>
	</div>
	<!-- features section end-->