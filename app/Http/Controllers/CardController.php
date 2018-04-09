<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Cartalyst\Stripe\Laravel\Facades\Stripe;


class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', 'App\Card');
        return view('pages.cards.card-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create', 'App\Card');
        
                $this->validate(request(), [
                'card_number' => 'required',
                'ccExpiryMonth'	=> 'required',
                'ccExpiryYear' => 'required',
                'cvvNumber'	=> 'required',
                ]);

                $card_number = $request->input('card_number');
                $ccExpiryMonth = $request->input('ccExpiryMonth');
                $ccExpiryYear = $request->input('ccExpiryYear');
                $cvvNumber = $request->input('cvvNumber');

        $token = Stripe::tokens()->create([
            'card' => [
                'number'    => $card_number,
                'exp_month' => $ccExpiryMonth,
                'exp_year'  => $ccExpiryYear,
                'cvc'       => $cvvNumber,
            ],
        ]);
        $card = Stripe::cards()->create(Auth::user()->wallet->customer_id, $token['id']);
        
        $card = new Card;
        $card->card_number = $card_number;
        $card->ccExpiryMonth = $ccExpiryMonth;
        $card->ccExpiryYear = $ccExpiryYear;
        $card->cvvNumber = $cvvNumber;
        $card->user_id = Auth::id();
        $card->save();

        flash("Card has been added successfuly! What's now? Go and sponsor the next prodigy! ;)")->success();
        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Card  $Card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $Card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Card  $Card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $Card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Card  $Card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $Card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Card  $Card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $Card)
    {
        //
    }
}
