
    <div class="col-md-4 col-sm-5 sidebar">
        <a href="">Add A Post</a>
    	<!-- Single widget -->
    	<div class="widget-item">
    		<form action="#" class="search-form">
    			<input type="text" placeholder="Search">
    			<button class="search-btn"><i class="flaticon-026-search"></i></button>
    		</form>
    	</div>
    	<!-- Single widget -->
    	<div class="widget-item">
    		<h2 class="widget-title">Categories</h2>
    		<ul>
            @foreach($categories as $e)
    			<li><a href="#">{{$e->category}}</a></li>
    		@endforeach
    		</ul>
    	</div>
    	<!-- Single widget -->
    	<div class="widget-item">
    		<h2 class="widget-title">Instagram</h2>
    		<ul class="instagram">
                @foreach($instas as $e)
    			    <li><img src="{{asset('img/instagram/'.$e->image)}}" alt=""></li>
                @endforeach
    		</ul>
    	</div>
    	<!-- Single widget -->
    	<div class="widget-item">
    		<h2 class="widget-title">Tags</h2>
    		<ul class="tag">
                @foreach($tags as $e)
    			    <li><a href="">{{$e->name}}</a></li>
                @endforeach
    		</ul>
    	</div>
    	<!-- Single widget -->
    	<div class="widget-item">
    		<h2 class="widget-title">Quote</h2>
    		<div class="quote">
    			<span class="quotation">‘​‌‘​‌</span>
    			<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
    		</div>
    	</div>
    	<!-- Single widget -->
    	<div class="widget-item">
    		<h2 class="widget-title">Add</h2>
    		<div class="add">
    			<a href=""><img src="img/add.jpg" alt=""></a>
    		</div>
    	</div>
    </div>