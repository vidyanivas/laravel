<!doctype html>
<html class="no-js" lang="zxx">
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>@yield('title')</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/splide.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/nouislider.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
   </head>
   <body>

    <!-- Include the Header -->
    @include('partials.header')

    <!-- Main Content Section -->
    <div class="container">
        @yield('content') <!-- Content specific to each page -->
    </div>

    <!-- Include the Footer -->
    @include('partials.footer')


