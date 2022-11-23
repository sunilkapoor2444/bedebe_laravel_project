@extends('admin.layouts.master')

@section('content') 
  <section class="charts">
        <div class="container-fluid">
          @if($orders)
          <header> 
            <h1 class="h3">Order List</h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Sr. No</th>
                        <th>Order Id</th>
                        <th>Date</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    @php $count = 1; @endphp
                    @foreach($orders as $order)
                    <tbody>
                      <tr>
                        <th scope="row">{{ $count }}</th>
                        <td>#{{ $order['id'] }} {{ $order->getAllOrders['0']->display_name }}</td>
                        <td>@php echo date('d-m-Y', strtotime($order['created_at'] ));
                         @endphp</td>
                         <td>{{ $order->getAllOrders['0']->payment_method }}</td>
                        <td>{{ $order['order_status'] }}</td>
                        <td>${{ $order['order_total'] }}</td>
                        <td>
                          <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                      </td>
                      </tr>
                    </tbody>
                     @php $count++; @endphp
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
          @else
              <h3>No Order Found</h3>
          @endif
        </div>
      </section>
@endsection
    