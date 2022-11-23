@extends('layouts.auth_master')

@section('content')
<div class="col-md-9">
 <div class="content-box">
   <div class="log-form register-form">
         <h3>Register in</h3>
         @if (Session::has('success'))
             <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
         @endif
        <form class="form-signin" method="POST" action="{{ route('register') }}">
         <div class="row">
           {{ csrf_field() }}
           <div class="col-md-6 form-group">
             <span><i class="fa fa-user"></i></span>
             <input type="text" class="form-control" name="name" value="" placeholder="Name">
             @if ($errors->has('name'))
               <span class="help-block">
                 <p>{{ $errors->first('name') }}</p>
               </span>
             @endif
           </div>
           <div class="col-md-6 form-group">
               <span><i class="fa fa-user"></i></span>
             <input type="text" class="form-control" value="{{ old('surname') }}" name="surname" placeholder="Surname">
             @if ($errors->has('surname'))
               <span class="help-block">
                 <p>{{ $errors->first('surname') }}</p>
               </span>
             @endif
           </div>
            <div class="col-md-6 form-group">
               <span><i class="fa fa-map-marker"></i></span>
             <input type="text" class="form-control" value="{{ old('address1') }}" name="address1" placeholder="Address line 1">
             @if ($errors->has('address1'))
               <span class="help-block">
                 <p>{{ $errors->first('address1') }}</p>
               </span>
             @endif
           </div>                                   
            <div class="col-md-6 form-group">
               <span><i class="fa fa-map-marker"></i></span>
             <input type="address" class="form-control" name="address2" value="" placeholder="Address line 2">
             @if ($errors->has('address2'))
               <span class="help-block">
                 <p>{{ $errors->first('address2') }}</p>
               </span>
             @endif 
           </div>
           <div class="col-md-6 form-group">
               <span><i class="fa fa-building-o"></i></span>
             <input type="city" class="form-control" name="city" value="" placeholder="City">
             @if ($errors->has('city'))
               <span class="help-block">
                 <p>{{ $errors->first('city') }}</p>
               </span>
             @endif
           </div>
            <div class="col-md-6 form-group">
               <span><i class="fa fa-globe"></i></span>
             <input type="text" class="form-control" name="region" value="" placeholder="Region (browse)">
             @if ($errors->has('region'))
               <span class="help-block">
                 <p>{{ $errors->first('region') }}</p>
               </span>
             @endif
           </div>
           <div class="col-md-6 form-group">
               <span><i class="fa fa-phone"></i></span>
             <input type="text" class="form-control" name="phone" value=""  placeholder="Phone Number">
             @if ($errors->has('phone'))
               <span class="help-block">
                 <p>{{ $errors->first('phone') }}</p>
               </span>
             @endif
           </div>
           <div class="col-md-6 form-group">
               <span><i class="fa fa-envelope-o"></i></span>
             <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Adress">
             @if ($errors->has('email'))
                 <span class="help-block">
                   <p>{{ $errors->first('email') }}</p>
                 </span>
             @endif
           </div>
            <div class="col-md-6 form-group">
               <span><i class="fa fa-key"></i></span>
             <input type="password" class="form-control" name="password" value="" placeholder="Password">
             @if ($errors->has('password'))
               <span class="help-block">
                 <p>{{ $errors->first('password') }}</p>
               </span>
             @endif
           </div> 
            <div class="col-md-6 form-group">
               <span><i class="fa fa-key"></i></span>
             <input type="password" class="form-control" name="password_confirmation" value="" placeholder="Confirm Password">
           </div>
           <div class="col-md-6 form-group">
               <ul>
                  <li>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="supplier" value="supplier">
                        <label class="form-check-label" for="supplier">
                        Supplier
                        </label>
                     </div>
                  </li>
                  <li>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="exporter" value="exporter">
                        <label class="form-check-label" for="exporter">
                        Exporter
                        </label>
                     </div>
                  </li>
                  <!--<li>
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="buyer" value="buyer">
                        <label class="form-check-label" for="buyer">
                        Buyer
                        </label>
                     </div>
                  </li>-->
               </ul>
               @if($errors->has('type'))
                  <span class="help-block">
                     <p>{{ $errors->first('type') }}</p>
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
            <div class="col-md-12 form-group form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="newsletters" value="1">  Accept newsletter by email
             </label>
           </div>
           <button type="submit" class="btn btn-primary">Register</button>
            </div>
         </form>
         <div class="card-footer">
            <div class="d-flex justify-content-center links">
               <a href="{{ URL('login') }}">Log in</a>
            </div>
         </div>
     </div>
 </div>
</div>
@endsection