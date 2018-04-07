@extends('layouts.main-layout')

@section('content')

@include('partials.upper-section', array('h1'=>'Create a wallet'))

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="POST" action="{{ URL::route('wallet.create', Auth::user()->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                <div class="checkbox">
                    <label>
                    <input type="checkbox" name="agreement">I agree to create a Stripe.com client account and to provide the email address and my name</label>
                    </div>
            <div class="form-inline form-group">
            <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            </form>
            </div>
            </div>
    </div>
</section>
@endsection