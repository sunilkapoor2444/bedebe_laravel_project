<?php

namespace App\Http\Controllers\Exporter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use DB;

class BuyerProductController extends Controller
{
    //function for show buyer products
    public function buyerAllProduct(){
    	$user = Auth::user();
        $products =  DB::table('products')
                            ->where('user_type', 'supplier')
                            ->orderBy('id', 'DESC')
                            ->get();
        $view =  view('exporter.buyer-products', compact('products'));
        return $view;
    }
}
