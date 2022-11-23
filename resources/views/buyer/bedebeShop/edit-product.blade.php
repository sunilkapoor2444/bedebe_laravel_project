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
                <h3>Edit Product</h3>
				@if (Session::has('success'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
				@endif
				<div class="rightsub-form">
				    <form class="form" action="{{ route('product.update',$product[0]->id) }}" method="POST" enctype="multipart/form-data">
				    	{{ csrf_field() }}
				       <div class="form-group">
				          <div class="form-details">
				             <label>
				                <h4>Product Title</h4>
				             </label>
				             <input type="text" class="form-control" name="name" value="{{ $product[0]->name }}" placeholder="Enter product title">
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
			                     <input type="text" class="form-control" name="sku" value="{{ $product[0]->sku }}" placeholder="Enter sku number">  
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
				             <input type="text" class="form-control" name="price" value="{{ $product[0]->price }}" placeholder="Enter price">
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
				             <textarea type="text" class="form-control" name="description" placeholder="Enter product description">{{ $product[0]->description }}</textarea>
				          </div>
				       </div> 
				       <div class="form-group">
				          <div class="form-details">
				             <label for="webiste-link">
				                <h4>Website Link</h4>
				             </label>
				             <input type="text" class="form-control" name="website" value="{{ $product[0]->website_link }}" placeholder="http:">
				          </div>
				          @if ($errors->has('website'))
                            <span class="help-block">
                              <p>{{ $errors->first('website') }}</p>
                            </span>
                          @endif
				       </div>
				       <div class="form-group">
		                  <div class="form-details">
		                     <label for="reference">
		                        <h4>Reference</h4>
		                     </label>
		                     <input type="text" class="form-control" name="reference" value="{{ $product[0]->reference }}" placeholder="Enter Reference">
		                  </div>
		               </div>
		               <div class="form-group">
		                  <div class="form-details">
		                     <label for="color">
		                        <h4>Color</h4>
		                     </label>
		                     <input type="text" class="form-control" name="color" value="{{ $product[0]->color }}" placeholder="Enter Color">
		                  </div>
		               </div>
		               <div class="form-group">
		                  <div class="form-details">
		                     <label for="size">
		                        <h4>Size</h4>
		                     </label>
		                     <input type="text" class="form-control" name="size" value="{{ $product[0]->size }}" placeholder="Enter Product Size">
		                  </div>
		               </div>
		               <div class="form-group">
		                  <div class="form-details">
		                     <label for="image">
		                        <h4>Upload Image</h4>
		                     </label>
		                     <input type="file" class="form-control" name="product_img" value="">
		                  </div>
		                  @if($errors->has('product_img'))
                            <span class="help-block">
                              <p>{{ $errors->first('product_img') }}</p>
                            </span>
                          @endif
                          @if($product[0]->product_img)
	                          <div class="product-img">
	                      			<img src="{{ asset('public/assets/images/upload/product/'.$product[0]->product_img ) }}">
	                          </div>
                          @endif
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