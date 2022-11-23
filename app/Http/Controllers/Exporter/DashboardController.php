<?php

namespace App\Http\Controllers\Exporter;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
    
    public function index(){
		$view =  view('exporter/dashboard');
        return $view;
    }

    //function for show how it work page
    public function howItWork(){
		$view =  view('exporter.how-work');
        return $view;
    }

    //function for show my bedebe page
    public function myBedebe(){
		$view =  view('exporter.my-bedebe');
        return $view;
    }
}
