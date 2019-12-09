<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    @stack('header')
</head>

<body data-gr-c-s-loaded="true">

@include('partials.nav')

@yield('content')

@include('partials.footer')

@stack('footer_js')
</body>
</html>
