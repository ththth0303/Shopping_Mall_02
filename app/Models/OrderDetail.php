<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function orders()
    {
        return $this->belongsTo('App\Models\Order');
    }
}
