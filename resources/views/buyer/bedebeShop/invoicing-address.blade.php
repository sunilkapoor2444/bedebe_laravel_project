@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                 <h3>My Invoicing Address</h3>
                 @if(Session::has('success'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                  @endif
                  @if($invoicingAddress)
                    @foreach($invoicingAddress as $address)
                      <div class="inner-cont">
                          <ul>
                              <li>
                                  <h4>Name :</h4>
                                  <span>@php echo $address->name.' '.$address->surname; @endphp</span>
                              </li>
                              <li>
                                  <h4>Address :</h4>
                                  <span>
                                      @php echo $address->address_line1.', '.$address->address_line2.', '.$address->post_code;
                                      @endphp 
                                  </span>
                              </li>
                              <li>
                                  <h4>Phone :</h4>
                                  <span>
                                      @php echo $address->phone; @endphp 
                                  </span>
                              </li>
                              <li>
                                  <a href="{{ url('buyer/my-invoicing-address-delete',$address->id) }}">Edit Address</a>||<a href="{{ url('buyer/my-invoicing-address-delete',$address->id) }}" }}><i class="fa fa-trash"></i></a>
                              </li>
                          </ul>
                      </div>
                      @endforeach
                          @else
                            I don't have any address records!
                      @endif
                      <a href="{{ url('buyer/add-invoicing-address') }}">Add Address</a>
              </div>
          </div>
      </div>
  </div>                 
@endsection