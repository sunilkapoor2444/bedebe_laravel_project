<?php

namespace App\Http\Controllers\Supplier;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
    
    //function for show dashboard page
    public function index(){
		$view =  view('supplier/dashboard');
        return $view;
    }

    //function for show how it work page
    public function howItWork(){
		$view =  view('supplier.how-work');
        return $view;
    }

    //function for show my bedebe page
    public function myBedebe(){
		$view =  view('supplier.my-bedebe');
        return $view;
    }
}
