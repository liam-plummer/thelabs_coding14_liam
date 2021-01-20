@extends('templates.structure')

@section('content')
    @include('components.contact.contactBanner')
    @foreach($adress as $e)
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="675" id="gmap_canvas" src="https://maps.google.com/maps?q={{$e->adress}}&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/1"></a><br><style>.mapouter{position:relative;text-align:right;height:675px;width:100%;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:675px;width:100%;}</style></div></div>
    @endforeach
    @include('components.universal.contactFooter')
    <script src="{{asset('js/map.js')}}"></script>
@endsection