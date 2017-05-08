<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function delivers()
    {
        return $this->belongsTo('App\Models\Deliver');
    }
    public function shippers()
    {
        return $this->belongsTo('App\Models\Shipper');
    }
}
