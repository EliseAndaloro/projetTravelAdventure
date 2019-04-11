<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
  protected $table = 'wishlist';

  protected $fillable = ['wish_id', 'wishprod_id', 'userwish_id'];

  public $timestamps = false;
}
