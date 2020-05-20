<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="bulgarian">
        <meta http-equiv="Content-Language" content="bg">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index,follow">

        <title>@yield('title', config('app.name', 'Laravel'))</title>

        <meta name="title" content="@yield('title', config('app.name', 'Laravel'))">
        <meta name="description" content="@yield('description', config('app.description', 'Laravel'))">
        <meta name="keywords" content="@yield('keywords', config('app.keywords', 'Laravel'))">
        <meta name="news_keywords" content="Новини Пловдив, Пловдив, Пловдив новини, Марица.бг, Марица, novini Plovdiv, Plovdiv, Plovdiv, marica.bg, marica">
        <meta name="author" content="Вестник Марица - Издателска Къща Марица ЕООД.">
        <meta name="rating" content="general">
        <meta name="distribution" content="global">
        <meta name="copyright" content="2009 - 2017 © Вестник Марица - Издателска Къща Марица ЕООД. Всички права запазени.">
        <meta name="contact" content="news@marica.bg" />

        <meta property="fb:app_id" content="111111111111111111">
        <meta property="fb:pages" content="111111111111111" />
        <meta property="og:type" content="website">
        <meta property="og:title" content="Новини Пловдив | Новините от Пловдив и региона">
        <meta property="og:description" content="Новини Пловдив. Новините от Пловдив и региона - спорт, политика, бизнес, шоу, култура, крими и други.">
        <meta property="og:url" content="https://www.marica.bg">
        <meta property="og:image" content="https://www.marica.bg/img/marica-novini-ot-grada-i-regiona.jpg">
        <meta property="og:image:secure_url" content="https://www.marica.bg/img/marica-novini-ot-grada-i-regiona.jpg" />
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:site_name" content="marica.bg">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:updated_time" content="2020-04-24T00:30:25+03:00">
        <meta name="thumbnail" content="https://www.marica.bg/img/marica-novini-ot-grada-i-regiona.jpg" />

        <meta name="twitter:creator" content="@marica_bg" />
        <meta name="twitter:site" content="@marica_bg">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="Новини Пловдив. Новините от Пловдив и региона - спорт, политика, бизнес, шоу, култура, крими и други.">
        <meta name="twitter:title" content="Новини Пловдив | Новините от Пловдив и региона">
        <meta name="twitter:image" content="https://www.marica.bg/img/marica-novini-ot-grada-i-regiona.jpg">

        <link rel="canonical" href="{{URL::current()}}">
        <link rel="alternate" hreflang="x-default" href="{{URL::current()}}">


        <link rel="icon" href="/img/favicons/favicon-16.png?v=2" sizes="16x16">
        <link rel="icon" href="/img/favicons/favicon-32.png?v=2" sizes="32x32">
        <link rel="icon" href="/img/favicons/favicon-57.png?v=2" sizes="57x57">
        <link rel="icon" href="/img/favicons/favicon-76.png?v=2" sizes="76x76">
        <link rel="icon" href="/img/favicons/favicon-96.png?v=2" sizes="96x96">
        <link rel="icon" href="/img/favicons/favicon-128.png?v=2" sizes="128x128">
        <link rel="icon" href="/img/favicons/favicon-192.png?v=2" sizes="192x192">
        <link rel="icon" href="/img/favicons/favicon-228.png?v=2" sizes="228x228">

        <link rel="apple-touch-icon" href="/img/favicons/favicon-120.png?v=2" sizes="120x120">
        <link rel="apple-touch-icon" href="/img/favicons/favicon-152.png?v=2" sizes="152x152">
        <link rel="apple-touch-icon" href="/img/favicons/favicon-167.png?v=2" sizes="167x167">
        <link rel="apple-touch-icon" href="/img/favicons/favicon-180.png?v=2" sizes="180x180">

        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="/img/favicons/favicon-144.png?v=2">

        <link rel="shortcut icon" href="/img/favicons/favicon-196.png?v=2" sizes="196x196">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @section('css')
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @show
    </head>
    <body>

        @yield('nav', View::make('nav.index'))

        @yield('content')

        @yield('footer', View::make('footer.index'))

        @section('javascript')
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @show

    </body>
</html>
