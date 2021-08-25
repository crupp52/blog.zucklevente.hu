<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="font-serif">
    @include('layouts.components.header')

    <div class="w-full mb-10">
        <div class="w-2/3 mx-auto">
            @yield('content')
        </div>
    </div>
    <div class="w-full text-center p-4">
        <p><a class="font-bold text-green-500 hover:underline" href="https://zucklevente.hu/" target="_blank">Zuck Levente</a> © {{ now()->year }}</p>
    </div>
</div>
</body>
</html>
