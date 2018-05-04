@extends('layouts.main-layout')

@section('content')
    @if($donation->donator->id == $user->id)
        @include('partials.upper-section', array('h1'=>'You have sent a donation!'))
    @else
        @include('partials.upper-section', array('h1'=>'You have received a donation!'))
    @endif

<section class="p-b-0">
        <div class="container p-b-20">
        <div class="row">
        <div class="col-md-5"> <img alt="" class="p-r-30" src="{{ asset('images/app/gift.png') }}" style="max-width: 400px;"> </div>
        <div class="col-md-7">
        <hr class="space">
        
        
        <h1 class="heading-jumbo">{{ $donation->amount }} EUR</h1>
        
        @if($donation->donator->id == $user->id)
            <p class="lead">You have successfully donated to <strong>{{ $receiver->name }}.</strong> Well done!
        @else
            <p class="lead"><strong>{{ $donator->name }}</strong> has sent you money.
        @endif
        <br> <br>
        
            @if ($donation->message)
            {{ $donation->message }}</p>
        @endif

        @if($receiver->id == $user->id)
        <a class="btn" href="#"><span><i class="fa fa-commenting-o"></i>Say Thanks!</span></a> </div>
        @endif
        </div>
        </div>
        </section>
@endsection