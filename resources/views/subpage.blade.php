<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Типография «ДАММИ»</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/favicon.ico" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <style>@include('styles/fonts')@include('styles/media/default')@include('styles/default')</style>
</head>
<body>
    <a name="top"></a>
    <main>
        @include('templates.subpage.header')
        @yield('contents')
        @include('templates.subpage.footer')
    </main>
</body>
</html>
