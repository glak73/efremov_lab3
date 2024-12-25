<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="header">
        <a href="{{route('variants')}}">основные варианты дебюта</a>
        <a href="{{route('index')}}">главная страница</a>
        <a href="{{route('advantages')}}">преимущества дебюта</a>
    </div>
    @yield('content')
</body>
</html>
