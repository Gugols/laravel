<?php

namespace App\Http\Controllers;

use App\Charge;
use Illuminate\Http\Request;
use Auth;
use App\Card;
use App\Wallet;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class ChargeController extends Controller
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
        try {$this->authorize('create', 'App\Charge');
        } catch (\Exception $e) {
            flash('You have no wallet or cards added to your account.')->error();
            return redirect()->route('wallet.index');
        }
        $user = Auth::user();
        $cards = $user->cards;
        return view('pages.charges.charge-new', ['cards'=>$cards]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
            //     'card_id' => 'required_without_all',
            //     'amount' => 'min:1',
            // ]);
            
        $card_id = $request->input('card_id');
        $amount = $request->input('amount');

        $card = Card::where('id', '=', $card_id)->firstOrFail();
        $user = Auth::user();

        if($user->id != $card->user_id) {
            return redirect()->route('wallet.index');
        }
        $amount = $request->input('amount');

        try {
        $stripe_charge = Stripe::charges()->create([
            'customer' => $user->wallet->customer_id,
            'currency' => 'EUR',
            'source' => $card->card_id,
            'amount'   => $amount,
        ]);
        } catch (\Exception $e) {
            flash('Error while making a charge. '.$e->getMessage())->error();
            return redirect()->route('charge.create');
        }

        $charge = new Charge;
        $charge->card_id = $card->id;
        $charge->amount = $request->input('amount');
        $charge->charge_id = $stripe_charge['id'];
        $charge->save();

        $wallet = Wallet::find($user->wallet->id);
        $wallet->balance += $amount;
        $wallet->save();

          //Create a new charge using the request data . saving it to the database and then redirect.
        //return redirect('/charges/new');
        flash($amount.' has been successfully added to your wallet!')->success();
        return redirect()->route('wallet.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function show(Charge $charge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function edit(Charge $charge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Charge $charge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charge $charge)
    {
        //
    }
}
