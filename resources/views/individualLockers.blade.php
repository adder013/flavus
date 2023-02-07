@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('shkafy-individualnoi-sborki') }}"><span itemprop="name">Сборка шкафов на заказ</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="individual-lockers-wrap">
	<h1>Шкафы индивидуальной сборки</h1>
    <div class="lockers-info">
        В торговом доме УЭТ вы можете заказать сборку шкафов<br>под свой проект по собственной спецификации.
    </div>
    <div class="white-bg">
        <div class="feature-lockers">
            @if ($lockers)
                @foreach ($lockers as $locker)
                    @if ($locker->active == 1)
                        <a href="{{ URL::to('shkafy-individualnoi-sborki/'.$locker->url) }}" class="locker-block">
                             <img src="{{ url($locker->image) }}" alt="{{ $locker->name }}">
                             <p>{{ $locker->name }}</p>
                         </a>
                     @else
                         <div class="locker-block">
                             <img src="{{ url($locker->image) }}" alt="{{ $locker->name }}">
                             <p>{{ $locker->name }}</p>
                         </div>
                     @endif
                @endforeach
            @endif
        </div>
    </div>
    <div class="ind-clients">
        <div class="title-clients">Наши клиенты</div>
        <div class="img-clients">
            <img src="{{ url('/img/static/ind_lockers/logo/1.png') }}" alt="Системный оператор Единой энергетической системы">
            <img src="{{ url('/img/static/ind_lockers/logo/2.png') }}" alt="Тюмень Энерго">
            <img src="{{ url('/img/static/ind_lockers/logo/3.png') }}" alt="Краснодарнефтегаз">
            <img src="{{ url('/img/static/ind_lockers/logo/4.png') }}" alt="МРСК Сибири">
            <img src="{{ url('/img/static/ind_lockers/logo/5.png') }}" alt="Сетевая компания ">
            <img src="{{ url('/img/static/ind_lockers/logo/6.png') }}" alt="МРСК Урала">
            <img src="{{ url('/img/static/ind_lockers/logo/7.png') }}" alt="ФСК ЕЭС">
            <img src="{{ url('/img/static/ind_lockers/logo/8.png') }}" alt="ГК-1">
            <img src="{{ url('/img/static/ind_lockers/logo/9.png') }}" alt="ОГК-2">
            <img src="{{ url('/img/static/ind_lockers/logo/10.png') }}" alt="Электрогенерация Интер РАО ">
            <img src="{{ url('/img/static/ind_lockers/logo/11.png') }}" alt="РусГидро">
            <img src="{{ url('/img/static/ind_lockers/logo/12.png') }}" alt="УГМК">
        </div>
    </div>
    <div class="triple-about">
        <div class="ind-title">Наши преимущества</div>
        <div class="all-about-us">
            <div class="aau">
                <div class="x-block">
                    <span class="numb">1</span>
                    <h2>Качественная сборка</h2>
                    <ul>
                        <li>При сборке шкафов мы используем выверенные технологии</li>
                        <li>Применяем современные материалы и оборудование</li>
                        <li>Производим контроль монтажа на всех этапах сборки</li>
                        <li>Тестируем и производим наладку собранных изделий</li>
                        <li>Используем собственные конструктивные разработки, выполненные в нашем конструкторском бюро.</li>
                    </ul>
                </div>
                <div class="x-block"><img src="{{ url('/img/static/ind_lockers/1_sborka.png') }}" alt="Качественная сборка"></div>
            </div>
            <hr>
            <div class="aau">
                <div class="x-block"><img src="{{ url('/img/static/ind_lockers/2_sborka.png') }}" alt="Большой опыт"></div>
                <div class="x-block">
                    <span class="numb">2</span>
                    <h2>Большой опыт</h2>
                    <ul>
                        <li>Мы собираем шкафы более 10 лет</li>
                        <li>Наши сотрудники обладают высокой квалификацией и уважают своё дело </li>
                        <li>Шкафы нашей сборки установлены на многих объектах энергетики, нефтегазовой и атомной промышленности</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="aau">
                <div class="x-block">
                    <span class="numb">3</span>
                    <h2>Оборудование партнёров</h2>
                    <ul>
                        <li>Благодаря нашим партнёрским соглашениям с производителями оборудования, вы получите наиболее выгодные цены на готовые изделия</li>
                        <li>Мы имеем сертификаты на право монтажа и наладки оборудования наших партнёров</li>
                    </ul>
                </div>
                <div class="x-block"><img src="{{ url('/img/static/ind_lockers/3_sborka.png') }}" alt="Оборудование партнёров"></div>
            </div>
        </div>
    </div>
    <div class="callback-lockers">
        <h3>Заказать шкаф по собственной спецификации</h3>
        <p>Для заказа шкафа свяжитесь с нашими менеджерами по телефону</p>
        <p class="phone"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></p>
        <p>или оставьте заявку по e-mail <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a></p>
        <img class="banner-callback" src="{{ url('/img/static/ind_lockers/indlockerbanner.png') }}" alt="Шкаф индивидуальной сборки" >
    </div>
</div>
@endsection
