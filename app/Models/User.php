<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    public function rates()
    {
        return $this->hasMany('App\Models\Rate');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function wishlists()
    {
        return $this->hasMany('App\Models\Wishlist');
    }
}
