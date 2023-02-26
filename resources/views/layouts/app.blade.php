<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comic</title>
    @vite('resources/js/app.js')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('partials.header')
    @include('partials.jumbotron')
    @yield('content')
    @include('partials.footer')
</body>

</html>

<style>
    
</style>