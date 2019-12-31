<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 
        'first_name', 
        'last_name', 
        'email', 
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * A user belongs to a certain role.
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    /**
     * A user can only have one cart.
     */
    public function cart()
    {
        return $this->hasOne('App\Cart');
    }

    /**
     * A user can have one or many orders.
     */
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
