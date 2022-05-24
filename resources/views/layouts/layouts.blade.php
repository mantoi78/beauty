<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TODO Favicon -->
    <link rel="icon" type="image/png" href="{{ url('assets/images/favicon_beauty_3.png') }}">

    {{--  Todo --}}
    <title>Find Beauty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    {{--        <link rel="stylesheet" href="{{ url('css/style.css') }}">--}}
    <link rel="stylesheet" href="{{ url('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/iconplugins.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/theme-dark.css') }}">
</head>
<body>
@component('components.header')
@endcomponent

@yield('content')

@component('components.footer')
@endcomponent

<!-- Links of JS files -->
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/plugins.js') }}"></script>
<script src="{{ url('assets/js/custom.js') }}"></script>
</body>
</html>
