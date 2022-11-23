<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use DB;

class LoginController extends Controller {
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

    //show admin page
    public function index(){
		$view =  view('admin/login');
        return $view;
    }

    //function for submit admin login form
    public function dologin(Request $request){
	   	$email = $request->input('email');
    	$password = $request->input('password');
    	// Check validation
		if (auth()->attempt(['email' => $email, 'password' => $password, 'user_type' => 'admin'])) {
		    /*
	         * Description: 
	         * Params: 
	         */
	        $user = Auth::user();
	        if ($user->user_type == "admin") {
	            return redirect('/admin/dashboard');
	        }
		} else {
		    return redirect('/admin');
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
		if ($user->user_type == "admin") {
		    $request->session()->flush();
        	$request->session()->regenerate();
        	return redirect('/admin');
		}
    }
}
