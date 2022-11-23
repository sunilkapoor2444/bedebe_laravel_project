<?php

namespace App\Http\Controllers\Buyer\BedebeShop;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Buyer\BedebeShopCheckoutRequest;
use DB;
use Carbon\Carbon;
use App\Models\Buyer\BedebeShop\Product;

class ProductController extends Controller {
  	
  	public function __construct()
    {
        $this->middleware('buyer');
    }

     //function for show add products
    public function createProducts(){
        $view =  view('buyer.bedebeShop.create-product');
        return $view;
    }

    //function for submit order
    public function productSubmit(Request $request){
    	$user = Auth::user();
        //validation check if product image select or not
        if($request->hasFile('product_img')){
            //validation rule with product image
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
            //validation rule without product image
            request()->validate([
                'name' => 'required', 'string', 'max:255',
                'sku' => 'required', 'string', 'max:255',
                'price' => 'numeric',
                'website' => 'required', 'string', 'max:255',
            ]);

            $imageName = 'product-default.jpg';
        }
        
        //store request value
    	$orderData[] = [
            'user_id'   =>  $user->id,
            'user_type'	=>  $user->user_type,
            'name'	=>  $request->input('name'),
            'sku'  =>  $request->input('sku'),
            'price'	=>  $request->input('price'),
            'description'	=>  $request->input('description'),
            'website_link'	=>  $request->input('website'),
            'product_img'  =>  $imageName,
            'reference'  =>  $request->input('reference'),
            'color'  =>  $request->input('color'),
            'size'  =>  $request->input('size'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];

        //insert product data
        $result = DB::table('products')->insert($orderData);
		if($result){
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
                            ->where('user_type', 'buyer')
                            ->orderBy('id', 'DESC')
                            ->get();
        $view =  view('buyer.bedebeShop.all-product', compact('products'));
        return $view;
    }
	
	//function for delete product with use id
	public function destroyProduct(Request $request, $id){
		$user = Auth::user();
        $delete = DB::table('products')
                            ->where('id', $id)
                            ->where('user_id', $user->id)
                            ->where('user_type', $user->user_type)
                            ->delete();
		if($delete){
			echo 1;
		} else {
			0;
		}
	}
	
	//function for show single product with use id
    public function productEdit($id){
		$user = Auth::user();
        $product =  DB::table('products')
                            ->where('id', $id)
                            ->where('user_id', $user->id)
                            ->where('user_type', 'buyer')
                            ->get();
		return view('buyer.bedebeShop.edit-product', compact('product'));
    }
	
	//function for update product with use id
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
                ->where('user_type', 'buyer')
                ->update([
                        'name' => $request->input('name'),
                        'sku' => $request->input('sku'),
                        'price' => $request->input('price'),
                        'description'  =>  $request->input('description'),
                        'website_link'  =>  $request->input('website'),
                        'product_img'  =>  $imageName,
                        'reference'  =>  $request->input('reference'),
                        'color'  =>  $request->input('color'),
                        'size'  =>  $request->input('size'),
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
                ->where('user_type', 'buyer')
                ->update([
                        'name' => $request->input('name'),
                        'sku' => $request->input('sku'),
                        'price' => $request->input('price'),
                        'description'  =>  $request->input('description'),
                        'website_link'  =>  $request->input('website'),
                        'reference'  =>  $request->input('reference'),
                        'color'  =>  $request->input('color'),
                        'size'  =>  $request->input('size'),
                        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                    ]);
            if($result){
                return back()->with('success','Your product is updated successfully!');
            } else {
                return back()->with('success','Oops something went wrong');
            }
        }
    }

    //function for product cart page
    public function cart()
    {
        return view('buyer.bedebeShop.cart');
    }

    //function for product add to cart
    public function addToCart(Request $request, $id)
    {
        $product_model = new Product;
        $product = $product_model->getProduct($request,$id);
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "productId" => $product->id,
                        "name" => $product->name,
                        "sku" => $product->sku,
                        "quantity" => 1,
                        "product_img" => $product->product_img,
                        "description" => $product->description,
                        "website_link" => $product->website_link,
                        "product_img" => $product->product_img,
                        "reference" => $product->reference,
                        "color" => $product->color,
                        "size" => $product->size,
                        "price" => $product->price,
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "productId" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "sku" => $product->sku,
            "product_img" => $product->product_img,
            "description" => $product->description,
            "website_link" => $product->website_link,
            "product_img" => $product->product_img,
            "reference" => $product->reference,
            "color" => $product->color,
            "size" => $product->size,
            "price" => $product->price,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    //function for update cart page
    public function updateCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('cartSuccess', 'Cart updated successfully');
        }
    }

    //function for remove product from cart page
    public function removeProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('cartSuccess', 'Product removed successfully from cart');
        }
    }

    //function for checkout page
    public function checkout(Request $request)
    {
        $view =  view('buyer.bedebeShop.checkout');
        return $view;
    }

    //function for order submit
    public function orderSubmit(BedebeShopCheckoutRequest $request){
        $user = Auth::user();
        $orderData[] = [
            'user_id'   =>  $user->id,
            'user_type' =>  $user->user_type,
            'order_total'  =>  $request['total_price'],
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $orders = DB::table('orders')->insert($orderData);
        if($orders){
            //get last insert id from orders table
            $lastId = DB::getPdo()->lastInsertId();
            //insert billing details
            $dispaly_name = $request['fname'].' '.$request['lname'];
            $billingData[] = [
                'user_id'   =>  $user->id,
                'user_type' =>  $user->user_type,
                'order_id'  =>  $lastId,
                'display_name'  =>  ucfirst($dispaly_name),
                'company'  =>  $request['company'],
                'country'  =>  $request['country'],
                'street_address'  =>  $request['address'],
                'appartment_address'  =>  $request['apartment'],
                'city'  =>  $request['city'],
                'postcode'  =>  $request['postcode'],
                'phone'  =>  $request['phone'],
                'email'  =>  $request['email'],
                'type'  =>  'billing',
                'payment_method'  =>  $request['payment_method'],
                'terms_conditions'  =>  $request['terms_conditions'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ];
            $insertBilling = DB::table('billing_details')->insert($billingData);

            //insert order item
            $OrderItems = $request->session()->get('cart');
            foreach($OrderItems as $item){
                $orderItemData[] = [
                    'user_id'   =>  $user->id,
                    'user_type' =>  $user->user_type,
                    'order_id' =>  $lastId,
                    'product_id' =>  $item['productId'],
                    'order_item_name' =>  $item['name'],
                    'order_item_price' =>  $item['price'],
                    'order_items_qty' =>  $item['quantity'],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ];
            }
             $orderItemsResult = DB::table('order_items')->insert($orderItemData);
            if($orderItemsResult){
                $request->session()->flash('order-success', 'Thank you. Your order has been received');
                return redirect('buyer/order-received');
            } else {
                $request->session()->flash('order-success', 'Opps something wrong!');
                return redirect('buyer/order-received');
            } 
        } else {
            $request->session()->flash('order-success', 'Opps something wrong!');
           return redirect('buyer/order-received');
        }
    }

    //function for order recieved file
    public function orderReceived(Request $request){
       $view =  view('buyer.bedebeShop.order-recieved');
        return $view;
    }
}
