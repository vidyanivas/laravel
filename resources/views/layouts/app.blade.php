<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="rating" content="general">
    <meta name="robots" content="@yield('robots')">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:type" content="website">
    <meta name="description" property="og:description" content="@yield('description')">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image')">
    <meta name="twitter:url" content="{{ request()->url() }}">
    <meta name="token" content="{{ csrf_token() }}">
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('i/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('i/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('i/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('i/icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('i/icons/safari-pinned-tab.svg') }}" color="#336699">
    <link rel="shortcut icon" href="{{ asset('i/icons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#333">
    <meta name="msapplication-config" content="{{ asset('i/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#333">
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('dist/css/app.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
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
    @hasSection('canonical')<link rel="canonical" href="@yield('canonical')">@endif
    <script src="{{ asset(mix('dist/js/app.js')) }}"></script>
    @if (env('APP_ENV') !== 'local' && config('settings.analytics_id') !== null)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('settings.analytics_id') }}"></script>
        <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', '{{ config('settings.analytics_id') }}', {'anonymize_ip': true});</script>
    @endif
</head>
<body>
<main>
    
@include('partials.app.nav')
	<section class="tp-hero-2-area p-relative" data-background="{{ asset('assets/img/hero/hero-2/hero-bg.png') }}">
		<div class="tp-hero-2-wrapper p-relative">
		   <div class="container">
			  <div class="row align-items-center justify-content-center">
				 <div class="col-xl-12">
					<div class="tp-hero-2-shape">
					   <img class="shape-1 d-none d-lg-block" src="{{ asset('assets/img/hero/hero-2/Angular.png') }}" alt="">
					   <img class="shape-2 d-none d-lg-block" src="{{ asset('assets/img/hero/hero-2/shape-2.png') }}" alt="">
					   <img class="shape-3 d-none d-lg-block" src="{{ asset('assets/img/hero/hero-2/shape-3.png') }}" alt="">
					</div>
					<div class="tp-hero-2-content text-center pt-200">
					   <div class="tp-hero-2-title-wrapper fadeUp">
						  <h3 class="tp-hero-2-title">Business Success <svg width="258" height="5" viewBox="0 0 258 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							 <path d="M0.466882 4.22307C85.7551 2.55338 170.554 2.288 255.781 4.99709C258.76 5.09661 258.719 2.60867 255.781 2.48703C171.105 -0.962917 84.9592 -1.06243 0.466882 3.70336C-0.145381 3.73653 -0.16579 4.23412 0.466882 4.22307Z" fill="currentColor"/>
							 </svg> <br> With <span>Technology</span></h3>
					   </div>
					   <div class="tp-hero-2-btn fadeUp">
						  <a class="tp-btn" href="contact.html">Let's Talk</a>
					   </div>
					</div>
					<div class="tp-hero-2-side-text">
					   <div class="tp-hero-2-mail">
						  <a href="#"><i class="fa-light fa-envelope"></i> <span class="__cf_email__" data-cfemail="">contactus@synalgo.com</span></a>
					   </div>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
		<div class="tp-hero-2-bottom p-relative d-none d-md-block">
		   <div class="hero-active-2">
			  <div class="swiper-wrapper">
				 <div class="swiper-slide">
					<h3 class="tp-hero-2-bottom-title">technology</h3>
				 </div>
				 <div class="swiper-slide">
					<h3 class="tp-hero-2-bottom-title">architecture</h3>
				 </div>
				 <div class="swiper-slide">
					<h3 class="tp-hero-2-bottom-title">Computer</h3>
				 </div>
			  </div>
		   </div>
		   <div class="tp-hero-2-nav d-none d-xl-block">
			  <button type="button" class="hero-button-prev-1">prev</button>
			  <button type="button" class="hero-button-next-1">Next</button>
		   </div>
		</div>
	</section>
@yield('content')
</main>
@include('partials.app.footer')
@hasSection('scripts')@yield('scripts')@endif

