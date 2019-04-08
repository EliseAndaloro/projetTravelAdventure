<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
  protected $table = 'avis';

  protected $fillable = ['id', 'user_id', 'avis', 'img'];

  public $timestamps = false;
}
