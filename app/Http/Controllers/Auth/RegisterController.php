<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Export\ExportInfos;

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
   // protected $redirectTo = '/';
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => ['required', 'string', 'max:255'],
            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'region' => ['required', 'string', 'max:255'],
            'phone' => ['numeric'],
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'type' => 'required|string',
            'terms_conditions' => 'required', 
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Bedebe\User
     */
    protected function create(array $data)
    {
        return $create_user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'user_type' => $data['type']
        ]);

        //check user insert or not
        if($create_user){
            //insert user info
            $ExportInfos = ExportInfos::create([ 
                'user_id' => $create_user['id'],
                'user_type' => $data['type'],
                'address_line1' => $data['type'],
                'address_line2' => $data['type'],
                'phone' => $data['type'],
                'region' => $data['type'],
                'city' => $data['type'],
                'terms_conditions' => isset($data['type']),
                'newsletters' => isset($data['type'])
            ]);
            if($ExportInfos){
                return back()->with('success','Congrats, Your are register successfully!');
            } else {
                return back()->with('success','Opps Something wrong!');
            }
        } else {
             return back()->with('success','Opps Something wrong!');
        }
    }
}
