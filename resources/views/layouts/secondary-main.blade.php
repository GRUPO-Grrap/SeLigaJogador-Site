<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

        <title>@yield('title')</title>

        {{-- google fonts --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
         {{-- google icons--}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    
        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        {{-- cloudflare --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        {{-- css --}}
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/card.css">
        <link rel="stylesheet" href="/css/card_category.css">
        
    </head>
    </head>
    <body class="antialiased">

        @yield('contentSecondary')

        <script src="/js/scripts.js"></script>
        {{-- bootstrap JS--}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" 
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" 
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </body>
</html>
