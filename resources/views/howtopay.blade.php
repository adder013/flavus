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
        <a itemprop="item" href="{{ URL::to('customers/howtopay') }}"><span itemprop="name">Как оплатить заказ</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="howtobuy-wrap">
    <h1>Оплата</h1>
    <div class="order">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/payment.svg') }}" alt=">Как оплатить заказ"></div>
        <div class="info">
            <div class="greetings">Уважаемые покупатели!</div>
            <ul>
                <li>Заказ отгружается после зачисления средств на бансковский счет компании ООО "Торговый дом УЭТ", либо после зачисления аванса при работе по договору.</li>
                <li>При заключении договора схема оплаты может выбираться индивидуально.</li>
                <li>Оплата осуществляется на основании счета, направляемого на электронный адрес заказчика.</li>
                <li>Все необходимые для бухгалтерии документы (счет-фактура, накладная, оригинал счета на оплату) прикладываются к грузу и доставляются совместно одним отправлением.</li>
                <li>Минимальная сумма заказа составляет 10000 рублей.</li>
                <li>Все цены на сайте указаны с НДС.</li>
            </ul>
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
