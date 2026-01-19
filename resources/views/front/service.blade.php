@extends('front.master')
@section('title','Sevice')
@section('service-active','active')
@section('hero')
<x-hero-section title="Service Us" subtitle="Service"></x-hero-section>

@endsection
@section('content')

 
<x-front-services-component></x-front-services-component>

 
 <x-front-testimonal-component></x-front-testimonal-component>


        
@endsection