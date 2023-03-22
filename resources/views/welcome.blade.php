<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TourMasters</title>
        
    </head>
    <body class="antialiased">
        
       <div id='root'></div>

       @viteReactRefresh
       @vite('resources/js/src/main.jsx')

    <a
        href="{{ route('login') }}"
        class="login"
    >
        Log in
    </a>
    <a
        href="{{ route('register') }}"
        class="register"
    >
        Register
    </a>
    </body>
</html>
