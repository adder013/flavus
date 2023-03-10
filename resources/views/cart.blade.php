@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('cart') }}"><span itemprop="name">Корзина</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="content-wrap">
    <h1>Лист формирования счета</h1>
    @if (count($products))
    <div class="content">
        <div class="cart-products-head">
            <div class="image-column">Изображение</div>
            <div class="name-column">Наименование</div>
            <div class="code-column">Код товара</div>
            <div class="quantity-column">Количество</div>
            <div class="unit-price-column">Цена</div>
            <div class="price-column">Стоимость</div>
            <div class="delete-column"></div>
        </div>
        @foreach ($products as $product)
            <div id="product_{{ $product->id }}" class="cart-product">
                <div class="image-column">
                    <img class="b-lazy" src="/svg/placeholder.svg" data-src="@if($product->image){{ url($product->image) }}@endif" alt="{{ $product->name }}"></a>
                </div>
                <div class="name-column"><a href="{{ url($product->url) }}">{{ $product->name }}</a></div>
                <div class="code-column">{{ $product->code }}</div>
                <div class="quantity-column">
                    <button onclick="decreaseQuantity(this)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="315.869,21.178 294.621,0 91.566,203.718 294.621,407.436 315.869,386.258 133.924,203.718 "/></svg></button>
                    <input onkeyup="changeQuantity(this)" data-id="{{ $product->id }}" data-amount="{{ $product->quantity }}" data-origin-price="{{ $product->price }}" data-currency="{{ $product->currency->char_code }}" data-price="{{ $product->price/$product->currency->nominal*$product->currency->value }}" name="amount" type="number" value="{{ $product->quantity }}" min="1">
                    <button onclick="increaseQuantity(this)"><svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 "/></svg></button>
                </div>
                <div class="unit-price-column">
                    <div class="rub-price">
                        {{ number_format($product->price/$product->currency->nominal*$product->currency->value, 2, ',', ' ') }} ₽
                    </div>
                    @if ($product->currency->char_code != 'RUB')
                        <div class="origin-price">
                            {{ number_format($product->price, 2, ',', ' ') }} {{ $product->currency->char_code }}
                        </div>
                    @endif
                </div>
                <div class="price-column">
                    <div class="rub-price">
                        {{ number_format($product->price/$product->currency->nominal*$product->currency->value*$product->quantity , 2, ',', ' ') }} ₽
                    </div>
                    @if ($product->currency->char_code != 'RUB')
                        <div class="origin-price">
                            {{ number_format($product->price*$product->quantity , 2, ',', ' ') }} {{ $product->currency->char_code }}
                        </div>
                    @endif
                </div>
                <div class="delete-column">
                    <button onclick="deleteCartItem({{ $product->id }})"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357 357"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"/></svg></button>
                </div>
            </div>
        @endforeach
        <div id="cart-total-price" data-total="{{ $total }}">Стоимость товаров: <span>{{ number_format($total , 2, ',', ' ') }} ₽</span></div>
    </div>
    <form id="cart-upload" class="order-items" onsubmit="placeOrder(event)">
        <div class="step">1. Выберите способ доставки</div>
        <div class="delivery-type">
            <div><label><input type="radio" onclick="inputHide(0)" value="Доставка транспортной компанией до адреса" name="deliveryType" checked><span>Доставка транспортной компанией до адреса:</span></label></div>
            <input id="address" type="text" name="address" placeholder="Укажите адрес доставки">
            <div><label><input type="radio" onclick="inputHide(2)" value="Доставка транспортной компанией до терминала в городе" name="deliveryType"><span>Доставка транспортной компанией до терминала в городе</span></label></div>
            <input id="city" type="text" name="city" placeholder="Укажите город" disabled>
            <div><label><input type="radio" onclick="inputHide(1)" value="Самовывоз со склада Уралэнерготел" name="deliveryType"><span>Самовывоз со склада ТД УЭТ</span></label></div>
            <div><label><input type="radio" onclick="inputHide(1)" value="Бесплатная доставка по г.Екатеринбургу" name="deliveryType"><span>Бесплатная доставка по г.Екатеринбургу</span></label></div>
        </div>
        <div class="step">2. Укажите данные</div>
        <div class="contact-info">
            <input type="text" name="name" placeholder="Имя">
            <input type="email" name="email" placeholder="E-mail" required>
			<input type="tel" name="tel" placeholder="Контактный телефон" required>
			<div class="file_upload">
				<button><img src="/svg/file_select.svg"></button>
				<div class="file_name"><p>Карточка предприятия</p></div>
				<input type="file" name="file" accept="image/*,application/pdf,application/zip,application/gzip,application/msword,text/csv,text/html,text/plain" onchange="showFileName(this.files[0])">
			</div>
        </div>
        <label><input name="policy" type="checkbox" required><span>Я соглашаюсь с <a data-fancybox data-type="iframe" data-src="{{ url('/files/policies/personal_data_policy_uralenergotel.pdf') }}" href="javascript:;">политикой защиты и обработки персональных данных</a> и даю <a  data-fancybox data-type="iframe" data-src="{{ url('/files/policies/personal_data_agreement_uralenergotelru.pdf') }}" href="javascript:;">согласие</a> на их обработку.</span></label>
        <hr>
        <div class="final-step">
            <div class="final-order">
                <div class="text">
                    <div class="all-items-price">Стоимость товаров на сумму:</div>
                    <div class="delivery-price">Стоимость доставки будет указана в счете</div>
                </div>
                <div id="total-price" data-total="{{ $total }}">{{ number_format($total , 2, ',', ' ') }} ₽</div>
                <div class="send-all-wrap">
                    <button class="send-all" type="submit" @if ($total < 10000 && $showButton == 0) @endif>Получить счет</button>
                    <button class="send-payment" type="submit" @if ($total < 10000 && $showButton == 0) @endif>Оплатить картой</button>
                    <div class="min-sum @if ($total >= 10000 || $showButton == 1) hidden @endif">Минимальная сумма заказа <span class="cart-price">10000</span></div>
                </div>
            </div>
        </div>
    </form>
    @else
    <div class="content">
        <div class="no-items-in-cart">Ваша корзина пуста</div>
    </div>
    @endif
</div>
<script>
    function placeOrder(event)
    {
        document.getElementById('global-message') ? document.getElementById('global-message').remove() : '';
        let message = document.createElement('div');
        message.id = 'global-message';
        message.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 334.5 334.5"><path d="M332.797,13.699c-1.489-1.306-3.608-1.609-5.404-0.776L2.893,163.695c-1.747,0.812-2.872,2.555-2.893,4.481 s1.067,3.693,2.797,4.542l91.833,45.068c1.684,0.827,3.692,0.64,5.196-0.484l89.287-66.734l-70.094,72.1 c-1,1.029-1.51,2.438-1.4,3.868l6.979,90.889c0.155,2.014,1.505,3.736,3.424,4.367c0.513,0.168,1.04,0.25,1.561,0.25 c1.429,0,2.819-0.613,3.786-1.733l48.742-56.482l60.255,28.79c1.308,0.625,2.822,0.651,4.151,0.073 c1.329-0.579,2.341-1.705,2.775-3.087L334.27,18.956C334.864,17.066,334.285,15.005,332.797,13.699z"/></svg><div>Идет обработка заявки</div>';
        document.querySelector('main').appendChild(message);
        event.preventDefault();
        let form = document.getElementById('cart-upload');
        let formData = new FormData(form);
        formData.append('session', session);
        formData.append('_method', 'PUT');
        axios.post('/api/cart/order', formData)
            .then(function(success) {
                document.location.href = '/cart/success/' + success.data;
            },
            function(error) {
                console.error(error);
            });
    }

    function updateQuantity(item, amount)
    {
        let currency = item.parentElement.querySelector('input').getAttribute('data-currency');
        let price = parseFloat(item.parentElement.querySelector('input').getAttribute('data-price'));
        let priceNotRub = parseFloat(item.parentElement.querySelector('input').getAttribute('data-origin-price'));
        item.parentElement.parentElement.querySelector('.unit-price-column > .rub-price').innerHTML = priceStyle.format(price) + ' ₽';
        if (item.parentElement.parentElement.querySelector('.unit-price-column > .origin-price')) {
            item.parentElement.parentElement.querySelector('.unit-price-column > .origin-price').innerHTML = priceStyle.format(priceNotRub) + ' ' + currency;
        }
        item.parentElement.parentElement.querySelector('.price-column > .rub-price').innerHTML = priceStyle.format(price*amount) + ' ₽';
        if (item.parentElement.parentElement.querySelector('.price-column > .origin-price')) {
            item.parentElement.parentElement.querySelector('.price-column > .origin-price').innerHTML = priceStyle.format(priceNotRub*amount) + ' ' + currency;
        }
        let total = 0.00;
        document.querySelectorAll('.cart-product').forEach(function(element) {
            let itemAmount = element.querySelector(' .quantity-column input').value;
            total += parseFloat(element.querySelector('input').getAttribute('data-price'))*itemAmount;
        });
        document.querySelector('#cart-total-price > span').innerHTML = priceStyle.format(total) + ' ₽';
        document.querySelector('#total-price').innerHTML = priceStyle.format(total) + ' ₽';
        let id = parseInt(item.parentElement.querySelector('input').getAttribute('data-id'));
        axios.patch('/api/cart/' + id, {
            quantity: amount,
        });
        if (total > 9999) {
            // document.querySelector('.send-all-wrap > .send-all').disabled = false;
            document.querySelector('.send-all-wrap > .min-sum').classList = 'min-sum hidden';
        } else {
            // document.querySelector('.send-all-wrap > .send-all').disabled = true;
            document.querySelector('.send-all-wrap > .min-sum').classList.remove('hidden');
        }
    }

    function changeQuantity(item)
    {
        let amount = item.parentElement.querySelector('input').value;
        if (amount < 1) {
            item.parentElement.querySelector('input').value = 1;
            amount = 1;
        }
        updateQuantity(item, amount);
    }

    function increaseQuantity(item)
    {
        let amount = item.parentElement.querySelector('input').value++;
        amount++;
        updateQuantity(item, amount);
    }

    function decreaseQuantity(item)
    {
        let amount = item.parentElement.querySelector('input').value;
        if (amount > 1) {
            item.parentElement.querySelector('input').value--;
            amount--;
        }
        updateQuantity(item, amount);
    }

    function deleteCartItem(id)
    {
        document.querySelector('#product_' + id).remove();
        let total = 0.00;
        document.querySelectorAll('.cart-product').forEach(function(element) {
            let itemAmount = element.querySelector(' .quantity-column input').value;
            total += parseFloat(element.querySelector('input').getAttribute('data-price'))*itemAmount;
        });
        document.querySelector('#cart-total-price > span').innerHTML = priceStyle.format(total) + ' ₽';
        document.querySelector('#total-price').innerHTML = priceStyle.format(total) + ' ₽';
        axios.delete('/api/cart/' + id);
    }

    function inputHide(hide) {
        if (hide == 1) {
            $('#address').attr('disabled', 'true');
            $('#city').attr('disabled', 'true');
        } else if (hide == 2) {
            $('#address').attr('disabled', 'true');
            $('#city').removeAttr('disabled');
        } else {
            $('#address').removeAttr('disabled');
            $('#city').attr('disabled', 'true');
        }
    }

	function showFileName(file) {
		document.querySelector(".file_name").innerHTML = file.name;
	}

    // function getPaymentLink()
    // {
    //     let name = document.getElementsByName("name").value;

    // }
</script>
@endsection
