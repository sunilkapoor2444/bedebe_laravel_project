<?php

namespace App\Http\Controllers\Buyer\BedebeShop;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class OrderController extends Controller {
  	
  	public function __construct()
    {
        $this->middleware('buyer');
    }

    //function for show all orders
    public function index(){
    	$user = Auth::user();
        $orders =  DB::table('orders')
        					->where('orders.user_id', $user->id)
        					->where('orders.user_type', 'buyer')
                            ->leftJoin('billing_details', 'orders.id', '=', 'billing_details.order_id')
        					->get();
		$view =  view('buyer.bedebeShop.all-order', compact('orders'));
        return $view;
    }

    //function for vew order details
    public function viewOrder($id){
        //get billing order details
        $billingDeails =  DB::table('billing_details')
                            ->where('order_id', $id)
                            ->where('type', 'billing')
                            ->get();

        //get order details
        $orderItems =  DB::table('orders')
                            ->where('orders.id', $id)
                            ->where('orders.user_type', 'buyer')
                            ->leftJoin('order_items', 'orders.id', '=', 'order_items.order_id')
                            ->get();
        $view =  view('buyer.bedebeShop.view-order', compact('billingDeails','orderItems'));
        return $view;
    }
}
