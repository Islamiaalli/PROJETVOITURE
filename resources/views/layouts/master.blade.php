<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{!! asset('/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/datatables.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('/css/all.css') !!}">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts/navbar')

    <div class="container" style="min-height: 55vh; margin-top: 5%">
        @yield('content')
    </div>
    @include('layouts.footer')
    <script src="{!! asset("js/jquery-3.7.1.min.js")!!}"></script>
    <script src="{!! asset("/js/bootstrap.js") !!}"></script>
    <script src="{!! asset("/js/datatables.min.js") !!}"></script>
    <script src="{!! asset("/js/all.js") !!}"></script>
    @stack('js')
</body>
</html>