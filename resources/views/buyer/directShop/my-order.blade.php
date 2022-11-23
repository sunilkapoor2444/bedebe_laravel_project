@extends('layouts.master')

@section('content')
	
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
             @include('buyer.directShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                <h1>My Orders</h1>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                  <thead>
                     <th>name</th>
                     <th>invoice_no</th>
                     <th>quantity</th>
                     <th>amount</th>
                     <th>Status</th>
                  </thead>
                  <tbody>
                    @foreach($orders as $order)
                     <tr>              
                        <td>{{ $order->name }}</td> 
                        <td>{{ $order->invoice_no }}</td> 
                        <td>{{ $order->quantity }}</td>
                        <td>@php echo $order->currency.$order->amount; @endphp</td>
                       <td>{{ $order->invoice_status }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
                </div>
              </div>
          </div>
      </div>
  </div>
                    
@endsection