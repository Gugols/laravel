@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'You have received a donation!'))

<section class="p-b-0">
        <div class="container">
        <div class="row">
        <div class="col-md-5"> <img alt="" src="{{ asset('images/app/gift.png') }}"> </div>
        <div class="col-md-7">
        <hr class="space">
        <hr class="space">
        <hr class="space">
        <h1 class="heading-jumbo">x EUR</h1>
        <p class="lead">Nulla varius consequat magna, id molestie ipsum volutpat quis. Suspendisse consectetur fringilla luctus. Fusce id mi diam, non ornare orci. Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor.</p>
        <a class="btn" href="#"><span><i class="fa fa-tint"></i>Say Thanks!</span></a> </div>
        </div>
        </div>
        </section>
@endsection