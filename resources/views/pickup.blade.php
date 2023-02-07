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
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('contacts/samovyvoz') }}"><span itemprop="name">Пункты самовывоза</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="contacts-wrap">
    <h1>СКЛАД ТД УЭТ Г. ЕКАТЕРИНБУРГ</h1>
    <div class="address">
        <div class="info">
            <p>Для получения товара требуется доверенность либо печать предприятия.</p>
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
            <!-- <div class="email-us">
                <a href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%9C%D0%B0%D0%BB%D1%8B%D1%88%D0%B5%D0%B2%D0%B0,+164,+%D0%95%D0%BA%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B1%D1%83%D1%80%D0%B3,+%D0%A1%D0%B2%D0%B5%D1%80%D0%B4%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+620049/@56.8413169,60.6643213,17z/data=!3m1!4b1!4m5!3m4!1s0x43c16c3baf49fb47:0xf3598bfd8d76caa!8m2!3d56.841314!4d60.66651">Показать на карте</a>
            </div> -->
        </div>
        <div class="module-2gis">
            <a class="dg-widget-link" href="https://2gis.ru/ekaterinburg/firm/70000001057639006?m=60.666983%2C56.840844%2F17.95&utm_medium=widget-source">Посмотреть на карте Екатеринбурга</a><div class="dg-widget-link"><a href="https://2gis.ru/ekaterinburg/firm/70000001057639006?m=60.666983%2C56.840844%2F17.95&utm_medium=widget-source">Найти проезд до Уралэнерготел, ООО, инженерная компания</a></div><script src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script>new DGWidgetLoader({ "height":637, "borderColor":"#d9d9d9", "pos":{"lat":56.84133865,"lon":60.66663237743906,"zoom":16},"opt":{"city":"ekaterinburg"},"org":[{"id":"70000001057639006"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
        </div>
    </div>
    <div class="address">
        <div class="pickup">
            <a class="pickup-link" href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%9C%D0%B0%D0%BB%D1%8B%D1%88%D0%B5%D0%B2%D0%B0,+164,+%D0%95%D0%BA%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D0%B1%D1%83%D1%80%D0%B3,+%D0%A1%D0%B2%D0%B5%D1%80%D0%B4%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+620049/@56.8413169,60.6643213,17z/data=!3m1!4b1!4m5!3m4!1s0x43c16c3baf49fb47:0xf3598bfd8d76caa!8m2!3d56.841314!4d60.66651">
                <h2>Схема проезда на склад</h2>
                <!-- <img src="{{ url('/img/static/contacts/pickup.png') }}" alt="Пункты самовывоза"> -->
            </a>
        </div>
        <div class="trust-doc">
            <a class="doc-link" href="/storage/uploads/etc/Доверенность_на_получение.pdf">
                <h2>Образец доверенности</h2>
                <!-- <img src="{{ url('/img/static/contacts/procuration.png') }}" alt="Доверенность"> -->
            </a>
        </div>
    </div>
</div>
<script>
    var bLazy = new Blazy();
</script>
@endsection
