@extends('layouts.master')

@section('content')
	
  <div class="content-box my-bedebe">
      <div class="row">
          <div class="col-md-3">
             @include('buyer.bedebeShop.sidebar-menu')
          </div>
          <div class="col-md-9">
              <div class="my-bedeeb">
                <img src="{{ asset('public/assets/images/loft-office.jpg') }}" alt="">

                <h3>My Bedebe</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>

                 <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
          </div>
      </div>
  </div>
                    
@endsection