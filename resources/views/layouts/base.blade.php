<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @auth
        @include('layouts.header')
    @endauth
    @auth
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-1 bg-primary h-100 position-fixed" style="z-index: 9999999;">
                    @include('layouts.leftmenu')
                </div>
                <div class="col-1"></div>
                <div class="col-11">
                    <div class="container-fluid">
                        <div class="row">@yield('content')</div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @yield('content')
    @endauth

    @auth
        @include('layouts.footer')
    @endauth

    <script src="/js/jquery.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>
</html>
