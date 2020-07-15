<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics - Uncomment in Prod-->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172777545-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-172777545-1');
    </script> -->


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="LDM Alta Voce">
    <link rel="apple-touch-icon" sizes="512x512" href="/img/icon512.png">
    <link rel="icon" sizes="192x192" href="/img/icon192.png">

    <meta property="og:title" 
  content="Il Libro di Mormon Alta Voce" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Il Libro di Mormon Alta Voce') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet"> 
	
	<!--Audio Player-->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/greghub/green-audio-player/dist/css/green-audio-player.min.css">
	<script src="https://cdn.jsdelivr.net/gh/greghub/green-audio-player/dist/js/green-audio-player.min.js"></script>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav-menu></nav-menu>

        <main>
            <h1>Il Libro di Mormon</h1>
            @yield('content')
        </main>
    </div>
    <footer>
        <small>
            <p>Made with love by Italian members of<br>The Church of Jesus Christ of Latter-day&nbsp;Saints.</p>
            <p>This is not an official, sponsored product of the Church, rather it is created by Church members in an effort to provide an audio version of the Book of Mormon in&nbsp;Italian.</p>
        </small>
    </footer>
</body>
</html>

<?php /* once live, generate passport keys - https://laravel.com/docs/5.7/passport#consuming-your-api-with-javascript */ ?>
