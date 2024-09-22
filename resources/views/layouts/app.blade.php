<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>BRZL</title>
        <!-- Favicon -->
        <link rel="icon" href="img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="css/argon.css?v=1.1.0" type="text/css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        <!--@vite(['resources/css/app.css', 'resources/js/app.js'])-->
    </head>
    <body class="bg-default">

        @include('layouts.frontend.common.header')

        <div class="main-content">

            @yield('home')

        </div>    

        @include('layouts.frontend.common.footer')

        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="vendor/jquery/dist/jquery.min.js"></script>
        <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/js-cookie/js.cookie.js"></script>
        <script src="vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>
        <!-- Argon JS -->
        <script src="js/argon.js?v=1.1.0"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="js/demo.min.js"></script>
    </body>
</html>
