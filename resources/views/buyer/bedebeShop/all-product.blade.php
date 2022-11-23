@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                	<h3 class="bedebe-title">My All Product</h3>
				    @if(Session::get('cart'))
				      	<a class="view-btn" href="{{ url('/buyer/cart') }}">View Cart Page </a>
				    @endif
				    @if(Session::has('success'))
		                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
		            @endif
		            <div id="responce_msg"></div>
			      	<div class="table-responsive">
			      	@if($products)
			         <table id="mytable" class="table table-bordred table-striped">
			            <thead>
<!--			               <th>Sr.</th>-->
			               <th>Prodcut Name</th>
			               <th>Sku</th>
			               <th>Price</th>
			               <th>Image</th>
			               <th>Action</th>
			            </thead>
			            <tbody>
			            	<?php $count = 1; ?>
			            	@foreach($products as $product)
			               <tr>		                 
<!--			               		<td><?php echo $count; ?></td>-->
			               		<td>{{ $product->name }}</td>
			               		<td>{{ $product->sku }}</td>
			                  	<td>{{ $product->price }}</td>
			                  	<td>
			                  		@if($product->product_img)
	                      				<img class="product-img" src="{{ asset('public/assets/images/upload/product/'.$product->product_img ) }}">
                          			@endif
                          		</td>
			                 	 <td> 
			                 	 	<a href="{{ route('product.edit',$product->id) }}"><i class="fa fa-pencil"></i></a><span>|</span>
                                     <a href="javascript:void(0)" class="deleteProduct" data-id="{{ $product->id }}" data-site_url="{{ url('/') }}"><i class="fa fa-trash"></i></a>
                                     <a href="{{ route('product.add-to-cart',$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a>
			                 	 </td>
			               </tr>
			               <?php $count++; ?>
			               @endforeach
			            </tbody>  
			        </table>
			        @else
					    I don't have any product records!
					@endif
              </div>
          </div>
      </div>
  </div>                 
@endsection