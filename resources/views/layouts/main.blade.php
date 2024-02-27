<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <title>@yield('title', 'Shortened Service: home')</title>
    </head>

    <body>
        <div class="wrapper">
            @include('includes.header')
            @include('includes.errors')

            @yield('content')

            <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}">
            @include('includes.footer')
        </div>
    </body>

</html>
