<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'price',
        'quantity',
        'total_price'
    ];

    /**
     * An item selected belongs to a cart.
     */
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    /**
     * A product chosen in the cart.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
