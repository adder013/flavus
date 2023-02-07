@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers') }}"><span itemprop="name">Покупателям</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<h1>Покупателям</h1>
<div class="customers-wrap">
    <div class="order">
        <div class="greetings">Уважаемые покупатели!</div>
        <p>Если вам не хочется долго подбирать товары самостоятельно, просто отправьте нам заявку по электронной почте sale@uralenergotel.ru. Мы оперативно подберем нужное оборудование.</p>
        <a class="mail-us" href="mailto:{{ $contacts->email }}">Отправить заявку</a>
        <div class="suggestion">Вы всегда сможете с нами связаться и получить<br>подробную консультацию по телефону:</div>
        <a class="call" href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a>
    </div>
    <div class="blocks-wrap">
        <a href="{{ URL::to('customers/howtobuy') }}" class="block">
            <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/specs.svg') }}" alt="Как сделать заказ"></div>
            <div class="info">
                <h2>Как сделать заказ</h2>
                <p>Оперативно подберём необходимое оборудование</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 "/></svg>
        </a>
        <a href="{{ URL::to('delivery') }}" class="block">
            <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/delivery.svg') }}" alt="Удобная доставка"></div>
            <div class="info">
                <h2>Удобная доставка</h2>
                <p>Доставка в любую точку России</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 "/></svg>
        </a>
    </div>
    <div class="blocks-wrap">
        <a href="{{ URL::to('customers/howtopay') }}" class="block">
            <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/payment.svg') }}" alt="Как оплатить заказ"></div>
            <div class="info">
                <h2>Как оплатить заказ</h2>
                <p>Для Юридических лиц</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 "/></svg>
        </a>
        <a href="{{ URL::to('customers/warranty') }}" class="block">
            <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/warranty.svg') }}" alt="Гарантийное обслуживание"></div>
            <div class="info">
                <h2>Гарантийное обслуживание</h2>
                <p>Гарантия на все товары</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 "/></svg>
        </a>
        <!-- @if (1 == 1)
        <a href="{{ URL::to('customers/suggestions') }}" class="block">
            <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/idea.svg') }}" alt="Предложить идею"></div>
            <div class="info">
                <h2>Предложить идею</h2>
                <p>Мы заинтересованы в новых идеях и проектах</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 "/></svg>
        </a>
        @endif -->
    </div>
</div>
<script>
    var bLazy = new Blazy();
</script>
@endsection
