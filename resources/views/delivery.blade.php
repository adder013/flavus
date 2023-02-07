@extends('layouts.master')

@section('content')
    <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{ URL::to('/') }}">
                <span itemprop="name">Главная</span>
            </a>
            <meta itemprop="position" content="1">
            <span>|</span>
        </div>
        <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{ Request::url() }}">
                <span itemprop="name">Доставка</span>
            </a>
            <meta itemprop="position" content="2">
            <span>|</span>
        </div>
    </div>
    <div class="delivery-wrap">
        <h1>Доставка</h1>
        <div class="delivery-blocks-wrap">
            <div class="delivery-block">
                <div class="img-wrap">
                    <img src="{{ url('/img/static/delivery/regions.svg') }}" alt="Регионы доставки">
                </div>
                <div class="text">
                    <h2>Регионы доставки</h2>
                    <ul>
                        <li>
                            Доставляем товары по&nbsp;всей России, Казахстану, Беларуси, Киргии и&nbsp;Армении, в&nbsp;любой
                            город или населенный пункт с&nbsp;получением в&nbsp;пункте назначения.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="delivery-block">
                <div class="img-wrap">
                    <img src="{{ url('/img/static/delivery/payment.svg') }}" alt="Оплата">
                </div>
                <div class="text">
                    <h2>Оплата</h2>
                    <ul>
                        <li>
                            Заказ отгружается после зачисления средств на&nbsp;банковский счёт компании ООО &laquo;Торговый
                            дом УЭТ&raquo;, либо после зачисления аванса при работе по&nbsp;договору;
                        </li>
                        <li>
                            При заключении договора схема оплаты может выбираться индивидуально;
                        </li>
                        <li>
                            Оплата осуществляется на&nbsp;основании счёта, направляемого на&nbsp;электронный адрес
                            заказчика;
                        </li>
                        <li>
                            Все необходимые для бухгалтерии документы (счёт-фактура, накладная, оригинал счёта
                            на&nbsp;оплату) прикладываются к&nbsp;грузу и&nbsp;доставляются совместно одним отправлением;
                        </li>
                        <li>
                            Доставку можно оплачивать одним счётом с&nbsp;товарами; Можем включить в&nbsp;стоимость
                            оборудования.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="delivery-block">
                <div class="map-wrap">
                    <img src="{{ url('/img/static/delivery/map.png') }}" alt="Регионы доставки">
                </div>
            </div>
            <div class="delivery-block">
                <div class="img-wrap">
                    <img src="{{ url('/img/static/delivery/warranty.svg') }}" alt="Гарантия">
                </div>
                <div class="text">
                    <h2>В пути товар в надёжных руках</h2>
                    <ul>
                        <li>Ваш груз всегда застрахован;</li>
                        <li>
                            Груз безопасно упакован: при необходимости в палетный борт, жесткую упаковку (деревянная
                            обрешетка), воздушно-пузырьковая плёнка.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="delivery-block">
                <h2>Как мы доставляем</h2>
                <div class="text-wrap">
                    <div class="text">
                        <p>
                            Мы сотрудничаем с ТК Деловые линии, ПЭК, СДЭК и DPD. В удалённые регионы возможна доставка
                            специализированными ТК.
                        </p>
                        <p>Доставка в страны Таможенного союза — ТК DPD.</p>
                        <div class="delivery-logos-wrap">
                            <div class="img-wrap">
                                <img src="{{ url('/img\static\delivery\dpd_logo.png') }}" alt="DPD">
                            </div>
                            <div class="img-wrap">
                                <img src="{{ url('/img/static/delivery/businesslineslogo.png') }}" alt="Деловые Линии">
                            </div>
                            <div class="img-wrap">
                                <img src="{{ url('/img/static/delivery/peclogo.png') }}" alt="ПЭК">
                            </div>
                            <div class="img-wrap">
                                <img src="{{ url('/img\static\delivery\cdek_logo.png') }}" alt="СДЭК">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="text">
                        <p>
                            Возможен самовывоз со склада г. Екатеринбург, ул. Малышева, 164
                        </p>
                        <a class="button" href="{{ url('samovyvoz') }}">Схема самовывоза</a>
                    </div> -->
                </div>
            </div>
            <div class="delivery-block">
                <div class="img-wrap"><img src="{{ url('/img/static/delivery/shipping.svg') }}" alt="Доставка"></div>
                <div class="text">
                    <h2>Любой вид транспорта для перевозки</h2>
                    <ul>
                        <li>Автомобильный транспорт (стандарт);</li>
                        <li>Авиа (срочный).</li>
                    </ul>
                    <p>
                        Мы всегда подберем для вас оптимальный способ доставки и сделаем доставку максимально выгодной и
                        удобной.
                    </p>
                </div>
            </div>
            <div class="delivery-block">
                <div class="img-wrap"><img src="{{ url('/img/static/delivery/geo.svg') }}" alt="Получение"></div>
                <div class="text">
                    <h2>Вы можете выбрать где получить груз</h2>
                    <ul>
                        <li>В вашем городе по указанному адресу (до двери);</li>
                        <li>В терминале ТК в вашем городе;</li>
                        <li>На любом строящемся объекте.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="delivery-countries-wrap">
            <h2>Доставка по России, Казахстану, Беларуси, Киргизии и Амении</h2>
            <p>Мы доставляем товары по всей территории России, Казахстана, Беларуси, Армении и Киргизии.</p>
            <div class="country">
                <div class="text">
                    <img src="{{ url('/img/static/delivery/russia.svg') }}" alt="Россия">
                    <h3>Доставка по России</h3>
                </div>
                <div class="cities-wrap">
                    @foreach ($allDelivery['Россия'] as $letter => $cities)
                        <ul>
                            <h4>{{ $letter }}</h4>
                            @foreach ($cities as $city)
                                <li>
                                    <a href="{{ url('/delivery/' . $city->url) }}">
                                        {{ $city->city }} и {{ $city->region }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="country">
                <div class="text">
                    <img src="{{ url('/img/static/delivery/kazakhstan.svg') }}" alt="Казахстан">
                    <h3>Доставка по Казахстану</h3>
                </div>
                <div class="cities-wrap">
                    @foreach ($allDelivery['Казахстан'] as $letter => $cities)
                        <ul>
                            <h4>{{ $letter }}</h4>
                            @foreach ($cities as $city)
                                <li>
                                    <a href="{{ url('/delivery/' . $city->url) }}">
                                        {{ $city->city }} и {{ $city->region }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="country">
                <div class="text">
                    <img src="{{ url('/img/static/delivery/belarus.svg') }}" alt="Беларусь">
                    <h3>Доставка по Беларуси</h3>
                </div>
                <div class="cities-wrap">
                    @foreach ($allDelivery['Беларусь'] as $letter => $cities)
                        <ul>
                            <h4>{{ $letter }}</h4>
                            @foreach ($cities as $city)
                                <li>
                                    <a href="{{ url('/delivery/' . $city->url) }}">
                                        {{ $city->city }} и {{ $city->region }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="country">
                <div class="text">
                    <img src="{{ url('/img/static/delivery/armenia.svg') }}" alt="Армения">
                    <h3>Доставка по Армении</h3>
                </div>
                <div class="cities-wrap">
                    @foreach ($allDelivery['Армения'] as $letter => $cities)
                        <ul>
                            <h4>{{ $letter }}</h4>
                            @foreach ($cities as $city)
                                <li>
                                    <a href="{{ url('/delivery/' . $city->url) }}">
                                        {{ $city->city }} и {{ $city->region }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
            <div class="country">
                <div class="text">
                    <img src="{{ url('/img/static/delivery/kyrgyzstan.svg') }}" alt="Кыргызстан">
                    <h3>Доставка по Киргизии</h3>
                </div>
                <div class="cities-wrap">
                    @foreach ($allDelivery['Кыргызстан'] as $letter => $cities)
                        <ul>
                            <h4>{{ $letter }}</h4>
                            @foreach ($cities as $city)
                                <li>
                                    <a href="{{ url('/delivery/' . $city->url) }}">
                                        {{ $city->city }} и {{ $city->region }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        var bLazy = new Blazy();
        $(document).ready(function() {
            document.querySelector('.delivery').style.display = 'none';
        })

    </script>
@endsection
