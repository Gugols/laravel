<?php

namespace App\Policies;

use App\User;
use App\Card;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;

class CardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the card.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function view(User $user, Card $card)
    {
        //
    }

    /**
     * Determine whether the user can create cards.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        try {
            $wallet = $user->wallet->exists();
            if($wallet) {
                return true;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can update the card.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function update(User $user, Card $card)
    {
        if (Auth::user()->can('edit all cards')) {
            return true;
        }

        // Check if user is the card author
        if ($user->id === $card->user_id) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the card.
     *
     * @param  \App\User  $user
     * @param  \App\Card  $card
     * @return mixed
     */
    public function delete(User $user, Card $card)
    {
        if (Auth::user()->can('delete all cards')) {
            return true;
        }

        if($user->id === $card->user_id) {
            return true;
        }

        return false;
    }
}
