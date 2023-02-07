@extends('layouts.master')

@section('content')
    <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
            <meta itemprop="position" content="1">
            <span>|</span>
        </div>
        <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">Отложенные товары</span></a>
            <meta itemprop="position" content="1">
            <span>|</span>
        </div>
    </div>
    <div class="shop-wrap">
        <h1><a href="{{ Request::url() }}">Отложенные товары</a></h1>
        <div class="category-menu"></div>
        <div class="product-filter bottom-margin">
            <div class="filter-wrap">
                <div class="products-wrap no-filter">
                    @if (!empty($products[0]))
                    <div class="products @if(\Cookie::get('view') == 2) grid @else list @endif" itemscope itemtype="http://schema.org/ItemList">
                    <link itemprop="url" href="{{ Request::url() }}">
                    @foreach ($products as $product)
                    <div class="product-block" itemprop="itemListElement" itemscope itemtype="http://schema.org/Product">
                        <link itemprop="url" href="{{ URL::to($product->url) }}">
                        <meta itemprop="description" content="{{ $product->meta_description }}">
                        <div class="grid-cv">
                            <div onclick="quickAddToCompare(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price }}" data-code="{{ $product->code }}" class="compare"></div>
                            <div onclick="quickAddToBookmark(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price }}" data-code="{{ $product->code }}" class="bookmark"></div>
                        </div>
                        <div class="product-image">
                            @if (isset($product->sticker_text))
                            <div class="sticker" style="background:{{ $product->sticker_color }};">{{ $product->sticker_text }}</div>
                            @endif
                            <a href="{{ URL::to($product->url) }}"><img itemprop="image" class="b-lazy" src="/svg/placeholder.svg" data-src="{{ $product->image }}" alt="{{ $product->name }}"></a>
                        </div>
                        <div class="product-info">
                            <div class="top">
                                <a href="{{ URL::to($product->url) }}" class="title"><span itemprop="name">{{ $product->name }}</span></a>
                                <ul>
                                    <li>Код товара: {{ $product->sku }}</li>
                                    <li>Артикул: {{ $product->code }}</li>
                                    <li>Производитель: {{ $product->brand_name }}</li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <div class="wrap">
                                    <div onclick="quickAddToCompare(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price }}" data-code="{{ $product->code }}" class="compare">
                                        <span>Сравнить</span>
                                    </div>
                                    <div onclick="quickAddToBookmark(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price }}" data-code="{{ $product->code }}" class="bookmark">
                                        <span>Отложить</span>
                                    </div>
                                    <div class="brand">
                                        <a href="{{ URL::to('brand/'.$product->brand_url) }}"><img class="b-lazy" src="/svg/brand_placeholder.svg" data-src="{{ $product->brand_image }}" alt="{{ $product->brand_name }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-shop">
                            <div class="cart" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="RUB">
                                @if (!empty($product->old_price))
                                <div class="price-wrap">
                                    <div class="old-price">{{ $product->old_price }}</div>
                                    <div class="old-tax">(с НДС)</div>
                                </div>
                                @endif
                                <div class="price-wrap">
                                    @if ($product->price != 0)
                                    @if($product->currency != 'RUB')
                                        <div class="cat-price">{{ number_format($product->price/$product->currency_nominal*$product->currency_value, 2, ',', ' ') }} ₽</div>
                                        <div class="tax">(с НДС)</div>
                                        <div class="cat-price-usd-wrap">
                                            <div class="cat-price-usd" itemprop="price" content="{{ $product->price }}">{{ number_format($product->price, 2, ',', ' ') }}</div>
                                            <span>{{ $product->currency }}</span>
                                        </div>
                                        @else
                                        <div class="cat-price" itemprop="price" content="{{ $product->price }}">{{ number_format($product->price, 2, ',', ' ') }} ₽</div>
                                        <div class="tax">(с НДС)</div>
                                        @endif
                                        @else
                                        <div class="cat-price-empty" itemprop="price" content="{{ $product->price }}">Цена по запросу</div>
                                        @endif
                                </div>
                                <div class="btn-wrap">
                                    @if ($product->price)
                                    @if($product->currency != 'RUB')
                                        <button onclick="quickAddToCart(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price*$product->currency_nominal*$product->currency_value }}" data-code="{{ $product->code }}">Купить<span
                                                class="cart-icon"></span></button>
                                        @else
                                        <button onclick="quickAddToCart(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price }}" data-code="{{ $product->code }}">Купить<span class="cart-icon"></span></button>
                                        @endif
                                        @else
                                        <a href="mailto:{{ $contacts->email }}?subject=Запрос на код товара {{ $product->code }}&body=Добрый день!%0D%0AПрошу выставить счет на {{ $product->name }} ({{ $product->sku }}), код товара {{ $product->code }}, штук: %0D%0AКонтактный телефон:%0D%0AДоставка:"
                                            class="request-price">Запросить счет</a>
                                        @endif
                                </div>
                            </div>
                            <div class="additional-info">
                                @if ($product->in_stock === null || $product->in_stock > 0)
                                <div class="in-stock"><span class="in-stock-icon"></span>В наличии</div>
                                @elseif ($product->in_stock === 0)
                                <div class="preorder"><span class="preorder-icon"></span></span>Под заказ</div>
                                @endif
                                @if ($product->production)
                                <div class="production"><span class="production-icon"></span>Срок изготовления {{ $product->production }}</div>
                                @endif
                                @if ($product->delivery)
                                <div class="delivery-city"><span class="delivery-city-icon"></span>{{ $product->delivery }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="empty-block">
                    По вашему запросу не найдено ни одного товара
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
function changeView(option) {
    var xhr = new XMLHttpRequest();
    var data = 'value=' + option;
    xhr.open('POST', '/changeView');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content);
    xhr.send(data);
}

$(document).ready(function() {

    $('#list-view').on('click', function() {
        $('.products').addClass('list');
        $('.products').removeClass('grid');
        changeView(1);
    });

    $('#grid-view').on('click', function() {
        $('.products').addClass('grid');
        $('.products').removeClass('list');
        changeView(2);
    });

});
</script>
@endsection
