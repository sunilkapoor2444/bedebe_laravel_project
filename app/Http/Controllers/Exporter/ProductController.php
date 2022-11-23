<?php

namespace App\Http\Controllers\Exporter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Export\Product;
use Carbon\Carbon;
use DB;

class ProductController extends Controller
{
    //function for show add product page
    public function addProduct(){
		$view =  view('exporter.add-product');
        return $view;
    }

    //function for submit product 
    public function productSubmit(Request $request){
        $user = Auth::user();

       if($request->hasFile('product_img')){
            request()->validate([
                'name' => 'required', 'string', 'max:255',
                'sku' => 'required', 'string', 'max:255',
                'price' => 'numeric',
                'website' => 'required', 'string', 'max:255',
                'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
             //upload product image
            $imageName = 'img_'.time().'.'.request()->product_img->getClientOriginalExtension();
            $upload = request()->product_img->move(public_path('/assets/images/upload/product/'), $imageName);
        } else {
             request()->validate([
                'name' => 'required', 'string', 'max:255',
                'sku' => 'required', 'string', 'max:255',
                'price' => 'numeric',
                'website' => 'required', 'string', 'max:255',
            ]);

            $imageName = 'product-default.jpg';
        }
        //store product request value
        $productData = Product::create([ 
            'user_id'   =>  $user->id,
            'user_type' =>  $user->user_type,
            'name'  =>  $request['name'],
            'sku'  =>  $request['sku'],
            'price' =>  $request['price'],
            'description'   =>  $request['description'],
            'website_link'  =>  $request['website'],
            'product_img'  =>  $imageName,
            'reference'  =>  $request['reference'],
            'color'  =>  $request['color'],
            'size'  =>  $request['size']
        ]);
        if($productData){
            return back()->with('success','Your product is added successfully!');
        } else {
            return back()->with('success','Oops something went wrong');
        }
    }

    //function for show all product
    public function allProduct(){
        $user = Auth::user();
        $products =  DB::table('products')
                            ->where('user_id', $user->id)
                            ->where('user_type', $user->user_type)
                            ->orderBy('id', 'DESC')
                            ->get();
        $view =  view('exporter.all-product', compact('products'));
        return $view;
    }

    //function for show single product with product id
    public function productEdit($id){
        $user = Auth::user();
        $product =  DB::table('products')
                            ->where('id', $id)
                            ->where('user_id', $user->id)
                            ->where('user_type', $user->user_type)
                            ->get();
        return view('exporter.edit-product', compact('product'));
    }

    //function for update product with product id
    public function productUpdate(Request $request, $id){ 
        $user = Auth::user();
        
        //validation check if product image select or not
        if($request->hasFile('product_img')){
            request()->validate([
                'name' => 'required', 'string', 'max:255',
                'sku' => 'required', 'string', 'max:255',
                'price' => 'numeric',
                'website' => 'required', 'string', 'max:255',
                'product_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //upload product image
            $imageName = 'img_'.time().'.'.request()->product_img->getClientOriginalExtension();
            $upload = request()->product_img->move(public_path('/assets/images/upload/product/'), $imageName);

            //update product
            $result = DB::table('products')
                ->where('id', $id)
                ->where('user_id', $user->id)
                ->where('user_type', $user->user_type)
                ->update([
                        'name' => $request['name'],
                        'sku' => $request['sku'],
                        'price' => $request['price'],
                        'description'  =>  $request['description'],
                        'website_link'  =>  $request['website'],
                        'product_img'  =>  $imageName,
                        'reference'  =>  $request['reference'],
                        'color'  =>  $request['color'],
                        'size'  =>  $request['size'],
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
            if($result){
                return back()->with('success','Your product is updated successfully!');
            } else {
                return back()->with('success','Oops something went wrong');
            }
        } else {
            //validation rule without image
            request()->validate([
                'name' => 'required', 'string', 'max:255',
                'sku' => 'required', 'string', 'max:255',
                'price' => 'numeric',
                'website' => 'required', 'string', 'max:255'
            ]);
            //update product
            $result = DB::table('products')
                ->where('id', $id)
                ->where('user_id', $user->id)
                ->where('user_type', $user->user_type)
                ->update([
                        'name' => $request['name'],
                        'sku' => $request['sku'],
                        'price' => $request['price'],
                        'description'  =>  $request['description'],
                        'website_link'  =>  $request['website'],
                        'reference'  =>  $request['reference'],
                        'color'  =>  $request['color'],
                        'size'  =>  $request['size'],
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
            if($result){
                return back()->with('success','Your product is updated successfully!');
            } else {
                return back()->with('success','Oops something went wrong');
            }
        }
    }

    //function for delete product with product id
    public function deleteProduct(Request $request, $id){
    	$user = Auth::user();
        $delete = DB::table('products')
        					->where('id', $id)
                            ->where('user_id', $user->id)
                            ->where('user_type', $user->user_type)->delete();
        if($delete){
           return back()->with('success','Your product is deleted successfully!');
        } else {
            return back()->with('success','Oops something went wrong!');
        }
    }
}
