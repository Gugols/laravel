<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    protected $guarded = [

    ];

    public function card() {
        return $this->belongsTo('App\Card');
    }
}
