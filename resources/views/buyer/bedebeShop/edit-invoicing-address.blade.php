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
                <h3>Edit Invoicing Address</h3>
                  @if (Session::has('success'))
                      <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                  @endif
    			        <form class="form" action="{{ route('edit.invoicing.address.submit',$invoicingAddress[0]->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Name</h4>
                           </label>
                           <input type="text" class="form-control" name="name" value="{{ $invoicingAddress[0]->name }}" placeholder="Enter name">  
                        </div>
                        @if ($errors->has('name'))
                          <span class="help-block">
                            <p>{{ $errors->first('name') }}</p>
                          </span>
                        @endif
                     </div>
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Surname</h4>
                           </label>
                           <input type="text" class="form-control" name="surname" value="{{ $invoicingAddress[0]->surname }}" placeholder="Enter Surname">  
                        </div>
                         @if ($errors->has('surname'))
                            <span class="help-block">
                              <p>{{ $errors->first('surname') }}</p>
                            </span>
                          @endif
                     </div>
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Address Line 1</h4>
                           </label>
                           <input type="text" class="form-control" name="address1" value="{{ $invoicingAddress[0]->address_line1 }}" placeholder="Enter Address Line 1">
                        </div>
                         @if ($errors->has('address1'))
                            <span class="help-block">
                              <p>{{ $errors->first('address1') }}</p>
                            </span>
                          @endif
                     </div>
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Address Line 2</h4>
                           </label>
                           <input type="text" class="form-control" name="address2" value="{{ $invoicingAddress[0]->address_line2 }}" placeholder="Enter Address Line 2">
                        </div>
                        @if ($errors->has('address2'))
                            <span class="help-block">
                              <p>{{ $errors->first('address2') }}</p>
                            </span>
                          @endif
                     </div> 
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Post Code</h4>
                           </label>
                           <input type="text" class="form-control" name="post_code" value="{{ $invoicingAddress[0]->post_code }}" placeholder="Enter Post Code">
                        </div>
                         @if ($errors->has('post_code'))
                            <span class="help-block">
                              <p>{{ $errors->first('post_code') }}</p>
                            </span>
                          @endif
                     </div>
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Mobile Number</h4>
                           </label>
                           <input type="text" class="form-control" name="mobile" value="{{ $invoicingAddress[0]->phone }}" placeholder="Enter Mobile Number">
                        </div>
                         @if ($errors->has('mobile'))
                            <span class="help-block">
                              <p>{{ $errors->first('mobile') }}</p>
                            </span>
                          @endif
                     </div>
                     <div class="form-group">
                        <div class="form-button">
                           <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                           <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                        </div>
                     </div>
                  </form>
              </div>
              </div>
          </div>
      </div>
  </div>                 
@endsection