<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts_frontend._head_frontend')
    @yield('extra_style')
</head>
<body>
    <div class="super_container">
        @include('layouts_frontend._nav_frontend')
        @yield('content')
		@include('layouts_frontend._scripts_frontend')
    </div>
</body>
    	@yield('extra_scripts')

</html>
