@extends('templates.structure')

@section('content')
    @include('components.services.servicesBanner')
    @include('components.services.allservices')
    @include('components.services.primeServices')
    @include('components.services.services')
    @include('components.universal.newsletter')
    @include('components.universal.contactFooter')
@endsection