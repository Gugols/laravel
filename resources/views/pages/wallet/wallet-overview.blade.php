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
                                    <a href="{{ route('charge.create') }}" class="btn btn-success btn-xs btn-icon-only" role="button" data-method="get" data-disable-with="Waiting..." data-confirm="Are you sure you want to remove this card from your wallet? The action is permanant!">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <span class="total-balance">729.00</span>
                                </h2>
                                <div class="transactions show">
                                    <div class="transaction-item debit">
                                        <div class="transaction-item_details">
                                            <h3>Apple iPhone 6, 6g GB</h3>
                                            <span class="details">Electronics #343223 - 12 July, 2016</span>
                                        </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">+650.00</p>
                                        </div>
                                    </div>
                                    <div class="transaction-item credit">
                                        <div class="transaction-item_details">
                                            <h3>Funds Added</h3>
                                            <span class="details">Payment #343212 - 11 July, 2016</span>
                                        </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">-900.00</p>
                                        </div>
                                    </div>
                                    <div class="transaction-item debit">
                                        <div class="transaction-item_details">
                                            <h3>Energy Bill</h3>
                                            <span class="details"> #343566 - 11 July, 2016</span>
                                        </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">+84.96</p>
                                        </div>
                                    </div>
                                    <div class="transaction-item debit">
                                        <div class="transaction-item_details">
                                            <h3>Mega Image SRL</h3>
                                            <span class="details">Food&amp;Health #343565 - 11 July, 2016</span>
                                        </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">+112.75</p>
                                        </div>
                                    </div>
                                    <div class="transaction-item debit">
                                        <div class="transaction-item_details">
                                            <h3>ATM DV24</h3>
                                            <span class="details"> #343253 - 09 July, 2016</span>
                                        </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">+200.00</p>
                                        </div>
                                    </div>
                                    <div class="transaction-item debit">
                                        <div class="transaction-item_details">
                                            <h3>Lukoil Station</h3>
                                            <span class="details">Gas #343279 - 09 July, 2016</span>
                                        </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">+190.48</p>
                                        </div>
                                    </div>
                                    <div class="transaction-item credit">
                                        <div class="transaction-item_details">
                                            <h3>Funds Added</h3>
                                            <span class="details">Payment #343212 - 11 July, 2016</span>
                                        </div>
                                        <div class="transaction-item_amount">
                                            <span>$</span>
                                            <p class="amount">+390.81</p>
                                        </div>
                                    </div>
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