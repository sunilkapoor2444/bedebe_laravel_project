<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class BillingDetails extends Model
{
    protected $table = 'billing_details';

    //Method for get order billing details
    public function getBillingOrdersDetails(){
         return $this->belongsTo('App\Models\Admin\Order');
    }
}
