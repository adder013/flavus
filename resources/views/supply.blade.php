@extends('layouts.master')

@section('content')
<div class="supply-page">
    <div class="header">
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
                <a itemprop="item" href="{{ URL::to('about/supply') }}"><span itemprop="name">Стать партнером</span></a>
                <meta itemprop="position" content="3">
                <span>|</span>
            </div>
        </div>
        <h1>Стать партнером</h1>
        <div class="text">
            <p>FLAVUS приглашает к партнерству кафе, рестораны, пекарни и другие организации общественного питания для работы по партнерскому договору</p>
        </div>
    </div>
    <div class="tiles">
        <!-- <div class="tile">
            <p>Преимущества закупки по договору в ТД УЭТ</p>
        </div> -->
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon1.svg') }}" alt="icon">
            </div>
            <span>Оборудование по оптовым ценам и расходники</span>
            <span class="sub">Выгодная покупка</span>
        </div>
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon6.svg') }}" alt="icon">
            </div>
            <span>Личный менеджер</span>
            <span class="sub">Подбор оборудования для ваших целей</span>
        </div>
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon2.svg') }}" alt="icon">
            </div>
            <span>Быстрая доставка прямо к вам</span>
            <span class="sub">В отдаленные регионы России</span>
        </div>
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon9.svg') }}" alt="icon">
            </div>
            <span>Работа по договору</span>
            <span class="sub">Работаем по договору</span>
        </div>
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon8.svg') }}" alt="icon">
            </div>
            <span>FLAVUS & OZON</span>
            <span class="sub">Получить товары рядом в OZON</span>
        </div>
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon7.svg') }}" alt="icon">
            </div>
            <span>Отгрузка с региональных складов</span>
            <span class="sub">Отгрузка со склада</span>
        </div>
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon5.svg') }}" alt="icon">
            </div>
            <span>Широкий ассортимент</span>
            <span class="sub">Более 30 заводов партнеров</span>
        </div>
        <div class="tile">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                    data-src="{{ url('/img/static/supply/icon4.svg') }}" alt="icon">
            </div>
            <span>Официальный поставщик</span>
            <span class="sub">Гарантия и сервисное обслуживание</span>
        </div>
    </div>
    <div class="supplies">
        <h3>Мы поставляем оборудование</h3>
        <table>
            <tbody class="desktop">
                @foreach ($tags as $tag)
                <tr class="tag">
                    <td class="buy"></td>
                    <td>{{ $tag->name }}</td>
                    <td></td>
                </tr>
                <tr class="description">
                    <td class="buy"><a href="{{ $tag->url }}" target="_blank">Купить</a></td>
                    <td>{!! $tag->description !!}</td>
                    <td>
                        @foreach ($tag->brands as $brand)
                        <a href="/brand/{{ $brand->url }}" target="_blank">{{ $brand->name }}</a>@if(!$loop->last),@endif
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tbody class="mobile">
                @foreach ($tags as $tag)
                <tr>
                    <td class="tag">{{ $tag->name }}</td>
                </tr>
                <tr>
                    <td class="border-bottom">{!! $tag->description !!}</td>
                </tr>
                <tr>
                    <td>
                        @foreach ($tag->brands as $brand)
                        <a href="/brand/{{ $brand->url }}" target="_blank">{{ $brand->name }}</a>@if(!$loop->last),@endif
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="trust-us">
        <h2>Нам доверяют</h2>
        <div class="customers">
            @foreach ($customers as $customer)
            <div class="customer">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ $customer->logo }}"
                    alt="{{ $customer->name }}" title="{{ $customer->name }}">
            </div>
            @endforeach
        </div>
    </div>
    <div class="callback">
        <h3>Заключить договор с ТД УЭТ</h3>
        <p>Для заключения договора свяжитесь с нашими менеджерами по телефону</p>
        <p class="phone"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a>
        </p>
        <p>или оставьте заявку по e-mail <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a></p>
        <img src="{{ url('/img/static/supply/products.png') }}" alt="Оборудование" class="banner-callback">
    </div>
</div>
<script>
    var bLazy = new Blazy();
</script>
@endsection
