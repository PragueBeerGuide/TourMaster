<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tour Master</title>
    </head>
    <body class="antialiased" bg-slate-800>
        
       <div id='root'></div>

       @viteReactRefresh
       @vite('resources/js/src/main.jsx')

    </body>
</html>
