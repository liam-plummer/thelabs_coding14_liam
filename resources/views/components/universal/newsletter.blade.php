<!-- newsletter section -->
<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
					<!-- newsletter form -->
					<form class="nl-form" action="{{route('newsletter.store')}}" method="POST">
						@csrf
						<input type="text" placeholder="Your e-mail here" name="email">
						<!-- @foreach($boutons as $btn) -->
							<button class="site-btn btn-2">Subscribe</button>
						<!-- @endforeach -->
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- newsletter section end-->