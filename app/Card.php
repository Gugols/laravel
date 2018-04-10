<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $guarded = [

    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function charges() {
        return $this->hasMany('App\Charge');
    }
}
