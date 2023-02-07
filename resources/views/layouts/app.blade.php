<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, viewport-fit=cover">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Торговый дом УЭТ</title>
	<meta name="description" content="Торговый дом УЭТ – поставщик контрольно-измерительных приборов и оборудования автоматизации, телемеханики и релейной защиты и автоматики. Мы представляем продукцию наших партнёров – ведущих российских производителей.">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="theme-color" content="#ffffff">
	<link href="/css/styles.css" rel="stylesheet">
	<script src="/js/scripts.js"></script>
</head>
<body>
    @yield('content')
</body>
</html>
