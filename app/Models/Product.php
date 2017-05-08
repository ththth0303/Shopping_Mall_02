<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function rates()
    {
        return $this->hasMany('App\Models\Rate');
    }
    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
}
