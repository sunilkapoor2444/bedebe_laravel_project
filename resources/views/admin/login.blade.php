<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bedebe Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/css/fontastic.css') }}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ URL::asset('public/admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
  </head>
  <body>
	<div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner login-form">
              <div class="logo text-uppercase text-left"><strong class="text-primary">Admin Panel</strong></div>

            
       <h2 class="text-left">Welcome, please sign in</h2>
            <form id="login-form text-left" method="POST" action="{{ route('admin.login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="login-username" class="label-custom">User Name<span>*</span></label>
                <input id="login-username" type="email" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                      <span class="help-block">
                          <p>{{ $errors->first('email') }}</p>
                      </span>
                  @endif
              </div>
              <div class="form-group">
                <label for="login-password" class="label-custom">Password<span>*</span></label>
                <input id="password" type="password" name="password" value=""required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <p>{{ $errors->first('password') }}</p>
                    </span>
                @endif
              </div>
              <input type="submit" class="btn btn-primary submit-field" value="Login">
            </form>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://www.mandywebdesign.com/" class="external">Mandy Web Design</a></p>
          </div>
        </div>
      </div>
    </div>
<!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="{{ URL::asset('public/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ URL::asset('public/admin/js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ URL::asset('public/admin/js/front.js') }}"></script>
  </body>
</html>
    