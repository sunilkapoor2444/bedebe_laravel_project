<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
    
    public function index(){
		$view =  view('admin/dashboard');
        return $view;
    }
}
