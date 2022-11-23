@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-12">
              <div class="my-bedeeb">
                @if($billingDeails)
			      <h1>Order #{{ $billingDeails[0]->order_id }} details</h1>
			      <div class="table-responsive">
			      	<h1>Billing address</h1>
			         <table id="mytable" class="table table-bordred table-striped">
			            <thead>
			               <th>Name</th>
			               <th>Company</th>
			               <th>Country</th>
			               <th>Street</th>
			               <th>Apartment</th>
			               <th>City</th>
			               <th>Postcode</th>
			               <th>Email</th>
			               <th>Phone</th> 
			            </thead>
			            <tbody>
			            	@foreach($billingDeails as $billing)
								<tr>		                 
									<td>{{ $billing->display_name }}</td>
									<td>{{ $billing->company }}</td> 
								  	<td>{{ $billing->country }}</td>
								  	<td>{{ $billing->street_address }}</td>
								  	<td>{{ $billing->appartment_address }}</td>
								  	<td>{{ $billing->city }}</td>
								  	<td>{{ $billing->postcode }}</td>
								  	<td>{{ $billing->email }}</td>
								  	<td>{{ $billing->phone }}</td>
								</tr>
			                @endforeach
			            </tbody>
			         </table>
			        </div>
				@endif
				@if($orderItems)
			        <div class="table-responsive">
			         <table class="table table-bordred table-striped">
			            <thead>
			            	<th>Sr No</th>
			               	<th>Item</th>
			               	<th>Cost</th>
			               	<th>Qty</th>
			               	<th>Total</th>
			            </thead>
			            @php $countItem = 1;
			            	$total = 0 @endphp
		            	@foreach($orderItems as $item)
			            <tbody>
			               <tr>		                 
			               		<td>{{ $countItem }}</td>
			               		<td>{{ $item->order_item_name }}</td> 
			                  	<td>{{ $item->order_item_price }}</td>
			                  	<td>{{ $item->order_items_qty }}</td>
			                  	<td>@php
					        			$item_quenty = $item->order_items_qty;
					        			$product_price = $item_quenty*$item->order_item_price; 
				        			@endphp
						            ${{ $product_price }}
								</td>
			               </tr>
			               @php $total += $product_price; 
			               $countItem++; @endphp
			               @endforeach
			            </tbody>
			            <tbody>
			               <tr>		                 
			               		<td></td>
			               		<td></td>
			               		<td></td> 
			                  	<td>Total</td>
			                  	<td>${{ $total }}</td>
			               </tr>
			            </tbody>
			         </table>
			      </div>
			      @endif	
              </div>
          </div>
      </div>
  </div>                 
@endsection