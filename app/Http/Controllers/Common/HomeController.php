<?php

namespace App\Http\Controllers\common;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    //show home page 
    public function home(){
		$view =  view('common/home');
        return $view;
    }
}
