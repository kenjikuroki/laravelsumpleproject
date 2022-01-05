<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')｜laravel練習</title>
        <meta name="description" itemprop="description" content="@yield('description')">
        <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="/css/layouts/layout.css" rel="stylesheet">
        @yield('pageCss')
    </head>
    <body>
    @yield('header') 
    @yield('sidebar')
    <div class="contents">
            @yield('content')
    </div>
    @yield('footer')
    @yield('script')
    </body>
</html>