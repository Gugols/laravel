<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{

    protected $guarded = [

    ];

    public function donator()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function receiver()
    {
        return $this->belongsTo('App\User', 'receiver_id');
    }
}
