<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'no_of_items',
        'sub_total',
    ];

    /**
     * A cart belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
