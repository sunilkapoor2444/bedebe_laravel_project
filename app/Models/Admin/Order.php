<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table ='orders';
	
    //Method for get all order
    public function getAllOrders(){
        return $this->hasMany('App\Models\Admin\BillingDetails');
    }
}
