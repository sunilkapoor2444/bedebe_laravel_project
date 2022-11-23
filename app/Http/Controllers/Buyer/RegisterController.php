<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Requests\Buyer\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Buyer\Register;
use App\Models\Buyer\BuyerInfos;
use App\Models\Buyer\UserDefaultAddress;
use DB;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
	protected function redirectTo() {
        /*
         * Description: 
         * Params: 
         */
        $user = Auth::user();
        if ($user->user_type == "buyer") {
            return "/buyer/dashboard";
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Bedebe\User
     */
    protected function registerSubmit(RegisterRequest $request)
    {
        //insert user data
        $dispaly_name = $request['name']. ' '.$request['surname'];
        $buyer = Register::create([ 
            'name' => ucfirst($dispaly_name),
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'remember_token' => $request['_token'],
            'user_type' => 'buyer'
        ]);

        //check buyer insert or not
        if($buyer){
            //insert buyer info
            $lastInsertId = DB::getPdo()->lastInsertId();
            BuyerInfos::create([ 
                'user_id' => $lastInsertId,
                'user_type' => 'buyer',
                'address_line1' => $request['address1'],
                'address_line2' => $request['address2'],
                'phone' => $request['phone'],
                'region' => $request['region'],
                'city' => $request['city'],
                'terms_conditions' => isset($request['terms_conditions']),
                'newsletters' => isset($request['newsletters'])
            ]);

            //insert users default delevery address
            UserDefaultAddress::create([ 
                'user_id' => $lastInsertId,
                'user_type' => 'buyer',
                'address_id' => '1'
            ]);
            return back()->with('success','Congrats, Your are register successfully!');
        } else {
             return back()->with('success','Opps Something wrong!');
        }
    }

    //show register page 
    public function register(){ 
		$view =  view('buyer/register');  
        return $view;
    }
}
