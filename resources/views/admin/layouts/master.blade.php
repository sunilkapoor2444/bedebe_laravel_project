<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bedebe Dashboard</title>
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
    @php $user = auth()->user(); @endphp
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center"><img src="{{ asset('public/assets/images/upload/'.Auth::user()->avatar ) }}" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5 text-uppercase">{{ $user->name }}</h2><span class="text-uppercase">Web Developer</span>
          </div>
          <div class="sidenav-header-logo"><a href="{{ url('/admin/dashboard') }}" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="{{ url('/admin/dashboard') }}"> <i class="icon-home"></i><span>Home</span></a></li>
          </ul>
        </div>
        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list1" data-toggle="collapse" aria-expanded="false"><i class="fa fa-user"></i><span>Buyer</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                <ul id="pages-nav-list1" class="collapse list-unstyled">
                  <li> <a href="{{ url('/admin/buyer-all-order') }}">All Order</a></li>
                  <li> <a href="{{ url('/admin/all-buyer') }}">All Buyer</a></li>
                </ul>
            </li>
           <li> <a href="#pages-nav-list2" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Export</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
                <ul id="pages-nav-list2" class="collapse list-unstyled">
                  <li> <a href="#">All Exporter</a></li>
                </ul>
            </li>
            <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
            <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
                <div class="badge badge-info">Special</div></a></li>
          </ul>
        </div>
        <div class="admin-menu">
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Dropdown</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li> <a href="forms.html">Page 1</a></li>
                <li> <a href="#">Page 2</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page home-page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="{{ url('/admin/dashboard') }}" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Bedebe </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <li class="nav-item">
                    <a class="nav-link logout" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout<i class="fa fa-sign-out"></i></a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    @yield('content')
    <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Mandy Web Design &copy; 2019-2021</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://www.mandywebdesign.com/" class="external">Many Web Design</a></p>
            </div>
          </div>
        </div>
      </footer>
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