<?php

namespace App\Models\Buyer\BedebeShop;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
	//Method for check product id exits or not
    public function getProduct($request,$id){
    	$user = Auth::user();
        $product = DB::table('products')->get()
        					->where('id', $id)
                            ->first();
        return  $product;
    }
}
