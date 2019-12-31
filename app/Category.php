<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'no_of_products',
    ];

    /**
     * A category has one or many products.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
