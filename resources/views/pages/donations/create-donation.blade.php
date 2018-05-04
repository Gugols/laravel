@extends('layouts.main-layout')

@section('content')
    @include('partials.upper-section', array('h1'=>'Send a donation'))

    <section>




            <div class="container">
                <div class="row justify-content-center">
                    <!-- You can make it whatever width you want. I'm making it full width
                         on <= small devices and 4/12 page width on >= medium devices -->

                            <div class="col-xs-12 col-md-6 col-md-offset-3 p-b-10">
                                <div class="col-xs-2 " style="postion: relative;">
                                            <a href="{{ URL::route('user.show', $receiver->id) }}" style="display: block;">
                                                    <img alt="" src="{{showAvatar($receiver->avatar)}}" class="avatar">
                                                </a>
                                </div>
                                <div class="col-xs-10">
                                <p>You are about to send a donation to <strong>{{$receiver->name}}</strong>. The joy you get by giving is always the most satisfying! Just enter amount you are willing to donate and the message you wan to leave. After that, just hit send donation!</p>
                                </div>
                            </div>
                         <div class="col-xs-12 col-md-6 col-md-offset-3">
                    
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- CREDIT CARD FORM STARTS HERE -->
                        <div class="panel panel-default credit-card-box donation-box">
                            <div class="panel-heading display-table">
                                <div class="row display-tr">
                                <h3 class="panel-title display-td">Donation for {{$receiver->name}}</h3>
                                    <div class="display-td">                            
                                    <img class="img-responsive pull-right" src="{{ asset('images/app/gift.png') }}" style="max-height: 43px; width: auto;">  
                                </div>
                                </div>                    
                            </div>
                            <div class="panel-body">
                                    <form method="POST" action="{{ URL::route('donations.store') }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                    <input type="hidden" name="receiver_id" value="{{ $receiver->id }}">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="form-group">
                                                <label for="cardNumber">Amount</label>
                                                <div class="input-group">
                                                    <input type="tel" class="form-control input-lg" name="amount" placeholder="EUR" autocomplete="cc-number" required="" autofocus="">
                                                    <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                                                </div>
                                            </div>                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        
            
                                    <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="message">Message (optional)</label>
                                                <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                                            </div>
                                        </div>
        
                                        
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <button class="subscribe btn btn-primary btn-lg btn-block" type="submit" data-method="POST"
                                            data-disable-with="Sending...">Send donation</button>
                                        </div>
                                    </div>
                                    <div class="row" style="display:none;">
                                        <div class="col-xs-12">
                                            <p class="payment-errors"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>            
                        <!-- CREDIT CARD FORM ENDS HERE -->
                        
                        
                    </div>            
                    
                    
                </div>
            </div>
        
        </section>

@endsection