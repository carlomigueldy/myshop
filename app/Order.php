<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'courier_id',
        'payment_method_id',
        'total_amount',
        'status',
    ];

    /**
     * An order belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * An order belongs to a courier.
     */
    public function courier()
    {
        return $this->belongsTo('App\Courier');
    }

    /**
     * An order is processed by a payment method.
     */
    public function payment_method()
    {
        return $this->belongsTo('App\PaymentMethod');
    }
}
