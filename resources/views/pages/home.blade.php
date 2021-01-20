@extends('templates.structure')

@section('content')
    @include('components.home.homeBanner')
    @include('components.home.about')
    @include('components.home.testimonials')
    @include('components.home.services')
    @include('components.home.team')
    @include('components.home.promotion')
    @include('components.universal.contactFooter')
@endsection