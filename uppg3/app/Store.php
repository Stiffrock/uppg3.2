<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['product_id', 'store_id'];

    public function products(){
        return $this->belongsToMany('App\Product');
      }
}
