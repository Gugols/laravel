<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use App\User;
use App\Wallet;
use Auth;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $sent_donations = $user->donations;
        $received_donations = $user->receivedDonations;

        return view('pages.donations.index-donations')->with([
            'user'=>$user,
            'sent_donations'=>$sent_donations,
            'received_donations'=>$received_donations,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $receiver = User::find($id);
        $user = Auth::user();
        // validate whether the user has the ability to donate
        if($user->can('create donate')) {
            flash('You have no ability to donate. Contact administrator for further information.')->error();
            return redirect()->route('home');
        }
        // no need to donate for yourself
        if($user->id == $id) {
            flash('There is not much sense in donating to yourself :)')->error();
            return redirect()->route('home');
        }

        try {
            $user->wallet->id;
            $receiver->wallet->id;
        }
        catch (\Exception $e) {
            flash('You or the person you want to donate to doesnt have a wallet!')->error();
            return redirect()->route('home');
        }

        return view('pages.donations.create-donation')->with(['receiver'=>$receiver]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
    	'amount' => 'required',
        ]);
        
        $amount = $request->input('amount');
        $receiver = User::find($request->input('receiver_id'));
        $user = Auth::user();

        try {
            $user->wallet->id;
            $receiver->wallet->id;
        }
        catch (\Exception $e) {
            flash('You or the person you want to donate to doesnt have a wallet!')->error();
            return redirect()->route('home');
        }
        
        // lets add funds to receiver's wallet
        $receiver_wallet = Wallet::where('user_id', '=', $receiver->id)->firstOrFail();
        $receiver_wallet->balance += $amount;
        $receiver_wallet->save();

        // lets remove funds from donator's wallet

        $donator_wallet = Wallet::where('user_id', '=', $user->id)->firstOrFail();
        $donator_wallet->balance -= $amount;
        $donator_wallet->save();

        // lets create a new Donation record
        $donation = new Donation;
        $donation->amount = $amount;
        $donation->message = $request->input('message');
        $donation->user_id = Auth::id();
        $donation->receiver_id = $receiver->id;
        $donation->save();


        return redirect()->route('donations.show', ['id' => $donation->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        try {
        $user = Auth::user();
        $donation = Donation::find($id);
        $donator = $donation->donator;
        $receiver = $donation->receiver;
        }
        catch (\Exception $e) {
            flash('Donation does not exist or is invalid!')->error();
            return redirect()->route('home');
        }

        if(($donator->id != $user->id) && ($receiver->id != $user->id )) {
            flash('You have no permission to view this donation')->error();
            return redirect()->route('home');
        }

        return view('pages.donations.show-donation')->with([
            'user'=>$user,
            'donation'=>$donation,
            'donator'=>$donator,
            'receiver'=>$receiver,
            ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
