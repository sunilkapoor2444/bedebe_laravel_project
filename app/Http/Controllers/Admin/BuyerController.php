<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BuyerController extends Controller
{
    //show buyer page 
    public function index(){   
    	$buyers =  DB::table('users')
        					->where('users.user_type', 'buyer')
        					->select('users.id', 'users.name', 'users.email', 'buyer_infos.phone')
                            ->leftJoin('buyer_infos', 'users.id', '=', 'buyer_infos.user_id')
        					->get();
		$view =  view('admin/buyer/all-buyer',compact('buyers'));
        return $view;
    }
}
