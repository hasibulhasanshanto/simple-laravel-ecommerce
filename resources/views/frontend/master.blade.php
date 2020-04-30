<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Lara Ecommerce')</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Style Css -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            padding-top: 4.5rem;
            min-height: 1000px;
            position: relative;
        }

        .navbar {
            position: fixed;
            width: 100%;
            z-index: 1000000;
            top: 0;
        }

        .footer-bottom {
            position: absolute;
            left: 0;
            bottom: -100px;
            width: 100%;
            color: white;
            text-align: center;
        }

    </style>

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

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        $(document).ready(function () {
            var $submenu = $('.submenu');
            var $mainmenu = $('.mainmenu');
            $submenu.hide();
            $submenu.first().delay(400).slideDown(700);
            $submenu.on('click', 'li', function () {
                $submenu.siblings().find('li').removeClass('chosen');
                $(this).addClass('chosen');
            });
            $mainmenu.on('click', 'li', function () {
                $(this).next('.submenu').slideToggle().siblings('.submenu').slideUp();
            });
            // $mainmenu.children('li:last-child').on('click', function () {
            //     $mainmenu.fadeOut().delay(500).fadeIn();
            // }); 
        });

    </script>

</body>

</html>
