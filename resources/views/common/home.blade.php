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
        <header class="site-header">
            <div class="container">
                <div class="headermain clearfix">
                    <div class="site-logo"> <a href="{{ URL('') }}"><img src="{{ asset('public/assets/images/logo.png') }}" alt=""> </a></div>
                </div>
            </div>
        </header>
        <main>
    <section class="welcomesec text-center">
        <div class="bannertext">
            <div class="container">
                <h1>Welcome</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="import-export">
                <div class="container">
                    <div class="row landing-importexport">
                        <div class="col-md-6">
                            <div class="singlebox">
                                <h3>Import</h3>
                                <p>Given the situation in Madagascar, some people do not have the opportunity to make their purchase directly online on foreign merchant sites. </p>
                                @if (Auth::check())
                                    <a href="{{ url('buyer/dashboard') }}" class="btn btn-transparent"> <i class="fa fa-share-square-o"></i> Import </a>
                                @else
                                    <a href="{{ url('buyer/login') }}" class="btn btn-transparent"> <i class="fa fa-share-square-o"></i> Import </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="singlebox">
                                <h3>Export</h3>
                                <p> We would like to offer opportunity for Malagasy craftsman, startuper to display, to sell their product on our platform in order for them to reach worldwide buyer.</p>
                                <a href="{{ url('login') }}" class="btn btn-transparent"><i class="fa fa-upload"></i> Export </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
</main>
    </body>
</html>