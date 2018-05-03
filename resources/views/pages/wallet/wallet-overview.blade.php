@extends('layouts.main-layout') @section('content') @include('partials.upper-section', array('h1'=>'Wallet Overview'))

<section>




    <div class="container">
        <div class="row justify-content-center">
            <!-- You can make it whatever width you want. I'm making it full width
                 on <= small devices and 4/12 page width on >= medium devices -->

            <div class="col-xs-12">


                <div class="wallet-overview">
                    <div class="wrapper">
                        @if(!$user->wallet)
                        <div class="row">
                            <div class="col-xs-12">
                                <div role="alert" class="alert alert-warning">
                                    <strong>Notice!</strong> It seems you haven't created a wallet yet. In order to add cards and store funds, please add
                                    it first by clicking
                                    <strong>
                                        <a href="{{ route('wallet.create') }}">here</a>
                                    </strong>. </div>
                            </div>
                        </div>
                        @endif 
                        @if($user->wallet) 
                            @if(count($user->cards) === 0)
                            <div class="row">
                                <div class="col-xs-12">
                                    <div role="alert" class="alert alert-warning">
                                        <strong>Notice!</strong> It seems you haven't added any card 💳. In order to add funds for donations, please add
                                        one first by clicking
                                        <strong>
                                            <a href="{{ route('card.create') }}">here</a>
                                        </strong>. </div>
                                </div>
                            </div>
                            @endif
                        @endif
                        <div class="app-wrapper col-xs-12">
                            <!--Wallet-->
                            <aside class="wallet">
                                <h2>My Cards</h2>
                                <div class="modal-control"><a href="{{ route('card.create') }}">+</a></div>
                                <div class="cards">
                                    @include('partials.wallet-card-display-small')
                                </div>
                            </aside>

                            <content class="transactions-wrapper">
                                <h2>
                                    Current Balance
                                    <a href="{{ route('charge.create') }}" class="btn btn-success btn-xs btn-icon-only" role="button" data-method="get">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <span class="total-balance">
                                        @if(!$user->wallet)
                                            0
                                        @else
                                            {{ $user->wallet->balance }}
                                        @endif
                                    </span>
                                </h2>
                                <div class="transactions show">
                                @foreach ($user->cards as $card)
                                    @foreach ($card->charges()->orderBy('id', 'DESC')->get() as $charge)
                                    <div class="transaction-item credit">
                                            <div class="transaction-item_details">
                                            <h3>Funds Added - {{$charge->id}}</h3>
                                                <span class="details">Charge #{{ $charge->id }} - {{ $charge->created_at->format('M d Y') }}</span>
                                            </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">-{{$charge->amount}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach
                                </div>
                            </content>

                        </div>

                    </div>
                </div>


            </div>


        </div>
    </div>

</section>
@endsection