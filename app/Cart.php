<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user(){
        return $this->hasOne('App\User');
    }
    
    public function product(){
        return $this->hasMany('App\Product');
    }

    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
}
