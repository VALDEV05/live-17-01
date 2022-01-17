<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Real estete @yield('page-title', 'Welcome')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{'css/app.css'}}">

        <!-- Script -->
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
        <div id="site_header">
            @include('partials.header')
        </div>
        <!-- /#site_header -->
        <div id="site_main">
            @yield('content')
        </div>
        <!-- /#site_main -->
        <div id="site_footer">
            @include('partials.footer')
        </div>
        <!-- /#site_footer -->
    </body>
</html>
