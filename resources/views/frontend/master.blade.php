<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Style Css -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <!-- Nabvar Start -->
        @include('frontend.includes.navbar')
        <!--./Nabvar End -->

        <!-- Main Body Start-->
        @yield('content')
        <!--./Main Body End -->

        <!-- Footer Start -->
        @include('frontend.includes.footer')
        <!--./Footer End -->
    </div>

    <!-- Main Js -->
    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}">
    </script>
    {{-- 
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

</body>

</html>
