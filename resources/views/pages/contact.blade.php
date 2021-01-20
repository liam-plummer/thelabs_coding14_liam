@extends('templates.structure')

@section('content')
    @include('components.contact.contactBanner')
    <div class="map" id="map-area"></div>
    @include('components.universal.contactFooter')
    <script src="{{asset('js/map.js')}}"></script>
@endsection