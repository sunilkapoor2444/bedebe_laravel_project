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
    <header class="site-header inner-pages">
        <div class="container">
            <div class="headermain clearfix">
                <div class="site-logo"> <a href="{{ URL('') }}"><img src="{{ asset('public/assets/images/logo.png') }}" alt=""> </a></div>
            </div>
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
                        @yield('content')
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