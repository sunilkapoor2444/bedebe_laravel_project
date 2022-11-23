@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-9">
              <div class="my-bedeeb">
                	@if (Session()->has('cartSuccess'))
			            <div class="alert alert-success">
			                {{ session()->get('cartSuccess') }}
			            </div>
			        @endif
				   	@if (Session::get('cart'))
				   	<form class="form" action="{{ route('product.update-cart') }}" method="POST">
		            	{{ csrf_field() }}
				      	<table id="cart" class="table table-hover table-condensed">
					        <thead>
					        <tr>
<!--					        	<th>Sr.</th>-->
					            <th>Product</th>
					            <th>Sku</th>
					            <th>Image</th>
					            <th>Color</th>
					            <th>Size</th>
					            <th>Quantity</th>
					            <th>Price</th>
					            <th></th>
					        </tr>
					        </thead>
					        @php $count = 1;
					        	 $total = 0;
					        @endphp
					        @foreach(Session::get('cart') as $item)
					        <tbody>
					        <tr>
<!--					        	<td>{{ $count }}</td>-->
					            <td>
                                    {{ $item['name'] }}
					            </td>
					            <td>
                                    {{ $item['sku'] }}
					            </td>
					            <td>
                                    <img class="product-img" src="{{ asset('public/assets/images/upload/product/'.$item['product_img'] ) }}">
					            </td>
					            <td>
                                    {{ $item['color'] }} 
					            </td>
					            <td>
                                   {{ $item['size'] }} 
					            </td>
					            <td>
					            	 <input type="hidden" name="id" value="{{ $item['productId'] }}">
					                <input type="number" name="quantity" class="form-control quantity text-center" value="{{ $item['quantity'] }}">
					            </td>
					            <td>@php $item_price = $item['price'];
					            $item_quenty = $item['quantity'];
					            $product_price = $item_price*$item_quenty;
					            echo $product_price;
					             @endphp </td>
					             <td>
			                        <button class="btn btn-danger btn-sm remove_from_cart" data-product_id="{{ $item['productId'] }}" data-site_url="{{ url('/') }}"><i class="fa fa-trash-o"></i></button>
			                    </td>
					        </tr>
					        </tbody>
					        @php $total += $product_price; @endphp
					        @php $count++; @endphp
					        @endforeach
					        <tr>
					            <td><input type="submit" value="Update Cart" class="btn btn-warning"/></td>
					        </tr>
					        <tr>
					            <td><a href="{{ url('/buyer/all-product') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue shopping</a></td>
					            <td><a href="{{ url('/buyer/checkout') }}" class="btn btn-warning">Proceed to checkout</a></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
					            <td colspan="2" class="hidden-xs text-center"><strong>Total ${{ $total }}</strong></td>
					        </tr>
					    </table>  
					</form>
				    @else
			            <h3>You have no items in your shopping cart</h3>
			            <a href="{{ url('/buyer/all-product') }}" class="btn btn-primary btn-lg">Continue Shopping</a>
			        @endif
              </div>
          </div>
      </div>
  </div>                 
@endsection

