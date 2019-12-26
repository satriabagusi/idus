<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }

    public function cart(){
        return $this->hasMany('App\Cart');
    }

    protected $fillable = [
        'nama_produk', 
        'quantity', 
        'jenis', 
        'harga', 
        'deskripsi', 
        'image', 
    ];
}
