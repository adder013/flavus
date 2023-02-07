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
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('customers/howtobuy') }}"><span itemprop="name">Как сделать заказ</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="howtobuy-wrap">
    <h1>Как сделать заказ</h1>
    <div class="order">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/specs.svg') }}" alt="Как сделать заказ"></div>
        <div class="info">
            <div class="greetings">Уважаемые покупатели!</div>
            <p>В нашем интернет-магазине вы можете оформить заказ добавив интересующие вас товары в корзину, либо прислать запрос на подбор оборудования из нашего ассортимента просто отправив вашу заявку по электронной почте sale@uralenergotel.ru. Мы оперативно подберем нужное оборудование и выставим счёт.<br>На данный момент мы работаем только с юридическими лицами.</p>
            <a class="mail-us" href="mailto:{{ $contacts->email }}">Отправить заявку</a>
            <div class="suggestion">Вы всегда сможете с нами связаться и получить<br>подробную консультацию по телефону:</div>
            <a class="call" href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a>
            <div class="work_hours">Звоните: с 09:00 до 18:00</div>
        </div>
    </div>
</div>
<script>
    var bLazy = new Blazy();
</script>
@endsection
