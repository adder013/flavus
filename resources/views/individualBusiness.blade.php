@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('individualBusiness') }}"><span itemprop="name">Для ИП</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="ib-page">
    <div class="banner-1">
        <h2>Особые условия работы<br> для индивидуальных предпринимателей<br> и компаний на УСН</h2>
    </div>
    <div class="main-work-pluses">
        <div class="work-pluses">
            <div class="pluses-block">
                <img src="{{ url('/img/static/individualB/A1.png') }}" alt="Бесплатная доставка">
                <h3>Доставка до терминала</h3>
                <p>Бесплатная доставка до терминала транспортной компании.</p>
            </div>
            <div class="pluses-block">
                <img src="{{ url('/img/static/individualB/A2.png') }}" alt="Персональный менеджер">
                <h3>Персональный менеджер</h3>
                <p>Мы всегда на связи и готовы помочь по любым вопросам. Ваш персональный менеджер разберется с любым вашим вопросом.</p>
            </div>
            <div class="pluses-block">
                <img src="{{ url('/img/static/individualB/A3.png') }}" alt="Подбор оборудования">
                <h3>Подбор оборудования</h3>
                <p>Наши опытные технические специалисты помогут подобрать нужное вам оборудование.</p>
            </div>
            <div class="pluses-block">
                <img src="{{ url('/img/static/individualB/A4.png') }}" alt="Работа по договору и безналичный расчет">
                <h3>Договор и безналичный расчет</h3>
                <p>Вы можете выбирать как вам удобнее оплатить счет у нас есть безналичный расчет и оплата по карте</p>
            </div>
        </div>
    </div>
    <div class=work-how>
        <h2>Как мы работаем</h2>
        <div class="how-blocks">
            <div class="how-block">
                <img src="{{ url('/img/static/individualB/B1.png') }}" alt="Заказ">
                <h3>Заказ</h3>
                <p>Вы оставляете заказ через корзину интернет-магазина</p>
            </div>
            <div class="arrow-svg">
                <svg width="33" height="60" viewBox="0 0 33 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.625 58.75L30.375 30L1.625 1.25" stroke="#d9d9d9" stroke-width="3" />
                </svg>
            </div>
            <div class="how-block">
                <img src="{{ url('/img/static/individualB/B2.png') }}" alt="Завонок">
                <h3>Звонок</h3>
                <p>Наш менеджер свяжется с вами для уточнения деталей заказа</p>
            </div>
            <div class="arrow-svg">
                <svg width="33" height="60" viewBox="0 0 33 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.625 58.75L30.375 30L1.625 1.25" stroke="#d9d9d9" stroke-width="3" />
                </svg>
            </div>
            <div class="how-block">
                <img src="{{ url('/img/static/individualB/B3.png') }}" alt="Счет">
                <h3>Счет</h3>
                <p>Менеджер выставит вам счет на электронную почту</p>
            </div>
            <div class="arrow-svg">
                <svg width="33" height="60" viewBox="0 0 33 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.625 58.75L30.375 30L1.625 1.25" stroke="#d9d9d9" stroke-width="3" />
                </svg>
            </div>
            <div class="how-block">
                <img src="{{ url('/img/static/individualB/B4.png') }}" alt="Оплата">
                <h3>Оплата</h3>
                <p>Выберите удобный способ оплаты и оплатите счет</p>
            </div>
            <div class="arrow-svg">
                <svg width="33" height="60" viewBox="0 0 33 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.625 58.75L30.375 30L1.625 1.25" stroke="#d9d9d9" stroke-width="3" />
                </svg>
            </div>
            <div class="how-block">
                <img src="{{ url('/img/static/individualB/B5.png') }}" alt="Доставка">
                <h3>Доставка</h3>
                <p>Ожидайте доставку товара</p>
            </div>
        </div>
    </div>
    <div class="our-pluses">
		<h2>Наши преимущества</h2>
        <div class="our-pluses-blocks">
            <div class="our-pluses-block">
                <img src="{{ url('/img/static/individualB/С1.png') }}" alt="Быстрая доставка">
                <h3>Быстрая доставка</h3>
                <p>Мы доставляем товар напрямую с завода изготовителя, поэтому наша доставка - самая быстрая</p>
            </div>
            <div class="our-pluses-block">
                <img src="{{ url('/img/static/individualB/С2.png') }}" alt="Гарантия">
                <h3>Гарантия</h3>
                <p>Если что-то случилось - мы быстро обработаем вашу заявку по рекламации</p>
            </div>
            <div class="our-pluses-block">
                <img src="{{ url('/img/static/individualB/С3.png') }}" alt="Выгода в цене">
                <h3>Выгода в цене</h3>
                <p>Купите дешевле чем у производителя. Как официальный дилер, мы можем предложить вам самые выгодние цены</p>
            </div>
            <div class="our-pluses-block">
                <img src="{{ url('/img/static/individualB/С4.png') }}" alt="Единый поставщик">
                <h3>Единый поставщик</h3>
                <p>Комплексно постваим вам инженерное оборудование по всем нашим категориям.</p>
            </div>
        </div>
        <a class="mail-us" href="mailto:{{ $contacts->email }}">Отправить заявку</a>
    </div>
</div>
<script></script>
@endsection
