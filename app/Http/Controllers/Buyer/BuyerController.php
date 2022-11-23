<?php

namespace App\Http\Controllers\Buyer;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class BuyerController extends Controller { 
  
    //function for show my dashboard page
    public function index(){
        $view =  view('buyer.dashboard');
        return $view;  
    }

    //function for show how it work page
    public function howItWork(){
		$view =  view('buyer.how-work');
        return $view;
    }

    //function for show retailers page
    public function retailer(){
		$view =  view('buyer.retailer');
        return $view;
    }

    //function for show my profile page
    public function myProfile(){
		$user = Auth::user();
		$profile = DB::table('users')
			->where('users.id', $user->id)
        	->where('users.user_type', $user->user_type)
            ->leftJoin('buyer_infos', 'users.id', '=', 'buyer_infos.user_id')
            ->get();
		$view =  view('buyer.profile', compact('profile'));
        return $view;
    }
	
	//function for update buyer profile
    public function profileSubmit(Request $request){
		$user = Auth::user();
		$checkUserInfo = DB::table('buyer_infos')
                            ->where('user_id', $user->id)
                            ->where('user_type', $user->user_type)
                            ->get();
		//check if records is exits or not
		if($checkUserInfo){
			//update user name
			$updateFullName = DB::table('users')
				->where('id', $user->id)
				->where('user_type', $user->user_type)
				->update(
					['name' => ucfirst($request->input('full_name'))
					]);
			if($updateFullName){ 
				//update profile data
				$updateProfile = DB::table('buyer_infos')
					->where('user_id', $user->id)
					->where('user_type', $user->user_type)
					->update(
					['phone' => $request->input('phone'),
					'address' => $request->input('address'),
					'city' => $request->input('city'),
            		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
					]);
				if($updateProfile){
					return back()->with('success','Your Profile is updated successfully!');
				} else {
					return back()->with('success','Oops something went wrong');
				}
			} else {
				return back()->with('success','Oops something went wrong with update name');
			}
		} else {
			//update user name
			$updateFullName = DB::table('users')
				->where('id', $user->id)
				->where('user_type', $user->user_type)
				->update(
					['name' => ucfirst($request->input('full_name')),
					'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
					]);
			if($updateFullName){
				//insert profile data
				$profileData = [
					'user_id'   =>  $user->id,
					'user_type'	=>  $user->user_type,
					'phone'	=>  $request->input('phone'),
					'address'	=>  $request->input('address'),
					'city'	=>  $request->input('city'),
					'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
				];
				$result = DB::table('buyer_infos')->insert($profileData);
				if($result){
					return back()->with('success','Your Profile is updated successfully!');
				} else {
					return back()->with('success','Oops something went wrong');
				}
			} else {
				return back()->with('success','Oops something went wrong with update name');
			}
		}
    }
	
	//function for update buyer profile
	public function imageUploadPost(){
		$user = Auth::user();
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = 'img_'.time().'.'.request()->image->getClientOriginalExtension();
        $upload = request()->image->move(public_path('/assets/images/upload/'), $imageName);
		if($upload){
			$update = DB::table('users')
				->where('id', $user->id)
				->where('user_type', $user->user_type)
				->update([
					'avatar' => $imageName,
					'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
					]);
			if($update){
				return back()->with('img_success','Profile image changed successfully');
			} else {
				return back()->with('img_success','Profile image not changed please try again');
			}
		} else {
			return back()->with('img_success','Oops something went wrong');
		}
    }
}
