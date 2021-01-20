	<!-- About section -->
	<div id="about" class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach($aboutServices as $e)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class="{{$e->icon}}"></i>
							</div>
							<h2>{{$e->title}}</h2>
							<p>{{$e->description}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				@foreach($abouts as $e)
					<div class="section-title">
						<h2>{{$e->title}}</h2>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p>{{$e->text1}}</p>
						</div>
						<div class="col-md-6">
							<p>{{$e->text2}}</p>
						</div>
					</div>
					<div class="text-center mt60">
						<a href="" class="site-btn">{{$e->button}}</a>
					</div>
				@endforeach
				<!-- popup video -->
				@include('components.home.video')
			</div>
		</div>
	</div>
	<!-- About section end -->