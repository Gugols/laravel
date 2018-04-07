@extends('layouts.main-layout')

@section('content')

@include('partials.upper-section', array('h1'=>'New card'))

<section>




    <div class="container">
        <div class="row justify-content-center">
            <!-- You can make it whatever width you want. I'm making it full width
                 on <= small devices and 4/12 page width on >= medium devices -->
            <div class="col-xs-12 col-md-6 col-md-offset-3">
            
            
                <!-- CREDIT CARD FORM STARTS HERE -->
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <div class="row display-tr">
                            <h3 class="panel-title display-td">Card Details</h3>
                            <div class="display-td">                            
                            <img class="img-responsive pull-right" src="{{ asset('storage/general/cards.png') }}">
                            </div>
                        </div>                    
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ URL::route('card.create', Auth::user()->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('POST') }}
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="cardNumber">CARD NUMBER</label>
                                        <div class="input-group">
                                            <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required="" autofocus="">
                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="row">
                                
    
    <div class="col-xs-5 col-md-5">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> MONTH</label>
                                        <input type="tel" class="form-control" name="cardExpiry" placeholder="MM" autocomplete="cc-exp" required="">
                                    </div>
                                </div>
<div class="col-xs-4 col-md-4">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> YEAR</label>
                                        <input type="tel" class="form-control" name="cardExpiry" placeholder="YY" autocomplete="cc-exp" required="">
                                    </div>
                                </div>
                                <div class="col-xs-3 col-md-3 pull-right">
                                    <div class="form-group">
                                        <label for="cardCVC">CV CODE</label>
                                        <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="subscribe btn btn-primary btn-lg btn-block" type="button">Add Card</button>
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