<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->

    <title>Home</title>
    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset('assets/js/bootstrap/css/bootstrap.min.css') }}">
    <!-- bootstrap-icons css -->
    <link rel="stylesheet" href="{{ asset('assets/font/bootstrap-icons.css') }}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/js/nice-select/css/nice-select.css') }}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/css/slick.css') }}">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/odometer/css/odometer.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <!--  / css dependencies end  -->

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>
    <header class="header-section">
        @includeIf('includes/header')
    </header>
    @yield('content')
    <footer class="footer">
        @includeIf('includes.scripts')
        @includeIf('includes.foot')
        @includeIf('includes.footer')
    </footer>
    {{-- @includeIf('includes.mobile-foot-nav') --}}
    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="bi bi-chevron-double-up"></i></a>

    <script src="{{ asset('assets/js/jquery/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/slick/js/slick.min.js') }}"></script>
</body>

</html>
