<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;
use App\Wallet;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /*
    *   User can have many posts
    */
    public function posts() {
        return $this->hasMany('App\Post');
    }

   // User can have many comments

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function wallet() {

        return $this->hasOne('App\Wallet');

    }

    public function cards() {

        return $this->hasMany('App\Card');
        
    }

    public function donations() {

        return $this->hasMany('App\Donation');
        
    }

    public function receivedDonations() {

        return $this->hasMany('App\Donation', 'receiver_id');
        
    }

}
