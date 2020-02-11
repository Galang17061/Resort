<html lang="en">
<head>
    @include('layouts_frontend._head_frontend')
    @yield('extra_style')
</head>
<body>
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>  
    <header class="header_area" id="header">
        @include('layouts_frontend._nav_frontend')
    </header>
    @yield('content')
    <footer class="dorne-footer-area">
        @include('layouts_frontend._footer_frontend')
    </footer>
    @include('layouts_frontend._scripts_frontend')
    @yield('extra_scripts')
</body>
</html>