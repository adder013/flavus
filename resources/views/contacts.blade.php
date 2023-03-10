@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('contacts') }}"><span itemprop="name">Контакты</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="contacts-wrap">
    <h1>Контакты FLAVUS Сервис поставок HoReCa</h1>
    <div class="address">
        <div class="info">
            <ul>
                <li>
                    <div class="name">E-mail для заявок:</div>
                    <div class="body"><a href="mailto:{{ $contacts->email }}"><strong>{{ $contacts->email }}</strong></a></div>
                </li>
                <li>
                    <div class="name">Телефон в Екатеринбурге:</div>
                    <div class="body"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}"><strong>{{ $contacts->phone }}</strong></a></div>
                </li>
                <!-- <li>
                    <div class="name">Телефон в Москве:</div>
                    <div class="body"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone_msk) }}"><strong>{{ $contacts->phone_msk }}</strong></a></div>
                </li> -->
                <li>
                    <div class="name">Время работы:</div>
                    <div class="body">{!! $contacts->work_hours !!}</div>
                </li>
                <li>
                    <div class="name">Почтовый адрес:</div>
                    <div class="body">{{ $contacts->post_address }}</div>
                </li>
                <li>
                    <div class="name">Юридический адрес:</div>
                    <div class="body">{{ $contacts->legal_address }}</div>
                </li>
                <li>
                    <div class="name">Реквизиты:</div>
                    <div class="body">{!! $contacts->bank_info !!}</div>
                </li>
            </ul>
            <div class="email-us">
                <a href="mailto:{{ $contacts->email }}">Написать нам</a>
            </div>
        </div>
        <div class="module-2gis">
            <a class="dg-widget-link" href="http://2gis.ru/ekaterinburg/firm/1267165676523715/center/60.666922,56.841462/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Екатеринбурга</a>
            <div class="dg-widget-link"><a href="http://2gis.ru/ekaterinburg/center/60.666922,56.841462/zoom/16/routeTab/rsType/bus/to/60.666922,56.841462╎Уралэнерготел,%20ООО,%20инженерная%20компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Уралэнерготел, ООО, инженерная компания</a></div>
            <script src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script>
                new DGWidgetLoader({
                    "height": 740,
                    "borderColor": "#d9d9d9",
                    "pos": {
                        "lat": 56.841462,
                        "lon": 60.666922,
                        "zoom": 16
                    },
                    "opt": {
                        "city": "ekaterinburg"
                    },
                    "org": [{
                        "id": "1267165676523715"
                    }]
                });

            </script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
    </div>
    <div class="address">
        <div class="pickup">
            <a class="pickup-link" href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%9C%D0%B0%D0%BB%D1%8B%D1%88%D0%B5%D0%B2%D0%B0,+164,+%D0%95%D0%BA%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B1%D1%83%D1%80%D0%B3,+%D0%A1%D0%B2%D0%B5%D1%80%D0%B4%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+620049/@56.8413169,60.6643213,17z/data=!3m1!4b1!4m5!3m4!1s0x43c16c3baf49fb47:0xf3598bfd8d76caa!8m2!3d56.841314!4d60.66651">
                <h2>Схема проезда на склад</h2>
                <!-- <img src="{{ url('/img/static/contacts/pickup.png') }}" alt="Пункты самовывоза"> -->
            </a>
        </div>
        <div class="info">
            <ul>
                <li>
                    <div class="name">Адрес склада:</div>
                    <div class="body">{{ $contacts->storage_address }}</div>
                </li>
                <li>
                    <div class="name">По навигатору:</div>
                    <div class="body">56.84133865, 60.66663237743906</div>
                </li>
                <li>
                    <div class="name">Время работы:</div>
                    <div class="body">{!! $contacts->work_hours !!}</div>
                </li>
                <li>
                    <div class="name">Телефон кладовщика:</div>
                    <div class="body"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->storage_phone) }}">{{ $contacts->storage_phone }}</a></div>
                </li>
                <li>
                    <div class="name">Телефон офиса:</div>
                    <div class="body"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></div>
                </li>
            </ul>
            <p>Для получения товара требуется доверенность либо печать предприятия.</p>
            <div class="email-us">
                <a href="/storage/uploads/etc/Доверенность_на_получение.pdf">Образец доверенности</a>
            </div>
            <!-- <div class="email-us">
                <a href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%9C%D0%B0%D0%BB%D1%8B%D1%88%D0%B5%D0%B2%D0%B0,+164,+%D0%95%D0%BA%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B1%D1%83%D1%80%D0%B3,+%D0%A1%D0%B2%D0%B5%D1%80%D0%B4%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+620049/@56.8413169,60.6643213,17z/data=!3m1!4b1!4m5!3m4!1s0x43c16c3baf49fb47:0xf3598bfd8d76caa!8m2!3d56.841314!4d60.66651">Показать на карте</a>
            </div> -->
        </div>
    </div>
    <!-- <div class="blocks">
        <a href="https://www.uetel.ru/" class="services">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/contacts/services.svg') }}" alt="Услуги">
            </div>
            <div class="info">
                <h2>Услуги</h2>
                <p>С услугами по монтажу, наладке и сервисному обслуживанию можно ознакомиться на сайте www.uetel.ru</p>
            </div>
        </a>
        <a href="{{ URL::to('samovyvoz') }}" class="services">
            <div class="img-wrap">
                <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/contacts/geo.svg') }}" alt="Пункт самовывоза">
            </div>
            <div class="info">
                <h2>Пункт самовывоза</h2>
                <p>Вы можете забрать товар самостоятельно в пункте самовывоза по адресу г. Екатеринбург, ул. Малышева, 164</p>
            </div>
        </a>
    </div> -->
</div>
<script>
    var bLazy = new Blazy();

</script>
@endsection
