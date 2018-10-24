<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <META NAME="ROBOTS"
          CONTENT="NOINDEX, NOFOLLOW">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Loherb Villa')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://use.typekit.net/mza6wie.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @yield('head')
</head>

<body class="body-text leading-normal {{ $bodyClass ?? '' }}">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<div id="app">
    @yield('content')
    @include('front.partials.footer')
    @include('front.partials.navbar')
</div>
<script src="{{ mix("js/app.js") }}"></script>
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>