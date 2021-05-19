<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Loherb Villa')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="alternate" hreflang="{{ app()->getLocale() === 'en' ? 'zh' : 'en' }}" href="{{ url(transUrl(Request::path())) }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#084137">

    @if(app()->getLocale() === 'zh')
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Noto+Serif+TC&display=swap" rel="stylesheet">
    @endif

    @if(app()->getLocale() === 'en')
        <link rel="stylesheet" href="https://use.typekit.net/mza6wie.css">
    @else
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;800&family=Noto+Serif+TC:wght@600&display=swap" rel="stylesheet">
    @endif
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preload" href="https://villa.loherb.com.tw/fonts/transat_bold-webfont.woff" as="font">
    @yield('head')
    <meta name="format-detection" content="telephone=no">
    @stack('headspace')
</head>

<body class="type-b1 leading-normal {{ $bodyClass ?? '' }}">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<div id="app">
    @yield('content')
    @include('front.partials.footer')
    @include('front.partials.navbar')
</div>
@production
<div class="fb-customerchat"
     page_id="{{ config('facebook.page_id') }}" theme_color="#084137">
</div>
@endproduction
@yield('bodyscripts')
<script src="{{ mix("js/app.js") }}"></script>
@production
@include('front.partials.facebook-sdk')
@endproduction
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', '{{ config('services.google.analytics') }}', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
