<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Типография «ДАММИ»</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="/favicon.ico" rel="shortcut icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <style>@include('styles/fonts')@include('styles/desktop/default')</style>
    <script src="/scripts/utils/common.js"></script>
    <script src="/scripts/desktop/common.js"></script>
    <script src="/scripts/desktop/classes/transport.js"></script>
    <script src="/scripts/desktop/classes/desktop.js"></script>
    <script src="/scripts/utils/ajax.js"></script>
    <script src="/scripts/desktop/desktop.js"></script>
</head>
<body>
<div id="main__menu__slider">
    <div id="menu__components mms"></div>
    <div class="quit__control mms" onclick="return rqCloseDesktop()"><span>{{ @trans('desktop.quit') }}</span></div>
</div>
<form id="desktop_main_form" name="desktop_main_form">
    @csrf
    <input type="hidden" name="ihf" value="{{ @trans('desktop.loading') }}"/>
</form>
</body>
</html>
