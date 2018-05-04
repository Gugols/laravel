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

function getUserName($id) {
    $user = User::find($id);
    return $user->name;
}

function getUserNameLink($id) {
    $user = User::find($id);
    $link = route('user.show', ['id' => $user->id]);
    return '<a href="'.$link.'">'.$user->name.'</a>';
}

function getUserDetail($type, $needle, $interest) {
    $user = User::where($type, $needle) -> first();
    return $user->$interest;
}