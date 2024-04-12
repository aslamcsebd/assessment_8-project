<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background: gainsboro;">
    @include('layouts.header2')
    @yield('content')
    @include('layouts.modal')
    @include('layouts.footer')
    @yield('js')
</body>
</html>
