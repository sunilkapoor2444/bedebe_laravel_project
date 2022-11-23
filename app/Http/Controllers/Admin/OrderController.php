<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Order;

class OrderController extends Controller
{
	//show order page 
    public function index(){    
    	$orders=Order::with('getAllOrders')->get();
		$view =  view('admin/order/all-order', compact('orders'));
        return $view;
    }
}
