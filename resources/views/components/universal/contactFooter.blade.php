<!-- Contact section -->
<div class="contact-section spad fix">
		<div class="container">

			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					@foreach($contacts as $e)
					<div class="section-title left">
						<h2>{{$e->title}}</h2>
					</div>
					<p>{{$e->text}}</p>
					<h3 class="mt60">{{$e->recipient}}</h3>
					<p class="con-item">{{$e->street}}<br> {{$e->place}} </p>
					<p class="con-item">{{$e->phoneNumber}}</p>
					<p class="con-item">{{$e->email}}</p>
					@endforeach
				</div>
				<!-- contact form -->
				<div class="col-md-6 col-pull" >
					<form class="form-class" id="con_form" action="{{route('contactform.store')}}" method="POST" enctype="multipart/form-data">
					    @csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" name="name" placeholder="Your name">
							</div>
							<div class="col-sm-6">
								<input type="text" name="email" placeholder="Your email">
							</div>
							<div class="col-sm-12">
								<input type="text" name="subject" placeholder="Subject">
								<textarea name="message" placeholder="Message"></textarea>
								<button class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>