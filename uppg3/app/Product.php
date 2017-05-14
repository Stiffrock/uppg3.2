<?php

namespace App;

use App\Review;
use App\Store;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      protected $fillable = ['title', 'brand', 'price', 'image', 'description'];

    public function stores(){
      return $this->belongsToMany('App\Store');
    }
    public function reviews(){
      return $this->hasMany('App\Review');
    }
}
