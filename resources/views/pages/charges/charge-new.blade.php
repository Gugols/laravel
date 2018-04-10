@extends('layouts.main-layout')

@section('content')

@include('partials.upper-section', array('h1'=>'Add new funds'))

<section>




        <div class="container">
            <div class="row justify-content-center">
                <!-- You can make it whatever width you want. I'm making it full width
                     on <= small devices and 4/12 page width on >= medium devices -->
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
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table">
                            <div class="row display-tr">
                                <h3 class="panel-title display-td">Add funds</h3>
                                <div class="display-td">                            
                                <img class="img-responsive pull-right" src="https://maecenas.test/storage/general/cards.png">
                                </div>
                            </div>                    
                        </div>
                        <div class="panel-body">
                                <form method="POST" action="{{ URL::route('charge.store') }}">
                                        {{ csrf_field() }}
                                        {{ method_field('POST') }}
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
                                            <label for="card_id">Card to charge</label>
                                            <select name="card_id">
                                                    @foreach($cards as $card)
                                                <option value="{{$card->id}}">({{$card->brand}}) **** **** **** {{$card->last4}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
    
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="subscribe btn btn-primary btn-lg btn-block" type="submit">Add funds</button>
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