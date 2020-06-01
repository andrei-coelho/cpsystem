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
                        <div class="row">
                            @if(session('success'))
                                <div class="col-12 pt-2">
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="col-12 pt-2">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                </div>
                            @endif
                        </div>
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
