<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if (isset($metaTitle))
    <title>{{ $metaTitle }}</title>
    @else
    <title>Торговый дом УЭТ | Интернет-магазин</title>
    @endif
    @if (isset($metaDesc))
    <meta name="description" content="{{ $metaDesc }}">
    @else
    <meta name="description" content="Торговый дом УЭТ – поставщик контрольно-измерительных приборов и оборудования автоматизации, телемеханики и релейной защиты и автоматики. Мы представляем продукцию наших партнёров – ведущих российских производителей.">
    @endif
    <link rel="canonical" href="{{ strtolower(Request::url().'/') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://mc.yandex.ru/metrika/tag.js">
    <link rel="dns-prefetch" href="https://www.google-analytics.com/analytics.js">
    <link href="{{ mix('/css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ mix('/js/scripts.js') }}"></script>
    <script src="{{ asset('/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <header id="site-header" itemscope itemtype="http://schema.org/WPHeader">
        <canvas id="canvas"></canvas>
        @include('layouts.nav')
        @include('layouts.top-info')
    </header>
    <main>
        @if (session('error'))
        <div id="global-message-red">
            {!! session('error') !!}
        </div>
        @elseif (session('success'))
        <div id="global-message">
            {!! session('success') !!}
        </div>
        @endif
        <aside>
            <div class="crutch"></div>
            @include('layouts.aside-nav')
        </aside>
        <div class="content" itemprop="mainContentOfPage">
            @yield('content')
            @include('layouts.delivery')
            <footer id="site-footer" itemscope itemtype="http://schema.org/WPFooter">
                @include('layouts.footer')
            </footer>
        </div>
    </main>
    @if (isset($metrics))
    {!! $metrics !!}
    @endif

    <script>
        $(document)
            .ready(function () {
                var bLazy = new Blazy();
                setTimeout(function () {
                    var bLazy = new Blazy();
                }, 300)
                setTimeout(function () {
                    var bLazy = new Blazy();
                }, 1000)
                setTimeout(function () {
                    var bLazy = new Blazy();
                }, 1500)
                setTimeout(function () {
                    var bLazy = new Blazy();
                }, 4000)
            });

    </script>
</body>
</html>
