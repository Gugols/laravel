<?php
/**
* change plain number to formatted currency
*
* @param $number
* @param $currency
*/

use App\User;

function showAvatar($img)
{
   return asset('/uploads/avatars/'.$img);
}

function UserHasWallet($id) {
    $user = User::find($id);
                    
    try {
        $wallet = User::find($id)->wallet;
        if($wallet) {
            return true;
        }
    } catch (Exception $e) {
        return false;
    }

}