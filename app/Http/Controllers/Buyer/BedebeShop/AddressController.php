<?php

namespace App\Http\Controllers\Buyer\BedebeShop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Buyer\MadagascarAddressRequest;
use App\Http\Requests\Buyer\InvoicingAddressRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Buyer\BedebeShop\MadagascarAddress;
use App\Models\Buyer\BedebeShop\InvoicingAddress;

class AddressController extends Controller
{
	public function __construct()
    {
        $this->middleware('buyer');
    }

    //function for show my delivery address in europa 
    public function europaPage(){
        $user = Auth::user();
    	$europaAddress = DB::table(
    		'users_delivery_address')
			->where('users_delivery_address.user_id', $user->id)
			->where('users_delivery_address.user_type', 'buyer')
            ->leftJoin('default_delivery_address', 'users_delivery_address.address_id', '=', 'default_delivery_address.id')
			->get();
		$view =  view('buyer.bedebeShop.europa-address', compact('europaAddress'));
        return $view;
    }

    //function for show my delivery address in madagascar  
    public function madagascarPage(){
        $user = Auth::user();
        $madagascarAddress = DB::table('buyer_address')
            ->where('user_id', $user->id)
            ->where('user_type', $user->user_type)
            ->where('address_type', 'madagascar')
            ->where('shop_address_type', 'bedebeShop')
            ->get();
		$view =  view('buyer.bedebeShop.madagascar-address', compact('madagascarAddress'));
        return $view;
    }

    //function for show add madagascar delivery address 
    public function addMadagascarAddress(){
		$view =  view('buyer.bedebeShop.add-madagascar-address');
        return $view;
    }

    //function for submit madagascar delivery address 
    public function submitMadagascarAddress(MadagascarAddressRequest $request){
        $user = Auth::user();
        $address = MadagascarAddress::create([ 
            'user_id' => $user->id,
            'user_type' => $user->user_type,
            'name' => ucfirst($request['name']),
            'surname' => $request['surname'],
            'address_line1' => $request['address1'],
            'address_line2' => $request['address2'],
            'phone' => $request['mobile'],
            'post_code' => $request['post_code'],
            'address_type' => 'madagascar',
            'shop_address_type' => 'bedebeShop',
        ]);

        if($address){
            return back()->with('success','Address is added successfully!');
        } else {
             return back()->with('success','Opps Something wrong!');
        }
    }

    //function for show edit madagascar delivery address 
    public function editMadagascarAddress($id){
        $user = Auth::user();
        $madagascarAddress = DB::table('buyer_address')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->where('user_type', $user->user_type)
            ->where('address_type', 'madagascar')
            ->where('shop_address_type', 'bedebeShop')
            ->get();
        $view =  view('buyer.bedebeShop.edit-madagascar-address', compact('madagascarAddress'));
        return $view;
    }

    //function for submit edit madagascar delivery address 
    public function submitEditMadagascarAddress(MadagascarAddressRequest $request, $id){
        $user = Auth::user();
        //update address
        $address = DB::table('buyer_address')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->where('user_type', 'buyer')
            ->where('address_type', 'madagascar')
            ->where('shop_address_type', 'bedebeShop')
            ->update([
                    'name' => ucfirst($request['name']),
                    'surname' => $request['surname'],
                    'address_line1' => $request['address1'],
                    'address_line2' => $request['address2'],
                    'phone' => $request['mobile'],
                    'post_code' => $request['post_code']
                ]);
        if($address){
            return back()->with('success','Address is updated successfully!');
        } else {
             return back()->with('success','Opps Something wrong!');
        }
    }

    //function for delete madagascar delivery address with use id
    public function deleteMadagascarAddress(Request $request, $id){
        $user = Auth::user();
        $delete = DB::table('buyer_address')
                ->where('id', $id)
                ->where('user_id', $user->id)
                ->where('user_type', $user->user_type)
                ->where('address_type', 'madagascar')
                ->where('shop_address_type', 'bedebeShop')->delete();
        if($delete){
            return back()->with('success','Address is deleted successfully!');
        } else {
            return back()->with('success','Opps Something wrong!');
        }
    }

    //function for show my invoicing  address
    public function invoicingPage(){
        $user = Auth::user();
        $invoicingAddress = DB::table('buyer_address')
            ->where('user_id', $user->id)
            ->where('user_type', $user->user_type)
            ->where('address_type', 'invoicing')
            ->where('shop_address_type', 'bedebeShop')
            ->get();
		$view =  view('buyer.bedebeShop.invoicing-address', compact('invoicingAddress'));
        return $view;
    }

    //function for show add invoicing  address
    public function addInvoicingAdress(){
		$view =  view('buyer.bedebeShop.add-invoicing-address');
        return $view;
    }

    //function for submit invoicing address 
    public function submitInvoicingAddress(InvoicingAddressRequest $request){
        $user = Auth::user();
        $address = InvoicingAddress::create([ 
            'user_id' => $user->id,
            'user_type' => $user->user_type,
            'name' => ucfirst($request['name']),
            'surname' => $request['surname'],
            'address_line1' => $request['address1'],
            'address_line2' => $request['address2'],
            'phone' => $request['mobile'],
            'post_code' => $request['post_code'],
            'address_type' => 'invoicing',
            'shop_address_type' => 'bedebeShop',
        ]);

        if($address){
            return back()->with('success','Address is added successfully!');
        } else {
             return back()->with('success','Opps Something wrong!');
        }
    }

    //function for show edit invoicing address 
    public function editInvoicingAdress($id){
        $user = Auth::user();
        $invoicingAddress = DB::table('buyer_address')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->where('user_type', $user->user_type)
            ->where('address_type', 'invoicing')
            ->where('shop_address_type', 'bedebeShop')
            ->get();
        $view =  view('buyer.bedebeShop.edit-invoicing-address', compact('invoicingAddress'));
        return $view;
    }

    //function for submit edit invoicing address 
    public function submitEditInvoicingAddress(InvoicingAddressRequest $request, $id){
        $user = Auth::user();
        //update address
        $address = DB::table('buyer_address')
            ->where('id', $id)
            ->where('user_id', $user->id)
            ->where('user_type', $user->user_type)
            ->where('address_type', 'invoicing')
            ->where('shop_address_type', 'bedebeShop')
            ->update([
                    'name' => ucfirst($request['name']),
                    'surname' => $request['surname'],
                    'address_line1' => $request['address1'],
                    'address_line2' => $request['address2'],
                    'phone' => $request['mobile'],
                    'post_code' => $request['post_code']
                ]);
        if($address){
            return back()->with('success','Address is updated successfully!');
        } else {
             return back()->with('success','Opps Something wrong!');
        }
    }

    //function for delete invoicing address with use id
    public function deleteInvoicingAddress(Request $request, $id){
        $user = Auth::user();
        $delete = DB::table('buyer_address')
                ->where('id', $id)
                ->where('user_id', $user->id)
                ->where('user_type', $user->user_type)
                ->where('address_type', 'invoicing')
                ->where('shop_address_type', 'bedebeShop')->delete();
        if($delete){
            return back()->with('success','Address is deleted successfully!');
        } else {
            return back()->with('success','Opps Something wrong!');
        }
    }
}
