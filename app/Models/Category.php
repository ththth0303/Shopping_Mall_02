<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
    public function getCategories()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
