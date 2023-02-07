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
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">Новости производителей</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="specials-wrap">
    <h1>Новости производителей</h1>
    <div class="all-specials">
        @foreach ($specials as $special)
        <a href="{{ URL::to('about/deals/'.$special->url) }}" class="special-block">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($special->image) }}"
                    alt="{{ $special->name }}">
            </div>
            <div class="time">{{ date('d.m.Y H:i', strtotime($special->created_at)) }}</div>
            <h2>{{ $special->name }}</h2>
            <div class="description">{{ $special->short_description }}</div>
        </a>
        @endforeach
    </div>
</div>
<script>
var bLazy = new Blazy();
</script>
@endsection
