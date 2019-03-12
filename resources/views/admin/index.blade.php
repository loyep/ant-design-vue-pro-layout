<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <title>{{ $config['name'] }}</title>
    <link rel="icon" href="{{ asset('assets/admin/images/logo.png') }}" type="image/x-icon">
    <link href="{{ mix('admin.css', 'assets/admin') }}" rel="stylesheet">
    <script>
      window.config = @json($config)
    </script>
</head>
<body>
<div id="app"></div>
<script src="{{ mix('admin.js', 'assets/admin')}}" type="text/javascript"></script>
</body>
</html>