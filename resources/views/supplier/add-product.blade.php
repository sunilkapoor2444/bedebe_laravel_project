@extends('layouts.supplier_master')

@section('content')
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
              @include('supplier.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                  <div class="product-form">
                   	<h3>Add Product</h3>
			      	@if (Session::has('success'))
	                	<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
	              	@endif
			        <div class="rightsub-form">
			            <form class="form" action="{{ route('supplier.product.submit') }}" method="POST" enctype="multipart/form-data">
			            	{{ csrf_field() }}
			               <div class="form-group">
			                  <div class="form-details">
			                     <label>
			                        <h4>Product Title</h4>
			                     </label>
			                     <input type="text" class="form-control" name="name" value="" placeholder="Enter product title">  
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
			                        <h4>Sku Number</h4>
			                     </label>
			                     <input type="text" class="form-control" name="sku" value="" placeholder="Enter sku number">  
			                  </div>
			                   @if ($errors->has('sku'))
                                <span class="help-block">
                                  <p>{{ $errors->first('sku') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="form-group">
			                  <div class="form-details">
			                     <label for="phone">
			                        <h4>Price</h4>
			                     </label>
			                     <input type="text" class="form-control" name="price" value="" placeholder="Enter price">
			                  </div>
			                   @if ($errors->has('price'))
                                <span class="help-block">
                                  <p>{{ $errors->first('price') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="form-group">
			                  <div class="form-details">
			                     <label for="discription">
			                        <h4>Discription</h4>
			                     </label>
			                     <textarea type="text" class="form-control" name="description" placeholder="Enter product description"></textarea>
			                  </div>
			               </div> 
			               <div class="form-group">
			                  <div class="form-details">
			                     <label for="webiste-link">
			                        <h4>Website Link</h4>
			                     </label>
			                     <input type="text" class="form-control" name="website" value="" placeholder="http:">
			                  </div>
			                   @if ($errors->has('website'))
                                <span class="help-block">
                                  <p>{{ $errors->first('website') }}</p>
                                </span>
                              @endif
			               </div>
			               <div class="form-group">
			                  <div class="form-details">
			                     <label for="webiste-link">
			                        <h4>Reference</h4>
			                     </label>
			                     <input type="text" class="form-control" name="reference" value="" placeholder="Enter Reference">
			                  </div>
			               </div>
			               <div class="form-group">
			                  <div class="form-details">
			                     <label for="webiste-link">
			                        <h4>Color</h4>
			                     </label>
			                     <input type="text" class="form-control" name="color" value="" placeholder="Enter Color">
			                  </div>
			               </div>
			               <div class="form-group">
			                  <div class="form-details">
			                     <label for="webiste-link">
			                        <h4>Size</h4>
			                     </label>
			                     <input type="text" class="form-control" name="size" value="" placeholder="Enter Product Size">
			                  </div>
			               </div>
			               <div class="form-group">
			                  <div class="form-details">
			                     <label for="webiste-link">
			                        <h4>Upload Image</h4>
			                     </label>
			                     <input type="file" class="form-control" name="product_img" value="">
			                  </div>
			                  @if ($errors->has('product_img'))
                                <span class="help-block">
                                  <p>{{ $errors->first('product_img') }}</p>
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
      </div>   
@endsection