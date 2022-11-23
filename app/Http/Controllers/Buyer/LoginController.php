<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Requests\Buyer\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;

class LoginController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
    */
    
    
    /**
     * Create a new controller instance.
     *
     * @return void
    */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    //show login page 
    public function login(){
		$view =  view('buyer/login');  
        return $view;
    }

    //function for submit buyer login form
    public function dologin(LoginRequest $request){
	   	$email = $request->input('email');
    	$password = $request->input('password');
    	// Check validation
		if (auth()->attempt(['email' => $email, 'password' => $password, 'user_type' => 'buyer'])) {
		    /*
	         * Description: 
	         * Params: 
	         */
	        $user = Auth::user();
	        if ($user->user_type == "buyer") {
	            return redirect('/buyer/dashboard')->with('success','You are login successfully');
	        }
		} else {
		    return redirect('/buyer/login')->with('unsuccess','These credentials do not match our records.');;
		}
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function logout(Request $request)
    {
        $user = Auth::user();
		if ($user->user_type == "buyer") {
		    $request->session()->flush();
        	$request->session()->regenerate();
        	return redirect('/buyer/login');
		}
    }
}
