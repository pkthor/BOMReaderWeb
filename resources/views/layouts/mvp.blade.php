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
  content="Libro di Mormon Alta Voce: @yield('title-info')" />
  <meta property="og:description" content="Il Libro di Mormon letto dai membri italiani della Chiesa di Gesù Cristo dei Santi degli Ultimi Giorni." />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Libro di Mormon Alta Voce: @yield('title-info')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet"> 



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav-menu></nav-menu>

        <main>
            <h1>Libro di Mormon</h1>
            @yield('content')
        </main>
    </div>
    <footer>
        <small>
            <p>Realizzato con amore da membri italiani della<br>Chiesa di Gesù Cristo dei Santi degli Ultimi&nbsp;Giorni.</p>
            <p>Questo non è un prodotto ufficiale sponsorizzato della Chiesa, ma è stato creato dai membri della Chiesa nel tentativo di fornire una versione audio del Libro di Mormon in&nbsp;italiano</p>
        </small>
    </footer>
</body>
</html>

<?php /* once live, generate passport keys - https://laravel.com/docs/5.7/passport#consuming-your-api-with-javascript */ ?>
