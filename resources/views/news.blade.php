@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('about') }}"><span itemprop="name">О компании</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">Новости ТД УЭТ</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="news-wrap">
    <h1>Новости ТД УЭТ</h1>
    <div class="all-news">
        @foreach ($allNews as $news)
        <a href="{{ URL::to('/about/news/'.$news->url) }}" class="news-block">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($news->image) }}"
                    alt="{{ $news->title }}">
            </div>
            <div class="time">{{ date('d.m.Y H:i', strtotime($news->created_at)) }}</div>
            <h2>{{ $news->title }}</h2>
            <div class="description">{{ $news->preview }}</div>
        </a>
        @endforeach
    </div>
</div>
<script>
var bLazy = new Blazy();
</script>
@endsection
