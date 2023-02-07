@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('about/partners') }}"><span itemprop="name">Наши партнеры</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="partners-wrap">
    <h1>Наши партнеры</h1>
    @foreach ($partners as $partner)
        <a href="{{ $partner->certificate }}" data-fancybox="images" class="partner-block">
            <div class="img-wrap"><img src="{{ $partner->image }}" alt="{{ $partner->name }}"></div>
            <h2>{{ $partner->name }}</h2>
            <div class="text">{{ $partner->body }}</div>
        </a>
    @endforeach
</div>
<div class="be-partner">
    <div class="huge-img"><img src="{{ url('/img/static/partners/partners_hands.jpg') }}" alt="Наши партнеры"></div>
    <div class="how-to">
        <h2>Стать нашим партнёром</h2>
        <p>Интернет-магазин <a href="https://uralenergotel.ru">uralenergotel.ru</a> - новый проект компании ООО "Уралэнерготел" для продажи продукции собственного производства, а также продукции других российских и мировых производителей. Мы предлагаем как готовые решения для автоматизации производства, электроснабжения, организации слаботочных сетей, так и отдельные комплектующие - источники питания, кабельные изделия, изделия для прокладки кабеля и его монтажа, оборудование связи, модульное оборудование и многое другое.</p>
        <div class="consult">Вы всегда сможете с нами связаться и получить<br>подробную консультацию по телефону:</div>
        <div class="call">
            <div class="phone"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></div>
            <span>Звоните: с 9-00 до 18-00</span>
        </div>
        <a class="mail-us" href="mailto:{{ $contacts->email }}">Написать нам</a>
    </div>
</div>
@endsection
