<!DOCTYPE html>
<html lang="ja">
<head>
    {{--    Todo --}}
    <title>サイトの名前を入れる</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

{{--        <link rel="stylesheet" href="{{ url('css/style.css') }}">--}}
    <link rel="stylesheet" href="{{ url('css/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/iconplugins.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('css/assets/css/theme-dark.css') }}">

</head>


<body>
@component('components.header')
@endcomponent
{{--<main>--}}
{{--    <div class="container">--}}
{{--        @yield('content')--}}
{{--    </div>--}}
{{--</main>--}}
@yield('content')

@component('components.footer')
@endcomponent

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Links of JS files -->
<script src="{{ url('js/assets/js/jquery.min.js') }}"></script>
<script src="{{ url('js/assets/js/plugins.js') }}"></script>
<script src="{{ url('js/assets/js/custom.js') }}"></script>
</body>
</html>
