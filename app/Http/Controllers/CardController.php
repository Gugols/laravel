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
        try {$this->authorize('create', 'App\Card');
        } catch (\Exception $e) {
            flash('You have no wallet. <a href="'.route('wallet.create').'">Create it</a> before adding any cards.')->error();
            return redirect()->route('wallet.index');
        }
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

        // $table->string('card_number');
        // $table->string('ccExpiryMonth');
        // $table->string('ccExpiryYear');
        // $table->string('brand');



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

                
                try {
                    $token = Stripe::tokens()->create([
                        'card' => [
                            'number'    => $card_number,
                            'exp_month' => $ccExpiryMonth,
                            'exp_year'  => $ccExpiryYear,
                            'cvc'       => $cvvNumber,
                        ],
                    ]);
        $card_stripe = Stripe::cards()->create(Auth::user()->wallet->customer_id, $token['id']);
        } catch (\Exception $e) {
            flash('Error while adding card. '.$e->getMessage())->error();
            return redirect()->route('card.create');
        }
        $card = new Card;
        $card->user_id = Auth::id();
        $card->card_id = $card_stripe['id'];
        $card->ccExpiryMonth = $ccExpiryMonth;
        $card->ccExpiryYear = $ccExpiryYear;
        $card->brand = $card_stripe['brand'];
        $card->last4 = $card_stripe['last4'];
        $card->save();

        flash("Card has been added successfuly! What's now? Go and sponsor the next prodigy! ;)")->success();
        return redirect()->route('wallet.index');

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
    public function destroy($id)
    {
        $card = Card::find($id);
        $this->authorize('delete', $card);
        $wallet_id = $card->user->wallet->customer_id;
        Stripe::cards()->delete($wallet_id, $card->card_id);
        Card::destroy($id);
        return redirect()->route('wallet.index');
    }
}
