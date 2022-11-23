<?php

namespace App\Http\Controllers\Buyer\BedebeShop;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class BedebeShopController extends Controller { 

    //function for show my bedebe page
    public function index(){
		$view =  view('buyer.bedebeShop.my-bedebe');
        return $view;
    }
}
