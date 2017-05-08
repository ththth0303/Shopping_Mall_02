<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function products()
    {
        return $this->belongsTo('App\Models\Products');
    }
}
