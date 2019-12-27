<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'status_pembayaran', 
        'cart_id', 
        'user_id', 
        'product_id',
    ];


    public function user(){
        return $this->hasMany('App\User');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }

    public function cart(){
        return $this->hasMany('App\Cart');
    }
}
