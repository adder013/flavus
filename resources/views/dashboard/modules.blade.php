@extends('dashboard.layouts.main')

@section('content')
<div class="modules">
    <a href="{{ URL::route('show.menu') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/menu_module.svg') }}" alt="Главное меню"></div>
        <div class="name">Главное меню</div>
    </a>
    <a href="{{ URL::route('show.slider') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/slider_module.svg') }}" alt="Слайдер (главная страница)"></div>
        <div class="name">Слайдер (главная страница)</div>
    </a>
    <a href="{{ URL::route('show.dashboardContacts') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/contacts_module.svg') }}" alt="Контакты"></div>
        <div class="name">Контакты</div>
    </a>
    <a href="{{ URL::route('show.dashboardPartners') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/partners_module.svg') }}" alt="Партнеры"></div>
        <div class="name">Партнеры</div>
    </a>
    <a href="{{ URL::route('index.locker') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/lockers_module.svg') }}" alt="Шкафы индивидуальной сборки"></div>
        <div class="name">Шкафы индивидуальной сборки</div>
    </a>
    <a href="{{ URL::route('show.dashboardStickers') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/stickers_module.svg') }}" alt="Стикеры для товаров"></div>
        <div class="name">Стикеры для товаров</div>
    </a>
    <a href="{{ URL::route('show.dashboardSpecials') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/specials_module.svg') }}" alt="Новости производителей"></div>
        <div class="name">Новости производителей</div>
    </a>
    <a href="{{ URL::route('show.dashboard.delivery') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/delivery_module.svg') }}" alt="Доставка"></div>
        <div class="name">Доставка</div>
    </a>
    <a href="{{ URL::route('show.dashboard.news') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/news_module.svg') }}" alt="Новости ТД УЭТ"></div>
        <div class="name">Новости ТД УЭТ</div>
    </a>
    <a href="{{ URL::route('show.dashboard.homeBrands') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/home_brands_module.svg') }}" alt="Бренды на главной странице"></div>
        <div class="name">Бренды на главной странице</div>
    </a>
    <a href="{{ URL::route('show.dashboard.brandsTags') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/tags_module.svg') }}" alt="Теги для брендов"></div>
        <div class="name">Теги для брендов</div>
    </a>
    <a href="{{ URL::route('show.dashboard.seo') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/seo_module.svg') }}" alt="SEO"></div>
        <div class="name">SEO</div>
    </a>
    </a>
    <a href="{{ URL::route('show.dashboard.redirect') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/redirect_module.svg') }}" alt="Редиректы"></div>
        <div class="name">Редиректы</div>
    </a>
    <a href="{{ URL::route('show.dashboard.robots') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/robots_module.svg') }}" alt="Robots.txt"></div>
        <div class="name">Robots.txt</div>
    </a>
    <a href="{{ URL::route('show.dashboard.metrics') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/metrics_module.svg') }}" alt="Метрика"></div>
        <div class="name">Метрика</div>
    </a>
    <a href="{{ URL::route('show.dashboard.faq') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/faq_module.svg') }}" alt="FAQ"></div>
        <div class="name">FAQ</div>
    </a>
    <a href="{{ URL::route('show.dashboard.wysiwyg') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/wysiwyg_module.svg') }}" alt="wysiwyg"></div>
        <div class="name">WYSIWYG</div>
    </a>
    <a href="{{ URL::route('show.dashboard.supply') }}" class="menu-module">
        <div class="img-wrap"><img src="{{ url('/svg/modules/trust_module.svg') }}" alt="trust"></div>
        <div class="name">Поставки. Нам доверяют</div>
    </a>
</div>
@endsection
