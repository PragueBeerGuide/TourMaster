<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Books Project</title>

</head>
<body>

    <div class="main-content">
        @if($errors->all())
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        @endif

        @yield('content')

    </div>

</body>
</html>