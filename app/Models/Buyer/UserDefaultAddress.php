<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Model;

class UserDefaultAddress extends Model
{
    protected $table = 'users_delivery_address';

    protected $fillable = [ 
        'user_id', 'user_type', 'address_id'
    ];
}
