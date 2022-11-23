@extends('layouts.master')

@section('content')
	
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
             @include('buyer.directShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                   <div class="product-form">
                <h3>Add Invoice</h3>
                   @if (Session::has('success'))
                      <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                  @endif
                  <form class="form" action="{{ route('invoice.submit') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Supplier name</h4>
                           </label>
                           <input type="text" class="form-control" name="name" value="" placeholder="Enter Supplier Name">  
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
                              <h4>Purchase invoice no</h4>
                           </label>
                           <input type="text" class="form-control" name="invoice_no" value="" placeholder="Enter Purchase Invoice No.">  
                        </div>
                         @if ($errors->has('invoice_no'))
                            <span class="help-block">
                              <p>{{ $errors->first('invoice_no') }}</p>
                            </span>
                          @endif
                     </div>
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Package quantity</h4>
                           </label>
                           <input type="text" class="form-control" name="quantity" value="" placeholder="Enter Package Quantity">
                        </div>
                         @if ($errors->has('quantity'))
                            <span class="help-block">
                              <p>{{ $errors->first('quantity') }}</p>
                            </span>
                          @endif
                     </div>
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Amount </h4>
                           </label>
                           <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                        </div>
                        @if ($errors->has('amount'))
                            <span class="help-block">
                              <p>{{ $errors->first('amount') }}</p>
                            </span>
                          @endif
                     </div> 
                     <div class="form-group">
                        <div class="form-details">
                           <label>
                              <h4>Currency</h4>
                           </label>
                           <input type="text" class="form-control" name="currency" value="" placeholder="Enter Currency">
                        </div>
                         @if ($errors->has('currency'))
                            <span class="help-block">
                              <p>{{ $errors->first('currency') }}</p>
                            </span>
                          @endif
                     </div>
                     <div class="col-md-12 form-group">
                        <div class="form-details">
                           <label for="phone">
                              <h4>Choose Payment Method</h4>
                           </label>
                           <ul class="checkbox-btn">
                         <li> <input class="form-check-input" type="radio" name="payment_method" value="Mvola"> <span>Mvola</span></li>
                         <li> <input class="form-check-input" type="radio" name="payment_method" value="Orange"> <span>Orange</span> </li>
                         <li><input class="form-check-input" type="radio" name="payment_method" value="Money"> <span>Money</span></li>
                         <li><input class="form-check-input" type="radio" name="payment_method" value="Airtel"> <span>Airtel</span> </li>
                         <li> <input class="form-check-input" type="radio" name="payment_method" value="Cash"> <span>Cash</span></li>
                         </ul>
                        </div>
                         @if ($errors->has('payment_method'))
                                <span class="help-block">
                                  <p>{{ $errors->first('payment_method') }}</p>
                                </span>
                              @endif
                     </div>
                     <div class="col-md-12 form-group form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="terms_conditions" value="1"> I accept the Terms and Conditions
                          </label>
                          @if ($errors->has('terms_conditions'))
                            <span class="help-block">
                              <p>{{ $errors->first('terms_conditions') }}</p>
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