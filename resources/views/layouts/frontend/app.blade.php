<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Đình Thuận Store")</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="ROBOTS" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="BingBOT" content="index,follow" />
    <meta name="yahooBOT" content="index,follow" />
    <meta name="slurp" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('layouts.frontend.style')
    @yield('style')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <button id="scrollToTopButton">Up</button>
    @include('layouts.frontend.footer')
    @include('layouts.frontend.script')
    @yield('script')
</body>
</html>