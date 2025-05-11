<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')  
    

</body>
</html> 