<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
    ];
}
