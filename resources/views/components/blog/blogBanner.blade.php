@foreach($navbars as $e)
<header class="header-section">
		<div class="logo">
			<img src="{{asset('img/logo.png')}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li ><a href="{{route('home')}}">{{$e->item1}}</a></li>
				<li><a href="{{route('service')}}">{{$e->item2}}</a></li>
				<li  class="active"><a href="{{route('blog')}}">{{$e->item3}}</a></li>
				<li><a href="{{route('contactpage')}}">{{$e->item4}}</a></li>
				<li><a href="{{route('admin')}}">Admin</a></li>
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