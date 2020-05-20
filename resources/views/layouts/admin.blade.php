<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="language" content="bulgarian">
        <meta http-equiv="Content-Language" content="bg">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index,follow">

        <title>Admin Panel</title>

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

        @yield('nav', View::make('nav.admin.index'))

        @yield('content')

        @yield('footer', View::make('footer.admin.index'))

        @section('javascript')
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        @show

    </body>
</html>
