<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'quantity',
        'price',  
    ];

    /**
     * A product belongs to a category.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * A product is selected at one or many carts.
     */
    public function cart_items()
    {
        return $this->hasMany('App\CartItem');
    }

    /**
     * A product was ordered one or many times.
     */
    public function order_details()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
