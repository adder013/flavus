<div class="top-info">
    <div class="logo">
        <a href="{{ URL::to('/') }}">
            <img src="{{ url('/img/flavus_logo_yellow.png') }}" alt="Торговый дом УЭТ">
        </a>
    </div>
    <div class="contacts-mobile">
        <p>
            <a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a>
        </p>
        <p>
            <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
        </p>
    </div>
    <div>
        <div class="contacts">
            <div class="mail"><img src="/svg/mail.svg">
                <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
            </div>
            <div class="phone">
                <img src="/svg/phone.svg">
                <p>
                    <a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">
                        {{ $contacts->phone }}
                    </a>
                    Екатеринбург<br>
                    <a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone_msk) }}">
                        {{ $contacts->phone_msk }}
                    </a>
                    Москва
                </p>
            </div>
        </div>
        <div class="search">
            <div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'{{ URL::to('/search') }}','arrow':false,'bg':'transparent','fontsize':16,'fg':'#000000','language':'ru','logo':'rb','publicname':'Поиск','suggest':true,'target':'_self','tld':'ru','type':2,'usebigdictionary':true,'searchid':2343055,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'Найти товары','input_placeholderColor':'#000000','input_borderColor':'#d9d9d9'}">
                <form action="{{ URL::to('/search') }}" target="_self" accept-charset="utf-8" class="search-wrap" method="GET">
                    <input class="ya-s" type="search" name="text" placeholder="Поиск товара" value="{{ app('request')->input('text') }}" />
                    <button type="submit" class="search-ico">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.627 53.627">
                            <path d="M53.627,49.385L37.795,33.553C40.423,30.046,42,25.709,42,21C42,9.42,32.58,0,21,0S0,9.42,0,21s9.42,21,21,21 c4.709,0,9.046-1.577,12.553-4.205l15.832,15.832L53.627,49.385z M2,21C2,10.523,10.523,2,21,2s19,8.523,19,19s-8.523,19-19,19 S2,31.477,2,21z" />
                        </svg>
                    </button>
                </form>
            </div>
            <style type="text/css">
                .ya-page_js_yes .ya-site-form_inited_no {
                    display: none;
                }

                .ya-site-form__submit {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 44px;
                    height: 42px;
                    border: 1px solid $border;
                    border-left: 0;
                    background-color: rgba(96%, 92%, 2%, 1);
                    cursor: pointer;
                }

                .ya-site-form__submit svg {
                    width: 22px;
                    height: 22px;
                }

                .ya-site-form {
                    display: flex;
                    flex: 1 1 auto;
                    height: 100%;
                }

                .search-wrap {
                    width: 100%;
                }

                .ya-s {
                    height: 50px !important;
                    padding-right: 0;
                }

            </style>
            <div class="search-results"></div>
        </div>
        <div class="shop-info">
            <a href="{{ URL::to('compare') }}" class="compare">
                <span id="compare">Сравнить (0)</span>
            </a>
            <a href="{{ URL::to('cart') }}" class="cart">
                <div class="circle"></div>
                <img src="/svg/cart.svg" alt="cart">
                <span>0,00 ₽</span>
            </a>
            <a href="{{ URL::to('tracks') }}" class="tracks">
                <span id="tracks">Трекинг</span>
            </a>
            <div class="cart-products">
                <div class="empty">Ваша корзина пуста</div>
            </div>
        </div>
    </div>
</div>
<script>
    const session = '{{ session()->getId() }}';

    const compareMessage =
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 591.6 591.6"><path d="M540.6,0H153c-28.152,0-51,22.848-51,51v51H51c-28.152,0-51,22.848-51,51v387.6c0,28.152,22.848,51,51,51h387.6 c28.152,0,51-22.848,51-51v-51h51c28.152,0,51-22.848,51-51V51C591.6,22.848,568.752,0,540.6,0z M469.2,540.6 c0,16.932-13.668,30.6-30.6,30.6H51c-16.932,0-30.6-13.668-30.6-30.6V153c0-16.932,13.668-30.6,30.6-30.6h387.6 c16.932,0,30.6,13.668,30.6,30.6V540.6z M571.2,438.6c0,16.932-13.668,30.6-30.6,30.6h-51V153c0-28.152-22.848-51-51-51H122.4V51 c0-16.932,13.668-30.6,30.6-30.6h387.6c16.932,0,30.6,13.668,30.6,30.6V438.6z"/><path d="M193.8,147.9H51c-2.856,0-5.1,2.244-5.1,5.1v142.8c0,2.856,2.244,5.1,5.1,5.1s5.1-2.244,5.1-5.1V158.1h137.7 c2.856,0,5.1-2.244,5.1-5.1S196.656,147.9,193.8,147.9z"/><path d="M438.6,392.7c-2.856,0-5.1,2.244-5.1,5.1v137.7H295.8c-2.856,0-5.1,2.244-5.1,5.1c0,2.856,2.244,5.1,5.1,5.1h142.8 c2.856,0,5.1-2.244,5.1-5.1V397.8C443.7,394.944,441.456,392.7,438.6,392.7z"/></svg>';

    const bookmarkMessage =
        '<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path></svg>';

    var debounce = function (func, wait, immediate) {
        var timeout;
        return function () {
            var context = this,
                args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) {
                    func.apply(context, args);
                }
            };
            if (immediate && !timeout) {
                func.apply(context, args);
            }

            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    };
    var formatter = new Intl.NumberFormat('ru-RU', {
        style: 'currency',
        currency: 'RUB',
        minimumFractionDigits: 2,
    });

    var priceStyle = new Intl.NumberFormat('ru-RU', {
        style: 'decimal',
        currency: 'RUB',
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
    });

    var searchWidth = $('.search-wrap')
        .width();
    $('.search-results')
        .css('width', searchWidth);
    $(window)
        .resize(function () {
            var searchWidth = $('.search-wrap')
                .width();
            $('.search-results')
                .css('width', searchWidth);
        });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]')
                .attr('content')
        }
    });
    /*
    $('.search-wrap input').on('focusout', function(e) {
        setTimeout(function() {
            $(this).val('');
            $('.search-results').empty();
            $('.search-results').css('display', 'none');
        }, 200);
    });
    $('.search-wrap input').on('keyup', debounce(function(e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var query = $(this).val();
        let load = 1;
        $.ajax({
 url: '/searchProducts',
 method: 'POST',
 data: {
                search: query,
            },
            dataType: 'JSON',
 success: function(response) {
                if (response.success == true) {
                    $('.search-results').empty();
                    //$('.search-results').css('display', 'flex');
                    if (response.results.length > 0) {
                        for (i = 0; i < response.results.length; i++) {
                            $('.search-results').append('<a href="/' + response.results[i].url + '" id="product_found_' + i + '"></a>');
                            $('<div class="image-wrap"></div>').appendTo('#product_found_' + i);
                            $('<div class="info"></div>').appendTo('#product_found_' + i);
                            $('<img class="b-lazy" src="/svg/placeholder.svg" data-src="' + response.results[i].image + '" alt="' + response.results[i].name + '" />').appendTo('#product_found_' + i + ' .image-wrap');
                            $('<div class="name">' + response.results[i].name + '</div>').appendTo('#product_found_' + i + ' .info');
                            $('<div class="sku">' + response.results[i].first_sku + '</div>').appendTo('#product_found_' + i + ' .info');
                            if (response.results[i].sku_code_price != '0,00 ₽') {
                                $('<div class="price">' + response.results[i].sku_code_price + '</div>').appendTo('#product_found_' + i + ' .info');
                            } else {
                                $('<div class="price">Цена по запросу</div>').appendTo('#product_found_' + i + ' .info');
                            }
                        }
                        $('.search-results .name').each(function() {
                            var text = $(this).text();
                            var txt = text.replace(new RegExp(query, 'gi'), function(str) {
                              return "<span class='highlight'>" + str + "</span>"
                            });
                            $(this).html(txt);
                        });
                    }
                    var bLazy = new Blazy();
                }
            },
            error: function(response) {
                console.log(query);
            }
        });
    }, 500));
    */
    function deleteItem(id, line) {
        document.querySelector('#i' + line)
            .remove();
        let total = 0.00;
        document.querySelectorAll('.product-item')
            .forEach(function (item) {
                let amount = item.querySelector(' .amount input')
                    .value;
                total += parseFloat(item.querySelector(' .price')
                    .getAttribute('data-price')) * amount;
            });
        document.querySelector('.total-price > .price')
            .innerHTML = priceStyle.format(total) + ' ₽';
        document.querySelector('.shop-info .cart > span')
            .innerHTML = priceStyle.format(total) + ' ₽';
        $('.shop-info .cart .circle')
            .html(document.querySelectorAll('.product-item')
                .length);
        if (document.querySelectorAll('.product-item')
            .length < 1) {
            $('.cart-products')
                .html('<div class="empty">Ваша корзина пуста</div>');
            $('.shop-info .cart .circle')
                .css('display', 'none');
        }
        axios.delete('/api/cart/' + id);
    }

    function syncCompare() {
        axios.get('/api/compare/' + session)
            .then(function (success) {
                success.data.forEach(function (id) {
                    if (document.querySelector('.bottom .compare[data-product-id="' + id + '"]')) {
                        document.querySelector('.bottom .compare[data-product-id="' + id + '"]')
                            .classList
                            .add('selected');
                    }
                    if (document.querySelector('.grid-cv .compare[data-product-id="' + id + '"]')) {
                        document.querySelector('.grid-cv .compare[data-product-id="' + id + '"]')
                            .classList
                            .add('selected');
                    }
                    if (document.querySelector('.cvl-wrap > .compare')) {
                        document.querySelector('.cvl-wrap > .compare')
                            .classList.add('selected');
                    }
                });
                let quantity = success.data.length;
                document.getElementById('compare')
                    .innerHTML = 'Сравнить (' + quantity + ')';
                if (quantity > 0) {
                    document.getElementById('compare')
                        .style.color = 'black';
                    document.getElementById('compare')
                        .innerHTML = '<strong>' + document.getElementById('compare')
                        .innerHTML + '</strong>';
                }
                document.getElementById('compare')
                    .parentElement.setAttribute('href', '/compare/' + success.data
                        .join(','));
            });
    }

    function syncBookmark() {
        axios.get('/api/bookmark/' + session)
            .then(function (success) {
                success.data.forEach(function (id) {
                    if (document.querySelector('.bottom .bookmark[data-product-id="' + id + '"]')) {
                        document.querySelector('.bottom .bookmark[data-product-id="' + id + '"]')
                            .classList
                            .add('selected');
                    }
                    if (document.querySelector('.grid-cv .bookmark[data-product-id="' + id + '"]')) {
                        document.querySelector('.grid-cv .bookmark[data-product-id="' + id + '"]')
                            .classList
                            .add('selected');
                    }
                    if (document.querySelector('.cvl-wrap > .bookmark')) {
                        document.querySelector('.cvl-wrap > .bookmark')
                            .classList.add('selected');
                    }
                });
                let quantity = success.data.length;
                document.getElementById('bookmark')
                    .innerHTML = 'Отложить (' + quantity + ')';
                if (quantity > 0) {
                    document.getElementById('bookmark')
                        .style.color = 'black';
                    document.getElementById('bookmark')
                        .innerHTML = '<strong>' + document.getElementById('bookmark')
                        .innerHTML + '</strong>';
                }
                document.getElementById('bookmark')
                    .parentElement.setAttribute('href', '/bookmark/' + success.data
                        .join(','));
            });
    }

    function syncCart() {
        axios.get('/api/cart/' + session)
            .then(function (success) {
                $('.cart-products')
                    .empty();
                let product = [],
                    totalPrice = 0.00,
                    price = [],
                    amount = [],
                    code = [];
                data = success.data;
                data.forEach(function (item, i) {
                    totalPrice += parseFloat(item.price / item.currency.nominal * item.currency.value * item
                        .quantity);
                    $('<div id=i' + i + ' class="product-item"></div>')
                        .appendTo('.cart-products');
                    $('<div class="img-wrap"></div>')
                        .appendTo('#i' + i + '');
                    $('<div class="product-short-info"></div>')
                        .appendTo('#i' + i + '');
                    $('<div class="amount"></div>')
                        .appendTo('#i' + i + '');
                    $('<div class="delete-wrap"></div>')
                        .appendTo('#i' + i + '');
                    $('<img onerror="this.src =\'/svg/placeholder.svg\'" src="' + item.image + '" alt="' +
                            item.name + '">')
                        .appendTo('#i' + i + ' .img-wrap');
                    $('<div class="name"></div>')
                        .appendTo('#i' + i + ' .product-short-info');
                    $('<div class="code"></div>')
                        .appendTo('#i' + i + ' .product-short-info');
                    $('<div data-price="' + item.price / item.currency.nominal * item.currency.value +
                            '" class="price"></div>')
                        .appendTo('#i' + i + ' .product-short-info');
                    if (item.currency.id != 1) {
                        $('<div data-currency="' + item.currency.char_code + '" data-price="' + item.price +
                                '" class="price-origin"></div>')
                            .appendTo('#i' + i + ' .product-short-info');
                    }
                    $('<label><input onkeyup="changeItemQuantity(' + item.id + ', this.value, ' + i +
                            ')" type="number" value="' + item.quantity + '">шт.</label>')
                        .appendTo('#i' +
                            i + ' .amount');
                    $('<div onclick="deleteItem(' + item.id + ', ' + i +
                            ')" class="delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357 357"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"/></svg></div>'
                        )
                        .appendTo('#i' + i + ' .delete-wrap');
                    $('#i' + i + ' .name')
                        .append('<a href="/' + item.url + '">' + item.name + '</a>');
                    $('#i' + i + ' .code')
                        .append(item.code);
                    $('#i' + i + ' .price')
                        .append(priceStyle.format(item.price / item.currency.nominal *
                            item.currency.value * item.quantity) + ' ₽');
                    if (item.currency.id != 1) {
                        $('#i' + i + ' .price-origin')
                            .append(priceStyle.format(item.price * item
                                .quantity) + ' ' + item.currency.char_code);
                    }
                })
                $('<div class="total-price"></div>')
                    .appendTo('.cart-products');
                $('<div class="total">Общая сумма</div>')
                    .appendTo('.total-price');
                $('<div class="price">' + priceStyle.format(totalPrice) + ' ₽</div>')
                    .appendTo('.total-price');
                $('<div class="go-to-cart-wrap"></div>')
                    .appendTo('.cart-products');
                $('<a class="go-to-cart" href="/cart">Перейти в корзину</a>')
                    .appendTo('.go-to-cart-wrap');
                if (data.length > 0) {
                    $('.shop-info .cart .circle')
                        .css('display', 'flex');
                    $('.shop-info .cart .circle')
                        .html(data.length);
                } else {
                    $('.shop-info .cart .circle')
                        .css('display', 'none');
                }
                $('.shop-info .cart span')
                    .html(priceStyle.format(totalPrice) + ' ₽');
                if (data.length < 1) {
                    $('.cart-products')
                        .html('<div class="empty">Ваша корзина пуста</div>');
                }
            }, function (error) {
                console.error(error);
            });
    }

    function quickAddToCart(element) {
        axios.put('/api/cart', {
                product_id: element.getAttribute('data-product-id'),
                price: element.getAttribute('data-price'),
                quantity: 1,
                code: element.getAttribute('data-code'),
                session: session,
            })
            .then(function (success) {
                $('.cart-products')
                    .empty();
                let product = [],
                    totalPrice = 0.00,
                    price = [],
                    amount = [],
                    code = [];
                data = success.data;
                data.forEach(function (item, i) {
                    totalPrice += parseFloat(item.price / item.currency.nominal * item.currency.value * item
                        .quantity);
                    $('<div id=i' + i + ' class="product-item"></div>')
                        .appendTo('.cart-products');
                    $('<div class="img-wrap"></div>')
                        .appendTo('#i' + i + '');
                    $('<div class="product-short-info"></div>')
                        .appendTo('#i' + i + '');
                    $('<div class="amount"></div>')
                        .appendTo('#i' + i + '');
                    $('<div class="delete-wrap"></div>')
                        .appendTo('#i' + i + '');
                    $('<img onerror="this.src =\'/svg/placeholder.svg\'" src="' + item.image + '" alt="' +
                            item.name + '">')
                        .appendTo('#i' + i + ' .img-wrap');
                    $('<div class="name"></div>')
                        .appendTo('#i' + i + ' .product-short-info');
                    $('<div class="code"></div>')
                        .appendTo('#i' + i + ' .product-short-info');
                    $('<div data-price="' + item.price / item.currency.nominal * item.currency.value +
                            '" class="price"></div>')
                        .appendTo('#i' + i + ' .product-short-info');
                    if (item.currency.id != 1) {
                        $('<div data-currency="' + item.currency.char_code + '" data-price="' + item.price +
                                '" class="price-origin"></div>')
                            .appendTo('#i' + i + ' .product-short-info');
                    }
                    $('<label><input onkeyup="changeItemQuantity(' + item.id + ', this.value, ' + i +
                            ')" type="number" value="' + item.quantity + '">шт.</label>')
                        .appendTo('#i' +
                            i + ' .amount');
                    $('<div onclick="deleteItem(' + item.id + ', ' + i +
                            ')" class="delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357 357"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"/></svg></div>'
                        )
                        .appendTo('#i' + i + ' .delete-wrap');
                    $('#i' + i + ' .name')
                        .append('<a href="/' + item.url + '">' + item.name + '</a>');
                    $('#i' + i + ' .code')
                        .append(item.code);
                    $('#i' + i + ' .price')
                        .append(priceStyle.format(item.price / item.currency.nominal *
                            item.currency.value * item.quantity) + ' ₽');
                    if (item.currency.id != 1) {
                        $('#i' + i + ' .price-origin')
                            .append(priceStyle.format(item.price * item
                                .quantity) + ' ' + item.currency.char_code);
                    }
                })
                if (data.length > 0) {
                    $('.shop-info .cart .circle')
                        .css('display', 'flex');
                    $('.shop-info .cart .circle')
                        .html(data.length);
                } else {
                    $('.shop-info .cart .circle')
                        .css('display', 'none');
                }
                $('#global-message')
                    .remove();
                $('<div id="global-message"><svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 446.853 446.853"><path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708 c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179 c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591 l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916 c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012 s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675 c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432 c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221 c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814 c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117 S337.916,409.814,327.373,409.814z"></path></svg>Товар добавлен в корзину</div>')
                    .appendTo('main');
                $('<div class="total-price"></div>')
                    .appendTo('.cart-products');
                $('<div class="total">Общая сумма</div>')
                    .appendTo('.total-price');
                $('<div class="price">' + priceStyle.format(totalPrice) + ' ₽</div>')
                    .appendTo('.total-price');
                $('<div class="go-to-cart-wrap"></div>')
                    .appendTo('.cart-products');
                $('<a class="go-to-cart" href="/cart">Перейти в корзину</a>')
                    .appendTo('.go-to-cart-wrap');
                $('.shop-info .cart span')
                    .html(priceStyle.format(totalPrice) + ' ₽');
            }, function (error) {
                console.error(error);
            });
    }

    function changeItemQuantity(id, quantity, line) {
        let unit_price = document.querySelector('#i' + line + ' .price')
            .getAttribute('data-price');
        let check = document.querySelector('#i' + line + ' .price-origin');
        if (check) {
            let unit_origin_price = document.querySelector('#i' + line + ' .price-origin')
                .getAttribute('data-price'),
                currency = document.querySelector('#i' + line + ' .price-origin')
                .getAttribute('data-currency');
            document.querySelector('#i' + line + ' .price-origin')
                .innerHTML = priceStyle.format(unit_origin_price *
                    quantity) + ' ' + currency;
        }
        document.querySelector('#i' + line + ' .price')
            .innerHTML = priceStyle.format(unit_price * quantity) + ' ₽';
        let total = 0.00;
        document.querySelectorAll('.product-item')
            .forEach(function (item) {
                let amount = item.querySelector(' .amount input')
                    .value;
                total += parseFloat(item.querySelector(' .price')
                    .getAttribute('data-price')) * amount;
            });
        document.querySelector('.total-price > .price')
            .innerHTML = priceStyle.format(total) + ' ₽';
        document.querySelector('.shop-info .cart > span')
            .innerHTML = priceStyle.format(total) + ' ₽';
        axios.patch('/api/cart/' + id, {
            quantity: quantity,
        });
    }

    function quickAddToCompare(element) {
        let name = element.parentElement.parentElement.parentElement.querySelector('.title span')
            .innerHTML;
        let product_id = element.getAttribute('data-product-id');
        if (element.classList.contains('selected')) {
            document.querySelector('.bottom .compare[data-product-id="' + product_id + '"]')
                .classList.remove(
                    'selected');
            document.querySelector('.grid-cv .compare[data-product-id="' + product_id + '"]')
                .classList.remove(
                    'selected');
            document.getElementById('global-message') ? document.getElementById('global-message')
                .remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = compareMessage + '<div>"' + name + '" удален из списка для сравнения</div>';
            document.querySelector('main')
                .appendChild(message);
        } else {
            document.querySelector('.bottom .compare[data-product-id="' + product_id + '"]')
                .classList.add('selected');
            document.querySelector('.grid-cv .compare[data-product-id="' + product_id + '"]')
                .classList.add('selected');
            document.getElementById('global-message') ? document.getElementById('global-message')
                .remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = compareMessage + '<div>"' + name + '" добавлен в список для сравнения</div>';
            document.querySelector('main')
                .appendChild(message);
        }
        axios.put('/api/compare', {
                id: product_id,
                session: session,
            })
            .then(function (success) {
                let quantity = success.data.length;
                document.getElementById('compare')
                    .innerHTML = 'Сравнить (' + quantity + ')';
                document.getElementById('compare')
                    .parentElement.setAttribute('href', '/compare/' + success.data
                        .join(','));
                if (quantity > 0) {
                    document.getElementById('compare')
                        .style.color = 'black';
                    document.getElementById('compare')
                        .innerHTML = '<strong>' + document.getElementById('compare')
                        .innerHTML + '</strong>';
                }
            }, function (error) {
                console.error(error);
            });
    };

    function quickAddToBookmark(element) {
        let name = element.parentElement.parentElement.parentElement.querySelector('.title span')
            .innerHTML;
        let product_id = element.getAttribute('data-product-id');
        if (element.classList.contains('selected')) {
            document.querySelector('.bottom .bookmark[data-product-id="' + product_id + '"]')
                .classList.remove(
                    'selected');
            document.querySelector('.grid-cv .bookmark[data-product-id="' + product_id + '"]')
                .classList.remove(
                    'selected');
            document.getElementById('global-message') ? document.getElementById('global-message')
                .remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = bookmarkMessage + '<div>"' + name + '" удален из отложенных товаров</div>';
            document.querySelector('main')
                .appendChild(message);
        } else {
            document.querySelector('.bottom .bookmark[data-product-id="' + product_id + '"]')
                .classList.add('selected');
            document.querySelector('.grid-cv .bookmark[data-product-id="' + product_id + '"]')
                .classList.add(
                    'selected');
            document.getElementById('global-message') ? document.getElementById('global-message')
                .remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = bookmarkMessage + '<div>"' + name + '" добавлен в отложенные товары</div>';
            document.querySelector('main')
                .appendChild(message);
        }
        axios.put('/api/bookmark', {
                id: product_id,
                session: session,
            })
            .then(function (success) {
                let quantity = success.data.length;
                document.getElementById('bookmark')
                    .innerHTML = 'Отложить (' + quantity + ')';
                document.getElementById('bookmark')
                    .parentElement.setAttribute('href', '/bookmark/' + success.data
                        .join(','));
                if (quantity > 0) {
                    document.getElementById('bookmark')
                        .style.color = 'black';
                    document.getElementById('bookmark')
                        .innerHTML = '<strong>' + document.getElementById('bookmark')
                        .innerHTML + '</strong>';
                }
            }, function (error) {
                console.error(error);
            });
    };

    syncCart();
    syncCompare();
    syncBookmark();

</script>
