@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                <h3>My Europa Delivery Address</h3>
    			         @if($europaAddress)
                      @foreach($europaAddress as $address)
                      <div class="inner-cont">
                          <ul>
                              <li>
                                  <h4>Country Name :</h4>
                                  <span>@php echo $address->country_name; @endphp</span>
                              </li>
                              <li>
                                  <h4>Address :</h4>
                                  <span>
                                      @php echo $address->address1.', '.$address->address2.', '.$address->address3.', '.$address->post_code;
                                      @endphp 
                                  </span>
                              </li>
                              <li>
                                  <h4>Phone :</h4>
                                  <span>
                                      @php echo $address->phone; @endphp 
                                  </span>
                              </li>
                          </ul>
                      </div>
                      @endforeach
                          @else
                            I don't have any address records!
                      @endif
              </div>
          </div>
      </div>
  </div>                 
@endsection