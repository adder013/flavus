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
        <a itemprop="item" href="{{ URL::to('about/news') }}"><span itemprop="name">Новости ТД УЭТ</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">{{ $news->title }}</span></a>
        <meta itemprop="position" content="4">
        <span>|</span>
    </div>
</div>
<div class="news-page-wrap">
    <div class="news">
        <div class="main-news">
            <div class="time">{{ $news->updated_at }}</div>
            <h1>{{ $news->title }}</h1>
            @if ($images)
            <div class="main-slider">
                <div class="carousel" data-flickity='{ "lazyLoad": true, "autoPlay": 5000, "pauseAutoPlayOnHover": false, "wrapAround": true, "pageDots": false}'>
                    @foreach ($images as $image)
                        <div class="carousel-cell">
                            <img class="carousel-cell-image" src="{{ url($image) }}" data-flickity-lazyload="{{ url($image) }}" alt="{{ $news->title }}">
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
            <div class="description">{!! $news->body !!}</div>
        </div>
        <div class="latest-news">
            <h2>Другие новости</h2>
            @if ($previous_news)
                @foreach ($previous_news as $previous)
                <div class="news-item">
                    <div class="time">{{ $previous->updated_at }}</div>
                    <div class="name"><a href="{{ URL::to('/about/news/'.$previous->url) }}">{{ $previous->title }}</a></div>
                </div>
                @endforeach
            @endif
            <div class="all-news-link">
                <a href="{{ URL::to('about/news') }}">Вce новости<svg aria-hidden="true" data-prefix="fas" data-icon="arrow-right" class="svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></a>
            </div>
        </div>
    </div>
</div>
@endsection
