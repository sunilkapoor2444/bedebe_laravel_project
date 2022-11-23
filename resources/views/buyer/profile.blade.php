@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                  <div class="product-form">
                  <h3>Edit Profile</h3>
                  @if (Session::has('success'))
                     <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                  @endif
                  <div class="rightsub-form">
                        <form class="form" action="{{ route('profile.submit') }}" method="POST" id="buyer_profile">  
                      {{ csrf_field() }}
                           <div class="form-group">
                              <div class="form-details">
                                 <label for="first_name">
                                    <h4>Full Name</h4>
                                 </label>
                                 <input type="text" class="form-control" name="full_name" value="{{ $profile[0]->name }}" placeholder="Enter name">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-details">
                                 <label for="phone">
                                    <h4>Phone</h4>
                                 </label>
                                 <input type="text" class="form-control" name="phone" value="{{ $profile[0]->phone }}" placeholder="Enter phone">
                              </div>
                           </div>
                      <div class="form-group">
                              <div class="form-details">
                                 <label for="mobile">
                                    <h4>City</h4>
                                 </label>
                                 <input type="text" class="form-control" name="city" value="{{ $profile[0]->city }}" placeholder="Enter city">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-details">
                                 <label for="mobile">
                                    <h4>Address line1</h4>
                                 </label>
                                 <input type="text" class="form-control" name="address" value="{{ $profile[0]->address_line1 }}" placeholder="Enter address">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="cform-details">
                                 <label for="mobile">
                                    <h4>Address line2</h4>
                                 </label>
                                 <input type="text" class="form-control" name="address" value="{{ $profile[0]->address_line2 }}" placeholder="Enter address">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="form-button">
                                 <br>
                                 <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Update</button>
                              </div>
                           </div>
                        </form>
                  </div>
              </div>
              </div>
          </div>
      </div>
  </div>                 
@endsection