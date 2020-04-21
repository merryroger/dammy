<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Типография «ДАММИ»</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/favicon.ico" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <style>@include('styles/fonts')@include('styles/desktop/default')</style>
    <script src="/scripts/utils/common.js"></script>
    <script src="/scripts/desktop/common.js"></script>
    <script src="/scripts/utils/ajax.js"></script>
</head>
<body>
    <form id="desktop_main_form" name="desktop_main_form">
        @csrf
    </form>
    <a href="/logout" onclick="return rqCloseDesktop()">Выйти</a>
</body>
</html>
