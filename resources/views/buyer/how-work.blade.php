@extends('layouts.master')

@section('content')

  <div class="content-box">
    <h3>How It Work</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
     
    <div class="row shop-cont">
        <div class="col-md-6">
            <div class="singlebox shop">
                <h3>Shop by bedebe</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="{{ URL('buyer/bedebe-shop') }}" class="btn btn-transparent">Shop Now</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="singlebox shop">
                <h3>Shop direct</h3>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="{{ URL('buyer/direct-shop') }}" class="btn btn-transparent">Shop Now</a>
            </div>
        </div>
    </div>
  </div> 
                  
@endsection