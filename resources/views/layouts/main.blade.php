<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{Vite::asset('resources/img/favicon.ico')}}">

    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous'/>

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Vite DC Comics @yield('title')</title>
</head>
<body>

    @include('partials.header')

    @include('partials.jumbo')

    @yield('content')

    @include('partials.footer')

</body>
</html>
