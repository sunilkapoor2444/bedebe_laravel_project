<?php

namespace App\Http\Controllers\Buyer\BedebeShop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;

class OtherProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('buyer');
    }

     //function for show other products for buyer
    public function otherAllProducts(){
    	$user = Auth::user();
        $products =  DB::table('products')
                            ->where('user_type', 'supplier')
                            ->orderBy('id', 'DESC')
                            ->get();
        $view =  view('buyer.bedebeShop.other-products', compact('products'));
        return $view;
    }
}
