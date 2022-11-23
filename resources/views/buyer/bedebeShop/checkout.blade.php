@extends('layouts.master')
@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                  <div class="product-form details-form">
                 @if (Session::get('cart'))
			      <h3>Billing details</h3>
			      @if (Session::has('success'))
	                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
	              @endif
			      <div class="rightsub-form">
			            <form class="form" action="{{ route('order.submit') }}" method="POST">
			            	{{ csrf_field() }}
                        <div class="row">
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label>
			                        <h4>First Name</h4>
			                     </label>
			                     <input type="text" class="form-control" name="fname" value="" placeholder="Enter first name" >
			                  </div>
			                  @if ($errors->has('fname'))
                                <span class="help-block">
                                  <p>{{ $errors->first('fname') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Last Name</h4>
			                     </label>
			                     <input type="text" class="form-control" name="lname" value="" placeholder="Enter last name">
			                  </div>
			                   @if ($errors->has('lname'))
                                <span class="help-block">
                                  <p>{{ $errors->first('lname') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Company Name (optional)</h4>
			                     </label>
			                     <input type="text" class="form-control" name="company" value="" placeholder="Enter company name">
			                  </div>
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Country</h4>
			                     </label>
			                     <input type="text" class="form-control" name="country" value="" placeholder="Enter country">
			                  </div>
			                   @if ($errors->has('country'))
                                <span class="help-block">
                                  <p>{{ $errors->first('country') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Street Address</h4>
			                     </label>
			                     <input type="text" class="form-control" name="address" value="" placeholder="House number and street name">
			                  </div>
			                   @if ($errors->has('address'))
                                <span class="help-block">
                                  <p>{{ $errors->first('address') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Apartment Address</h4>
			                     </label>
			                     <input type="text" class="form-control" name="apartment" value="" placeholder="Apartment, suite, unit etc. (optional)">
			                  </div>
			                   @if ($errors->has('apartment'))
                                <span class="help-block">
                                  <p>{{ $errors->first('apartment') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Town / City</h4>
			                     </label>
			                     <input type="text" class="form-control" name="city" value="" placeholder="Enter City">
			                  </div>
			                   @if ($errors->has('city'))
                                <span class="help-block">
                                  <p>{{ $errors->first('city') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Postcode / ZIP</h4>
			                     </label>
			                     <input type="text" class="form-control" name="postcode" value="" placeholder="Enter Postcode">
			                  </div>
			                   @if ($errors->has('postcode'))
                                <span class="help-block">
                                  <p>{{ $errors->first('postcode') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Phone</h4>
			                     </label>
			                     <input type="text" class="form-control" name="phone" value=""  placeholder="Enter phone number">
			                  </div>
			                   @if ($errors->has('phone'))
                                <span class="help-block">
                                  <p>{{ $errors->first('phone') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="col-md-6 form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Email address</h4>
			                     </label>
			                     <input type="email" class="form-control" name="email" value=""  placeholder="Enter email address">
			                  </div>
			                   @if ($errors->has('email'))
                                <span class="help-block">
                                  <p>{{ $errors->first('email') }}</p>
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
			               <div class="col-md-12 form-group">
			                  <div class="form-details checkbox">
			                    <input class="form-check-input" type="checkbox" name="terms_conditions" value="1"> 
			                    I accept the Terms and conditions
			                  </div>
			                   @if ($errors->has('terms_conditions'))
                                <span class="help-block">
                                  <p>{{ $errors->first('terms_conditions') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="order col-md-12 ">
				               <h1>Your order</h1>
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
								                        <h4 class="nomargin">@php echo $item['name']; @endphp * @php echo $item['quantity']; @endphp</h4>
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
							        		<td>Total </td>
							        		<td>
							        			<input type="hidden" name="total_price" value="@php echo $total; @endphp">
							        			$@php echo $total; @endphp
							        		</td>
							        	</tr>
							        </thead>
							    </table>
							</div>
						    <div class="col-md-12 form-group">
			                  <div class="form-button">
			                 	 <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Place Order</button>
			                  </div>
			               </div> 
                        </div>
			         </form>
			      </div>
			      @else
					<h3>You have no items in your shopping cart</h3>
					<a href="{{ url('/buyer/all-product') }}" class="btn btn-primary btn-lg">Continue Shopping</a>
				@endif
              </div>
              </div>
          </div>
      </div>
  </div>                 
@endsection