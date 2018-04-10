<?php

namespace App\Policies;

use App\User;
use App\Charge;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChargePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the charge.
     *
     * @param  \App\User  $user
     * @param  \App\Charge  $charge
     * @return mixed
     */
    public function view(User $user, Charge $charge)
    {
        //
    }

    /**
     * Determine whether the user can create charges.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        try {
            $wallet = $user->wallet->exists();
            $cards = $user->cards;
            if(($wallet) && (count($cards)> 0)) {
                return true;
            }
        } catch (\Throwable $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can update the charge.
     *
     * @param  \App\User  $user
     * @param  \App\Charge  $charge
     * @return mixed
     */
    public function update(User $user, Charge $charge)
    {
        //
    }

    /**
     * Determine whether the user can delete the charge.
     *
     * @param  \App\User  $user
     * @param  \App\Charge  $charge
     * @return mixed
     */
    public function delete(User $user, Charge $charge)
    {
        //
    }
}
