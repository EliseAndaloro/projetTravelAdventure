<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = ['id', 'product_name', 'description', 'categorie', 'price', 'img'];
    
    public $timestamps = false;
}
