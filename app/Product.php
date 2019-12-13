<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }

    public function cart(){
        return $this->belongsTo('App\Cart');
    }
}
