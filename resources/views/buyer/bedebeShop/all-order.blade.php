@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                 <h1>All Order List</h1>
			      <div class="table-responsive">
			      	@if($orders)
			         <table id="mytable" class="table table-bordred table-striped">
			            <thead>
			               <th>Sr.</th>
			               <th>Order</th>
			               <th>Date</th>
			               <th>Status</th>
			               <th>Total</th>
			               <th></th>
			            </thead>
			            <tbody>
			            	@php $count = 1; @endphp
			            	@foreach($orders as $order)
			               <tr>		                 
			               		<td>{{ $count }}</td>
			               		<td>#{{ $order->order_id }}
			               			{{ $order->display_name }}</td> 
			                  	<td>@php $order->created_at;
			                  			echo date('d-m-Y', strtotime($order->created_at));
			                  	 @endphp</td>
			                  	<td>{{ $order->order_status }}</td>
			                  	<td>${{ $order->order_total }}</td>
			                 	<td>
		                 			<a href="{{ route('order.view',$order->order_id) }}"><i class="fa fa-eye"></i></button></a>
		                 		</td>
			               </tr>
			               @php $count++; @endphp
			               @endforeach
			            </tbody>
			         </table>
			         @else
					    I don't have any order records!
					@endif
			      </div>
              </div>
          </div>
      </div>
  </div>                 
@endsection