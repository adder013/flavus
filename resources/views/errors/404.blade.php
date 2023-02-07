@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">Ошибка 404 (Страница не найдена)</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="error-message-wrap">
    <div class="image-404">404</div>
    <h1>Страница не найдена или удалена</h1>
    <div class="buttons-wrap">
        <a href="{{ URL::to('/') }}">Главная</a>
        <a href="{{ URL::to('catalog') }}">Каталог</a>
        <a href="mailto:{{ $contacts->email }}">Написать нам</a>
    </div>
</div>
@endsection
