<!DOCTYPE html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <title>{{ __('layout.nav.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @if (config('app.env') == 'production')
    @include('layouts.deps._gtm_head')
    @endif

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    @if (config('app.env') == 'production')
    @include('layouts.deps._gtm_body')
    @endif
    <div class="flex-grow-1">
        @include('layouts._nav')
        <main class="my-4">
            <div class="container mb-3">
                @include('flash::message')
                @yield('content')
            </div>
        </main>
    </div>
    @include('layouts._footer')

</body>

</html>
