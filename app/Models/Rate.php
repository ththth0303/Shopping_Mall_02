<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function products()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}
