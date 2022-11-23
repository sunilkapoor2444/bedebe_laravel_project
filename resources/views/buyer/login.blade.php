@extends('layouts.auth_master')

@section('content')
    <div class="col-md-9">
      <div class="content-box">
        <div class="log-form">
            <h3>Sign in</h3>
            @if (Session::has('unsuccess'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('unsuccess') }}</p>
            @endif
           <form  method="POST" action="{{ route('buyer.login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <span><i class="fa fa-envelope-o"></i></span>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <p>{{ $errors->first('email') }}</p>
                    </span>
                @endif
              </div>
              <div class="form-group">
                  <span><i class="fa fa-key"></i></span>
                <input type="password" class="form-control" name="password" value=""placeholder="Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <p>{{ $errors->first('password') }}</p>
                    </span>
                @endif
              </div>
              <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <div class="card-footer">
               <div class="d-flex justify-content-center links">
                  Don't have an account?<a href="{{ URL('buyer/register') }}">Sign Up</a>
               </div>
               <div class="d-flex justify-content-center">
                  <a href="{{ URL('password/reset') }}">Forgot your password?</a>
               </div>
            </div>
        </div>
      </div>  
    </div>
@endsection