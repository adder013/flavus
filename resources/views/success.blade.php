@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('cart/success') }}"><span itemprop="name">Лист формирования счета</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="content-wrap">
    <h1>Лист формирования счета</h1>
    <div class="content">
        <div class="success-info">
            <h2>Спасибо за заказ!</h2>
            <div class="order-id">Номер вашего заказа <span>#{{ $orderId }}</span></div>
            <div class="order-time">{{ $time }}</div>
			<p>@if($total < 10000)Для выставления счёта сумма заказа должна составлять не менее 10000 ₽<br>@endif
				В ближайшее время наш менеджер свяжется с вами для дальнейшей обработки заказа.</p>
        </div>
        <div class="cart-products-head">
            <div class="name-column">Наименование</div>
            <div class="code-column">Код товара</div>
            <div class="quantity-column">Количество</div>
            <div class="unit-price-column">Цена</div>
            <div class="price-column">Стоимость</div>
        </div>
        @foreach ($products as $product)
            <div class="cart-product">
                <div class="name-column">{{ $product->product_name }}</div>
                <div class="code-column">{{ $product->sku_code }}</div>
                <div class="quantity-column">{{ $product->amount }}</div>
                <div class="unit-price-column">
                    <div class="rub-price">
                        {{ number_format($product->price, 2, ',', ' ') }} ₽
                    </div>
                </div>
                <div class="price-column">
                    <div class="rub-price">
                        {{ number_format($product->price * $product->amount, 2, ',', ' ') }} ₽
                    </div>
                </div>
            </div>
        @endforeach
        <div id="cart-total-price" data-total="{{ $total }}">Стоимость товаров: <span>{{ number_format($total , 2, ',', ' ') }} ₽</span></div>
    </div>
    <div class="order-information">
        <h2>Информация о заказе</h2>
        <p>Если у вас возникли любые вопросы по оформлению заказа, составу заказа или товарам - позвоните нам и мы вас проконсультируем.</p>
        <a class="call" href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a>
        <div class="work-hours">Звоните: с 09:00 до 18:00</div>
    </div>
</div>
<script>
    var bLazy = new Blazy();

    function inputHide(hide) {
        if (hide == 1) {
            $('#address').attr('disabled', 'true');
        } else {
            $('#address').removeAttr('disabled');
        }
    }


    $(".decreaseVal").click(function() {
        var input_el = $(this).next('input'),
            el_val = input_el.val()-1,
            sum_price = $(this).parent().parent().next().next();
        if (el_val >= input_el.attr('min')) {
            updatePrice(input_el, el_val, sum_price, 1);
        }
    });

    $(".decreaseValMobile").click(function() {
        var input_el = $(this).next('input'),
            el_val = input_el.val()-1,
            sum_price = $(this).parent().find('.price-sum-mobile');
        if (el_val >= input_el.attr('min')) {
            updatePrice(input_el, el_val, sum_price, 2);
        }
    });

    $(".increaseVal").click(function() {
        var input_el = $(this).prev('input')
            el_val = input_el.val()*1+1,
            sum_price = $(this).parent().parent().next().next();
        updatePrice(input_el, el_val, sum_price, 1);
    });

    $(".increaseValMobile").click(function() {
        var input_el = $(this).prev('input')
            el_val = input_el.val()*1+1,
            sum_price = $(this).parent().find('.price-sum-mobile');
        updatePrice(input_el, el_val, sum_price, 2);
    });

    $(".cart-wrap input").on('keyup',function() {
        var input_el = $(this),
            el_val = input_el.val(),
            sum_price = $(this).parent().parent().next().next();
        if (el_val >= input_el.attr('min')) {
            updatePrice(input_el, el_val, sum_price, 1);
        }
    });

    $(".cart-wrap-mobile input").on('keyup',function() {
        var input_el = $(this),
            el_val = input_el.val(),
            sum_price = $(this).parent().find('.price-sum-mobile');
        if (el_val >= input_el.attr('min')) {
            updatePrice(input_el, el_val, sum_price, 2);
        }
    });

</script>
@endsection
