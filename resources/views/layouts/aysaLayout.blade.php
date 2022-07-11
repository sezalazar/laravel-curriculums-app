<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="author" content="Sebastián Zalazar" />
    <link rel="icon" href="https://www.aysa.com.ar/media-library/imagenes_inicio/favicon.ico" />

    <title>AySA - Carga de CV</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/bootstrap-3.3.7.min.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/v4-shims.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('/css/Roboto-Condensed-300-400-700-700i.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('/css/Roboto-300-400-500-700.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/00000000-0000-0000-0000-000000000002.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('/css/fromPage.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('/iconsax/style.css') }}">


    @yield('app-styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/sgz.css') }}">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    @include('layouts.auth-header')
    @include('layouts.aysaNav')
      <!-- END_MENU -->
        @include('sweetalert::alert')
        @yield('aysa-content')



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.17/dist/sweetalert2.all.min.js"></script>

        <!-- JavaScript Required to show Logout list-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>



        @yield('app-scripts')



</body>
</html>
