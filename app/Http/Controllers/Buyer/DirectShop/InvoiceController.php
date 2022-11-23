<?php

namespace App\Http\Controllers\Buyer\DirectShop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Buyer\DirectInvoiceRequest;
use App\Models\Buyer\DirectShop\Invoice;
use DB;

class InvoiceController extends Controller
{
    //function for show add invoice page
    public function addInvoice(){
		$view =  view('buyer.directShop.add-invoice');
        return $view;
    }

    //function for submit invoice 
    public function submitInvoice(DirectInvoiceRequest $request){
		$user = Auth::user();
        $address = Invoice::create([ 
            'user_id' => $user->id,
            'user_type' => $user->user_type,
            'name' => ucfirst($request['name']),
            'invoice_no' => $request['invoice_no'],
            'quantity' => $request['quantity'],
            'amount' => $request['amount'],
            'currency' => $request['currency'],
            'invoice_type' => 'directShop',
            'invoice_status' => 'pending',
            'payment_method' => $request['payment_method'],
            'terms_conditions' => $request['terms_conditions'],
        ]);

        if($address){
            return back()->with('success','Invoice is added successfully!');
        } else {
             return back()->with('success','Opps Something wrong!');
        }
    }

    //function for show my order page
    public function myDirectOrder(){
    	$user = Auth::user();
    	$orders = DB::table(
    		'buyer_invoices')
			->where('user_id', $user->id)
			->where('user_type', 'buyer')
			->where('invoice_type', 'directShop')
			->get();
		$view =  view('buyer.directShop.my-order', compact('orders'));
        return $view;
    }
}
