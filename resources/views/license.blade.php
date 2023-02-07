@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('about/licenses') }}"><span itemprop="name">Лицензии</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="license-wrap">
    <h1>Лицензии</h1>
    <a data-fancybox data-type="iframe" data-src="{{ url('/files/licenses/Свидетельство на товарный знак Уралэнерготел.pdf') }}" href="javascript:;"><img src="{{ url('/files/licenses/Свидетельство%20на%20товарный%20знак%20Уралэнерготел.jpg') }}" alt="Свидетельство на товарный знак Уралэнерготел">Свидетельство на товарный знак (знак обслуживания) Уралэнерготел</a>
    <a data-fancybox data-type="iframe" data-src="{{ url('/files/licenses/Сертификат ИСМ ISO Уралэнерготел.pdf') }}" href="javascript:;"><img src="{{ url('/files/licenses/Сертификат%20ИСМ%20ISO%20Уралэнерготел.jpg') }}" alt="Сертификат ИСМ ISO Уралэнерготел">Соответствует требованиям ГОСТ Р ИСО 9001-2015 (ISO 9001:2015), ГОСТ Р ИСО 14001-2016 (ISO 14001:2015), ГОСТ Р 54934-2012 (OHSAS 18001:2007)</a>
</div>
@endsection
