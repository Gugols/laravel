@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'You have received a donation!'))

<section class="p-b-0">
        <div class="container p-b-20">
        <div class="row">
        <div class="col-md-5"> <img alt="" src="{{ asset('images/app/gift.png') }}" style="max-width: 400px;"> </div>
        <div class="col-md-7">
        <hr class="space">

        <h1 class="heading-jumbo">{{ $donation->amount }} EUR</h1>
        <p class="lead"><strong>{{ $donator->name }}</strong> has sent you money. <br> <br>
        @if ($donation->message)
            {{ $donation->message }}</p>
        @endif
        <a class="btn" href="#"><span><i class="fa fa-commenting-o"></i>Say Thanks!</span></a> </div>
        </div>
        </div>
        </section>
@endsection