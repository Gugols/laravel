<?php

namespace App\Http\Controllers;

use App\Wallet;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class WalletController extends Controller
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
    public function create($id)
    {
        if(Auth::user()->id != $id) {
            return redirect()->route('home');
        }

        $user = User::find($id);
                
        try {
            $wallet = User::find($id)->wallet;
            if($wallet) {
                flash("You already have a wallet. No additional wallet is needed.")->error();
                return redirect()->route('home');
            }
        } catch (Exception $e) {
            
        }

        return view('pages.wallet.wallet-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
                //dd($user);
                if(Auth::user()->id != $id) {
                    return redirect()->route('home');
                }
                $this->validate(request(), [
                    'agreement' => 'required_without_all',
                ]);

                $user = User::find($id);
                
                try {
                    $wallet = User::find($id)->wallet;
                    if($wallet) {
                        flash("You already have a wallet. No additional wallet is needed.")->error();
                        return redirect()->route('home');
                    }
                } catch (Exception $e) {
                    
                }
        
        
                // agreement received, lets create a new Stripe customer
        
                $customer = Stripe::customers()->create([
                    'email' => Auth::user()->email,
                    'description' => Auth::user()->id,
                ]);
                    
                // create a new wallet if Stripe return newly created customer_id
                if($customer['id']) {
                    $wallet = new Wallet;
                    $wallet->customer_id = $customer['id'];
                    $wallet->user_id = $id;
                    $wallet->save();
                    flash("Your wallet has been successfully created! </br> Now you can add funds and donate them!")->success();
                    return redirect()->route('home');
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}
