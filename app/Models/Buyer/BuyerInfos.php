<?php

namespace App\Models\Buyer;

use Illuminate\Database\Eloquent\Model;

class BuyerInfos extends Model
{
    protected $table = 'buyer_infos';

    protected $fillable = [ 
        'user_id', 'user_type', 'address_line1', 'address_line2', 'phone', 'region', 'city', 'terms_conditions', 'newsletters'
    ];
}
