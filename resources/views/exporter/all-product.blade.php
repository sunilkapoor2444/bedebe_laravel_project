@extends('layouts.supplier_master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
             @include('supplier.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                	<h3 class="bedebe-title">My All Product</h3>
				    @if(Session::has('success'))
		                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
		            @endif
		            <div id="responce_msg"></div>
			      	<div class="table-responsive">
			      	@if($products)
			         <table id="mytable" class="table table-bordred table-striped">
			            <thead>
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
			               		<td>{{ $product->name }}</td>
			               		<td>{{ $product->sku }}</td>
			                  	<td>{{ $product->price }}</td>
			                  	<td>
			                  		@if($product->product_img)
	                      				<img class="product-img" src="{{ asset('public/assets/images/upload/product/'.$product->product_img ) }}">
                          			@endif
                          		</td>
			                 	 <td> 
			                 	 	<a href="{{ route('exporter.product.edit',$product->id) }}"><i class="fa fa-pencil"></i></a><span>|</span>
                                     <a href="{{ route('exporter.product.delete',$product->id) }}"><i class="fa fa-trash"></i></a>
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