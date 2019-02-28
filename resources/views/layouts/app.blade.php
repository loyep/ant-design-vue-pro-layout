<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('page_title', Grace::title())</title>
    <link href="{{ mix('css/app.css', 'assets/app') }}" rel="stylesheet">
</head>
<body>
@include('components.search')
@include('components.footer')
<script src="{{ mix('js/app.js', 'assets/app') }}" type="text/javascript"></script>
</body>
</html>
