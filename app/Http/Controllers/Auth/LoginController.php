<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function redirectTo() {
        /*
         * Description: 
         * Params: 
         */
        $user = Auth::user();
        if ($user->user_type == "admin") {
            return "/admin/dashboard";
        }

        if ($user->user_type == "supplier") {
            return "/supplier/dashboard";
        }

        if ($user->user_type == "exporter") {
            return "/exporter/dashboard";
        }

        if ($user->user_type == "buyer") {
            return "/buyer/dashboard";
        }
    }
}
