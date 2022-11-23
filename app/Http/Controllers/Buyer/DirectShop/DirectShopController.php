<?php

namespace App\Http\Controllers\Buyer\DirectShop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Buyer\DirectInvoiceRequest;

class DirectShopController extends Controller
{
    //function for show my bedebe page
    public function index(){
		$view =  view('buyer.directShop.direct-shop');
        return $view;
    }
}
