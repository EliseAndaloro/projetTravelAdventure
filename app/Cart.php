<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    
    protected $fillable = ['cart_id', 'product_id', 'user_id', 'trip_start', 'nbpers'];
    
    public $timestamps = false;
}
