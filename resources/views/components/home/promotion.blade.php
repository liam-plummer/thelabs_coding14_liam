	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
		@foreach($promotions as $e)
			<div class="row">
				<div class="col-md-9">
					<h2>{{$e->title}}</h2>
					<p>{{$e->text}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">Browse</a>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
	<!-- Promotion section end-->