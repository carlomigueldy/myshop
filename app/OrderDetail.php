<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    /**
     * This order details belongs to an order.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    /**
     * A product is selected in this order detail.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
