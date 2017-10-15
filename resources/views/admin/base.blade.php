<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin_layout.css') }}" rel="stylesheet">
</head>
<body class="skin-black-light sidebar-mini">
{{--Main Wrapper--}}
<div id="app" class="wrapper">
    <router-view class="view one"></router-view>
</div>

<!-- Scripts -->
<script src="{{ asset('js/admin_layout.js') }}"></script>
</body>
</html>
