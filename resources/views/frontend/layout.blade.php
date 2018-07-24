<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <!-- Responsive meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1.0, user-scalable=no">

    <title>OpenSea Demo</title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png"> -->

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <!-- <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png"> -->

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <!-- <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png"> -->
    <!-- <meta name="msapplication-TileColor" content="#2F3BA2"> -->

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <!-- Theme styles -->
    @yield('css')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="frontend/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<!-- Main -->
<div class="main">
    @include('frontend.common.header')

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>
    <!-- /.content -->

    <!-- Get in touch -->
    <div class="get-in-touch">
        @include('frontend.common.get-in-touch')

    </div>
    <!-- /.get-in-touch -->


    <!-- Footer -->
    @include('frontend.common.footer')
    <!-- /.footer -->
</div>
<!-- /.main -->



<!-- Content -->
@yield('inline-js')
</body>
</html>