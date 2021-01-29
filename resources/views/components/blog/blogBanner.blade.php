@foreach($navbars as $e)
<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/'.$e->image)}}" alt="" width="111px" height="32px"><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li ><a href="{{route('home')}}">{{$e->item1}}</a></li>
				<li><a href="{{route('service')}}">{{$e->item2}}</a></li>
				<li  class="active"><a href="{{route('blog')}}">{{$e->item3}}</a></li>
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


	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>{{$e->item3}}</h2>
				<div class="page-links">
					<a href="#">{{$e->item1}}</a>
					<span>{{$e->item3}}</span>
				</div>
			</div>
		</div>
	</div>
	@endforeach