<?php

namespace App\Models\Buyer\BedebeShop;

use Illuminate\Database\Eloquent\Model;

class MadagascarAddress extends Model
{
    protected $table = 'buyer_address';

    protected $fillable = [ 
        'user_id', 'user_type', 'name', 'surname', 'address_line1', 'address_line2', 'phone', 'post_code', 'address_type', 'shop_address_type'
    ];
}
