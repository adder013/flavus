@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('delivery') }}"><span itemprop="name">Доставка</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">{{ $thisCity->city }}</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="delivery-city-wrap">
    <h1>Доставка | {{ $thisCity->city }}, {{ $thisCity->region }}, {{ $thisCity->country }}</h1>
    <div class="info">
        <div class="text">Торговый дом УЭТ осуществляет доставку товаров в город {{ $thisCity->city }} транспортными компаниями Деловые Линии и DPD как до терминала, так и по адресу предприятия заказчика, а также на строящиеся объекты в регионе {{ $thisCity->region }}. Мы поможем вам выбрать лучшее предложение доставки от наших партнёров по стоимости и срокам для любых габаритов и веса товаров, которые вы купили у нас. У нас вы можете заказать оборудование различных производителей под ваш проект с доставкой до объекта или вашего предприятия одной поставкой.</div>
        <div class="img-delivery">
            <img src="{{ url('img/static/delivery/delivery-img.png') }}" alt="Доставка">
        </div>
    </div>
    <div class="city">
        <h2>Вы можете оформить доставку не только в {{ $thisCity->city }}, но и другие города региона {{ $thisCity->region }}:</h2>
        @if ($deliveryCities)
        <ul>
            @foreach ($deliveryCities as $delivery)
                @if (!empty($delivery->url))
                <li><a href="{{ URL::to('delivery/'.$delivery->url) }}">{{ $delivery->city }}</a></li>
                @else
                <li>{{ $delivery->city }}</li>
                @endif
            @endforeach
                <li>и другие населённые пункты</li>
        </ul>
        @endif
        <p>Также вы можете забрать товар самостоятельно из терминалов транспортных компаний.</p>
        <hr>
        <h2>{{ $thisCity->address_header }}</h2>
        <div class="companies">
            <div class="delivery-company">
                @if ($thisCity->address_dl)
                <img src="/img/static/delivery/businesslineslogo.png" alt="Деловые Линии">
                <ul>
                    {!! $thisCity->address_dl !!}
                </ul>
                @endif
            </div>
            <div class="delivery-company">
                @if ($thisCity->address_dpd)
                <img src="/img/static/delivery/dpdlogo.png" alt="DPD">
                <ul>
                    {!! $thisCity->address_dpd !!}
                </ul>
                @endif
            </div>
        </div>
    </div>
    <div class="bonus-services">
        <h2>Вы можете воспользоваться дополнительными сервисами при доставке:</h2>
        <div class="services">
            <div class="service">
                <div class="img-wrap">
                    <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/insurance.svg') }}" alt="Страховка груза">
                </div>
                <div class="block">
                    <div class="name">Страховка груза</div>
                    <div class="body">Как при доставке до терминала, так и при доставке до адреса мы можем застраховать сохранность вашего груза</div>
                </div>
            </div>
            <div class="service">
                <div class="img-wrap">
                    <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/pack_types.svg') }}" alt="Различного вида упаковки по вашим предпочтениям">
                </div>
                <div class="block">
                    <div class="name">Различного вида упаковки по вашим предпочтениям</div>
                    <div class="body">Ваш заказ всегда останется невредимым благодаря широкому выбору вариантов упаковки у грузоперевозчика: вы можете заказать дополнительную упаковку в палетный борт, жёсткую деревянную обрешетку и другие виды упаковки.</div>
                </div>
            </div>
            <div class="service">
                <div class="img-wrap">
                    <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/aviaship.svg') }}" alt="Авиаперевозки">
                </div>
                <div class="block">
                    <div class="name">Авиаперевозки</div>
                    <div class="body">Если вы хотите получить заказ в кратчайшие сроки, мы можем доставить вам авиатранспортом</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="ask-us">
            <div class="mail">Все вопросы по дополнительным сервисам можно уточнить у менеджера, по почте: <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a> или по телефону:</div>
            <div class="phone"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></div>
        </div>
    </div>
</div>
<script>
    var bLazy = new Blazy();
</script>
@endsection
