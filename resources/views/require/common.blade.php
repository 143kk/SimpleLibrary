<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/my.css">
    <title>{{$title}} - {{config('resources.title')}}</title>
</head>
<body>
@include('require/nav')
<div class="container" id="app">
    <div id="my">
        @yield('content')
    </div>
    @yield('some')
</div>
</body>
</html>
