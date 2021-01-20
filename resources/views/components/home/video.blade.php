<div class="intro-video">
    <div class="row">
	@foreach($videos as $e)
    	<div class="col-md-8 col-md-offset-2">
    		<img src="{{asset('img/'.$e->thumbnail)}}" alt="">
    		<a href="{{$e->video}}" class="video-popup">
    			<i class="fa fa-play"></i>
    		</a>
    	</div>
	@endforeach
    </div>
</div>