<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    @include('layouts.header')
    @include('layouts.leftside')
    @yield('content')
    @include('layouts.footer')
    @yield('js')
</body>

</html>
