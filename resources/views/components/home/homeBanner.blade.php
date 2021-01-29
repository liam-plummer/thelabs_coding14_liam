	<!-- Header section -->
	@foreach($navbars as $e)
	<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/'.$e->image)}}" alt="" width="111px" height="32px"><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>

		<nav>
			<ul class="menu-list">
				<li class="active"><a href="{{route('home')}}">{{$e->item1}}</a></li>
				<li><a href="{{route('service')}}">{{$e->item2}}</a></li>
				<li><a href="{{route('blog')}}">{{$e->item3}}</a></li>
				<li><a href="{{route('contactpage')}}">{{$e->item4}}</a></li>
				@if(Auth::user())
							<ul class="menu-list">
        					    <li>
        					        <form method="POST" action="{{ route('logout') }}"> 
        					            @csrf
        					            <x-jet-responsive-nav-link href="{{ route('logout') }}" class=""
        					                            onclick="event.preventDefault();
        					                                        this.closest('form').submit();">
        					                {{ __('Logout') }}
        					            </x-jet-responsive-nav-link>
        					        </form>
        					    </li>
				@else
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
				@endif
			</ul>
		</nav>
	</header>
	<!-- Header section end -->
		<!-- Intro Section -->
		<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{asset('img/'.$e->image)}}" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
		@foreach($banners as $car)
			<div class="item  hero-item" data-bg="{{asset('img/'.$car->banner)}}"></div>
		@endforeach
		</div>
	</div>
	@endforeach