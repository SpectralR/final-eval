<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  public function category()
  {
    return $this->belongsToMany('App\Category');
  }
  public function price()
  {
    return $this->belongsTo('App\Price');
  }
}
