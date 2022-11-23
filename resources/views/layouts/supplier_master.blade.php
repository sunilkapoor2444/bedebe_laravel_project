<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom-style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom-responsive-style.css') }}">
    <title>{{ config('app.name', 'Bedebe') }}</title> 
</head>

<body>
    @php $user = auth()->user(); @endphp
    <header class="site-header inner-pages">
      <div class="container">
         <nav class="bedebe-nav navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
            <div class="site-logo"> <a href="{{ URL('') }}"><img src="{{ asset('public/assets/images/logo.png') }}" alt=""> </a></div>
            </div>
            @guest
            @else
            <ul class="nav navbar-right top-nav">
                <li><div class="im-plo"><h2>Export Plateform</h2></div></li>         
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('public/assets/images/upload/'.Auth::user()->avatar ) }}" class="header-avatar" alt="avatar"> {{ $user->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                        	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @endguest
        </nav>
    </div>
    </header>
    <section class="bedede-inner">
        <div class="container">
            <div class="inner-dashboard">
                <div class="row">
                    <div class="col-md-3">
                        <div class="advertisement">
                            <img src="{{ asset('public/assets/images/Z1uzlNG.jpg') }}">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <ul class="navbar-nav mr-auto">
                                        <li class="nav-item active">
                                          <a class="nav-link" href="{{ URL('supplier/dashboard') }}">Hello</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{ URL('supplier/how-work') }}">How it Work</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{ URL('supplier/my-bedebe') }}">My Bedede</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="#">Retailers</a>
                                        </li>
                                  </ul>
                            </div>
                        </nav>
                        @yield('content')
                    </div>
                </div>
            </div>
       </div>
    </section>
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-payment"> 
                            <h3>Payment</h3>
                            <ul class="pay">
                                <li><img src="{{ asset('public/assets/images/paymentimg.png') }}" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-left">
                            <h3>Useful Links</h3>
                            <ul class="menu">
                                <li><a href="#">Term & Condition</a></li>
                                <li><a href="#">Legal notice</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Follow Us</h3>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <div class="footer-bottom">
             <div class="container">
                <div class="copyrighttext">@2019 Bedebe, All rights reserved</div>
             </div>
         </div>
    </footer>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/custom-script.js') }}"></script>
	<script src="{{ asset('public/assets/js/buyer-custom.js') }}"></script>
	<script src="{{ asset('public/assets/js/validate.js') }}"></script>
</body>

</html>