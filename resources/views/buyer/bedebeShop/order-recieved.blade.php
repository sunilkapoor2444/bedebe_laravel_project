@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                @if (Session()->has('order-success'))
	            	<div class="alert alert-success">
               			 {{ session()->get('order-success') }}
            		</div>
        		@endif
        		@if(Session::get('cart'))
    			<table id="checkout" class="table table-hover table-condensed">
		        	<thead>
				        <tr>
				        	<th>Product</th>
				            <th>Total</th>
				        </tr>
			        </thead>
			        @php $total = 0; @endphp
			        @foreach (session::get('cart') as $item)
			        <tbody>
			        	<tr>
				            <td data-th="Product">
				                <div class="row">
				                    <div class="col-sm-9">
				                        <h4 class="nomargin">@php echo $item['name']; @endphp, *@php echo $item['quantity']; @endphp</h4>
				                    </div>
				                </div>
				            </td>
				            <td data-th="Price">
				            	@php $item_price = 	$item['price'];
					            $item_quenty = $item['quantity'];
					            $product_price =$item_price*$item_quenty;
					            @endphp 
					            $@php  echo $product_price;
					            @endphp 
					        </td>
			        	</tr>
			        </tbody>
			        @php $total += $product_price; @endphp
			        @endforeach
			        <thead class="total-price">
			        	<tr>
			        		<td>Total</td>
			        		<td>
			        			<input type="hidden" name="total_price" value="@php echo $total; @endphp">
			        			$@php echo $total;
			        			@endphp
			        		</td>
			        	</tr>
			        </thead>
			       <!--  <tbody>
			        	<tr>
			        		<td>
			        			<input type="hidden" name="total_price" value="@php echo $total; @endphp">
			        			$@php echo $total;
			        			@endphp
			        		</td>
			        	</tr>
			        </tbody> -->
			    </table>
        		@else
		            <h3>You have no permission</h3>
		        @endif
		        @php 
		        	//cart session unset
	                $cart = session()->get('cart');
	                session()->forget('cart');
		        @endphp
              </div>
          </div>
      </div>
  </div>                 
@endsection