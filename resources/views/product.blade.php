@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    @foreach ($breadcrumb as $key => $bc)
        <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="{{ URL::to($bc['url']) }}"><span itemprop="name">{{ $bc['name'] }}</span></a>
            <meta itemprop="position" content="{{ ($key + 1) }}">
            <span>|</span>
        </div>
    @endforeach
</div>
<div class="product-wrap" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="category" content="{{ $metaCategory }}">
    <meta itemprop="brand" content="{{ $product->brand_name }}">
    <div class="product">
        <div class="top">
            <h1 itemprop="name">{{ $product->name }}</h1>
            <div class="print-button">
                <button onclick="window.print();"><svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.212"><path d="M121.305,30.327h242.604v60.651h30.327V30.327C394.236,13.595,380.674,0,363.909,0H121.305    c-16.731,0-30.327,13.595-30.327,30.327v60.651h30.327V30.327z" /><path d="M454.89,121.304H30.328c-16.731,0-30.327,13.591-30.327,30.324v151.629c0,16.764,13.595,30.327,30.327,30.327h60.651    v121.302c0,16.764,13.595,30.326,30.327,30.326h242.604c16.765,0,30.327-13.562,30.327-30.326V333.584h60.653    c16.759,0,30.322-13.563,30.322-30.327V151.628C485.212,134.895,471.648,121.304,454.89,121.304z M363.909,454.886H121.305    v-212.28h242.604V454.886z M424.562,212.282c-16.764,0-30.326-13.564-30.326-30.327c0-16.731,13.562-30.327,30.326-30.327    c16.765,0,30.327,13.595,30.327,30.327C454.89,198.717,441.327,212.282,424.562,212.282z" /><rect x="151.629" y="272.93" width="121.304" height="30.327" /><rect x="151.629" y="333.584" width="181.958" height="30.321" /><rect x="151.629" y="394.237" width="181.958" height="30.322" /></svg><span>Распечатать</span></button>
            </div>
        </div>
        <div class="main-info" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            <div class="slider-wrap">
                <div class="carousel carousel-main" data-flickity='{ "prevNextButtons": false, "lazyLoad": true, "wrapAround": true, "pageDots": false, "imagesLoaded": true }'>
                    @if (!empty($img))
                        @foreach ($img as $key => $image)
                            <div class="carousel-cell">
                                <a href="{{ url($image->path) }}" data-fancybox="images">
                                    <img @if($key == 0) itemprop="image" @endif class="carousel-cell-image b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($image->path) }}" alt="{{ $product->name.' '.($key + 1) }}">
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="carousel-cell">
                            <a href="{{ url('/svg/placeholder.svg') }}" data-fancybox="images">
                                <img class="carousel-cell-image placeholder-svg" src="{{ url('/svg/placeholder.svg') }}" alt="{{ $product->name }}">
                            </a>
                        </div>
                    @endif
                </div>
                @if (!empty($img) && count($img) > 1)
                    <div class="carousel carousel-nav" data-flickity='{ "prevNextButtons": false, "cellAlign": "left", "imagesLoaded": true, "asNavFor": ".carousel-main", "wrapAround": true, "pageDots": false, "groupCells": "100%" }'>
                        @foreach ($img as $key => $image)
                            <div class="carousel-cell">
                                <img class="carousel-cell-image b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($image->path) }}" alt="Slider {{ $key + 1 }}">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="preview">
                @if ($product->short_description)
                <div class="text">{!! $product->short_description !!}</div>
                @endif
                @if ($product->sticker_text)
                <div class="sticker" style="background:{{ $product->sticker_color }};">{{ $product->sticker_text }}</div>
                @endif
                <div class="brand">
                    <a href="{{ URL::to('brand/'.$product->brand_url) }}"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url(''.$product->brand_image) }}" alt="{{ $product->brand_name }}"></a>
                </div>
                <div class="additional-info">
                    @if ($product->in_stock === null || $product->in_stock > 0)
                        <div class="in-stock"><span class="in-stock-icon"></span>В наличии</div>
                        <link itemprop="availability" href="http://schema.org/InStock">
                    @elseif ($product->in_stock === 0)
                        <div class="preorder"><span class="preorder-icon"></span>Под заказ</div>
                        <link itemprop="availability" href="http://schema.org/PreOrder">
                    @endif
                    @if ($product->production)
                        <div class="production"><span class="production-icon"></span>Срок изготовления {{ $product->production }}</div>
                    @endif
                    @if ($product->delivery)
                        <div class="delivery-city"><span class="delivery-city-icon"></span>{{ $product->delivery }}</div>
                    @endif
                </div>
            </div>
            <div class="shop">
                <div class="product-code">
                    Код товара: <span id="sku">{{ $product->sku }}</span><br>
                    <div class="code">
                        <span>Артикул:</span>
                        <div id="code" data-price="{{ $product->price }}">{{ $product->sku_code }}</div>
                    </div>
                </div>
                <div class="price-block">
                <meta itemprop="priceCurrency" content="{{ $product->currency }}" />
                @if ($product->old_price != 0)
                    @if($product->currency != 'RUB')
                        <div id="old-price">{{ $product->old_price }} {{ $product->currency }}</div>
                    @else
                        <div id="old-price">{{ $product->old_price }} ₽</div>
                    @endif
                @endif
                @if ($product->price == 0)
                    <div id="price-empty" data-price="{{ $product->price }}">Цена по запросу</div>
                @else
                    <div class="price-wrap">
                        <div id="price" itemprop="price" content="{{ number_format($product->price * ($product->currency_value/$product->currency_nominal), 2, '.', '') }}" data-price="{{ number_format($product->price * ($product->currency_value/$product->currency_nominal), 2, '.', '') }}">
                            {{ number_format($product->price *($product->currency_value/$product->currency_nominal), 2, ',', ' ') }}
                        </div>
                        <span>₽</span>
                    </div>
                    <div class="price-usd-wrap @if($product->currency == 'RUB') hidden @endif">
                        <div id="price-USD" data-price="{{ number_format($product->price, 2, '.', '') }}">{{ number_format($product->price, 2, ',', ' ') }}</div>
                        <span>{{ $product->currency }}</span>
                    </div>
                @endif
                </div>
                <div class="cart-wrap">
                    @if ($product->price == 0)
                        @if ($product->can_buy)
                            <a href="mailto:{{ $contacts->email }}?subject=Запрос на код товара {{ $product->sku_code }}&body=Добрый день!%0D%0AПрошу выставить счет на {{ $product->name }} ({{ $product->sku }}), код товара {{ $product->sku_code }}, штук: %0D%0AКонтактный телефон:%0D%0AДоставка:" class="request-price">Запросить счет</a>
                        @else
                            <a class="request-price @if(!$product->can_buy)disabled @endif">Запросить счет</a>
                        @endif
                    @else
                        <button onclick="decreaseQuantity()" class="decreaseVal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="315.869,21.178 294.621,0 91.566,203.718 294.621,407.436 315.869,386.258 133.924,203.718 "/></svg></button>
                        <input id="amount" onkeyup="changeQuantity()" name="amount" type="number" value="1" min="1">
                        <button onclick="increaseQuantity()" class="increaseVal last"><svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.436 407.436"><polygon points="112.814,0 91.566,21.178 273.512,203.718 91.566,386.258 112.814,407.436 315.869,203.718 "/></svg></button>
                        <div class="btn-wrap">
                            <button onclick="addToCart(this)" data-product-id="{{ $product->id }}" id="cart">Купить<span><svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 446.853 446.853"><path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708
                            c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179
                            c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591
                            l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916
                            c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012
                            s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675
                            c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432
                            c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221
                            c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814
                            c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z
                             M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117
                            S337.916,409.814,327.373,409.814z"/></svg></span></button>
                        </div>
                    @endif
                </div>
                <div class="action-required">Выберите параметры в конфигураторе заказа</div>
                <div class="tax">Цена указана с НДС</div>
                <div class="cvl-wrap">
                    <div onclick="addToCompare(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price }}" data-code="{{ $product->sku_code }}" class="compare">
                        <span>Сравнить</span>
                    </div>
                    <div onclick="addToBookmark(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price }}" data-code="{{ $product->sku_code }}" class="bookmark">
                        <span>Отложить</span>
                    </div>
                </div>
                <div class="email-contact">
                    <p>
                        @if ($product->price == 0)
                            Запросить цену
                        @else
                            Заявки отправлять
                        @endif
                    </p>
                    <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
                </div>
            </div>
        </div>
    </div>
    @if (!empty($modifications[0]))
    <div class="configurator">
        <div class="options-head">
            <div class="head-wrap">
                <h2>Конфигуратор заказа</h2>
            </div>
            <div class="progress">
                <div class="title">Осталось заполнить</div>
                <div class="percent">
                    <span>0%</span>
                    <span>50%</span>
                    <span>100%</span>
                </div>
                <div class="progress-bar">
                    <span id="bar"></span>
                </div>
            </div>
        </div>
        <div class="options-code">
            <div class="opt-code">
                <span>Код товара:</span>
                @foreach ($modifications as $key => $code)
                    <div id="code_id_{{ $key + 1 }}"></div>
                @endforeach
            </div>
        </div>
        <div class="options">
            @foreach ($modifications as $key => $group)
                <div class="option-wrap">
                    <div class="name">{{ $group->name }}</div>
                    <select onchange="buildCode(this, 'code_id_{{ $key + 1 }}')">
                        <option disabled selected>- Выбрать -</option>
                        @foreach ($group->options as $value)
                            @if($group->id == $value->calc_group_id)
                                <option value="{{ $value->code }}">{{ $value->code }} - {{ $value->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    <div class="more {{ !empty($accessories[0]) ? 'with-accessories' : '' }}">
        <div class="product-info-wrap">
            <div class="product-info-mobile">
                <div class="section-title">
                    <div class="accordion-expand"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.437 407.437"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>
                    <span>Описание</span>
                </div>
                <div class="section description">
                    <div class="tab-scroll">
                        {!! $product->description !!}
                    </div>
                    <div class="scroll-fix"></div>
                    @if ($tags)
                        <div class="tags">
                            @foreach ($tags as $tag)
                                @if ($loop->last)
                                    <a href="{{ URL::to($tag) }}">{{ $tag }}</a>
                                @else
                                    <a href="{{ URL::to($tag) }}">{{ $tag }},</a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="section-title">
                    <div class="accordion-expand"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.437 407.437"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>
                    <span>Характеристики</span>
                </div>
                <div class="section info">
                    <div class="tab-scroll">
                        <table class="info-table">
                            <tbody>
                                <tr>
                                    <td>Код товара:</td>
                                    <td>{{ $product->sku_code }}</td>
                                </tr>
                                @foreach ($txtOpts as $name => $option)
                                    <tr>
                                        <td>{{ $name }}</td>
                                        <td>{{ $option }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="scroll-fix"></div>
                    @if ($tags)
                        <div class="tags">
                            @foreach ($tags as $tag)
                                @if ($loop->last)
                                    <a href="{{ URL::to($tag) }}">{{ $tag }}</a>
                                @else
                                    <a href="{{ URL::to($tag) }}">{{ $tag }},</a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
                @if (!empty($files))
                <div class="section-title">
                    <div class="accordion-expand"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.437 407.437"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>
                    <span>Документы</span>
                </div>
                <div class="section">
                    <div class="tab-scroll">
                        @foreach ($files as $file)
                            @if ($file['image'])
                                <div class="files">
                                    <a data-fancybox data-type="image" data-src="{{ url($file['path']) }}" href="javascript:;"><img src="{{ url('/svg/ext_'.$file['ext'].'.svg') }}" alt="{{ $file['name'] }}">{{ $file['name'] }}</a>
                                </div>
                            @else
                                <div class="files">
                                    <a data-fancybox data-type="iframe" data-src="{{ url($file['path']) }}" href="javascript:;"><img src="{{ url('/svg/ext_'.$file['ext'].'.svg') }}" alt="{{ $file['name'] }}">{{ $file['name'] }}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="scroll-fix"></div>
                    @if ($tags)
                        <div class="tags">
                            @foreach ($tags as $tag)
                                @if ($loop->last)
                                    <a href="{{ URL::to($tag) }}">{{ $tag }}</a>
                                @else
                                    <a href="{{ URL::to($tag) }}">{{ $tag }},</a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
                @endif
                @foreach ($tabs as $tab)
                <div class="section-title">
                    <div class="accordion-expand"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.437 407.437"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>
                    <span>{{ $tab->name }}</span>
                </div>
                <div class="section">
                    <div class="tab-scroll custom">
                        {!! $tab->body !!}
                    </div>
                    <div class="scroll-fix"></div>
                    @if ($tags)
                        <div class="tags">
                            @foreach ($tags as $tag)
                                @if ($loop->last)
                                    <a href="{{ URL::to($tag) }}">{{ $tag }}</a>
                                @else
                                    <a href="{{ URL::to($tag) }}">{{ $tag }},</a>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
                @endforeach
            </div>
            <a href="mailto:{{ $contacts->email }}" class="ask-question-mobile">Задать вопрос</a>
            <div class="product-info">
                <ul class="tabs">
                    <li><a href="#description">Описание</a></li>
                    <li><a href="#info">Характеристики</a></li>
                    @if (!empty($files))
                    <li><a href="#documents">Документы</a></li>
                    @endif
                    @foreach ($tabs as $tab)
                        <li><a href="#{{ $tab->url }}">{{ $tab->name }}</a></li>
                    @endforeach
                </ul>
                <a href="mailto:{{ $contacts->email }}" class="ask-question">Задать вопрос</a>
                <hr>
                <div id="description" class="section" itemprop="description">
                    <div class="tab-scroll">
                        {!! $product->description !!}
                    </div>
                    <div class="scroll-fix"></div>
                </div>
                <div id="info" class="section">
                    <div class="tab-scroll">
                        <table class="info-table">
                            <tbody>
                                <tr>
                                    <td>Код товара:</td>
                                    <td>{{ $product->sku_code }}</td>
                                </tr>
                                @foreach ($txtOpts as $name => $option)
                                    <tr>
                                        <td>{{ $name }}</td>
                                        <td>{{ $option }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="scroll-fix"></div>
                </div>
                @if (!empty($files))
                <div id="documents" class="section">
                    <div class="tab-scroll">
                        @foreach ($files as $file)
                            @if ($file['image'])
                                <div class="files">
                                    <a data-fancybox data-type="image" data-src="{{ url($file['path']) }}" href="javascript:;"><img src="{{ url('/svg/ext_'.$file['ext'].'.svg') }}" alt="{{ $file['name'] }}">{{ $file['name'] }}</a>
                                </div>
                            @else
                                <div class="files">
                                    <a data-fancybox data-type="iframe" data-src="{{ url($file['path']) }}" href="javascript:;"><img src="{{ url('/svg/ext_'.$file['ext'].'.svg') }}" alt="{{ $file['name'] }}">{{ $file['name'] }}</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="scroll-fix"></div>
                </div>
                @endif
                @foreach ($tabs as $tab)
                <div id="{{ $tab->url }}" class="section">
                    <div class="tab-scroll custom">
                        {!! $tab->body !!}
                    </div>
                    <div class="scroll-fix"></div>
                </div>
                @endforeach
                @if ($tags)
                    <div class="tags">
                        @foreach ($tags as $tag)
                            @if ($loop->last)
                                <a href="{{ URL::to($tag) }}">{{ $tag }}</a>
                            @else
                                <a href="{{ URL::to($tag) }}">{{ $tag }},</a>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        @if (!empty($accessories[0]))
        <aside class="accessories-wrap">
            <div class="accessories short">
                <h2>Аксессуары</h2>
                @foreach ($accessories as $accessory)
                    <div class="product">
                        <a href="{{ URL::to($accessory->url) }}" class="img-wrap">
                            <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($accessory->image) }}" alt="{{ $accessory->name }}">
                        </a>
                        <div class="product-overview">
                            <a href="{{ URL::to($accessory->url) }}" class="text">{{ $accessory->name }}</a>
                            <div class="shop-wrap">
                                @if ($accessory->price == 0)
                                <div>Цена по запросу</div>
                                @else
                                    @if($accessory->currency != 'RUB')
                                        <div class="s-price-usd-wrap">
                                            <div class="s-price-usd">{{ number_format($accessory->price, 2, ',', ' ') }}</div><span>{{ $accessory->currency }}</span>
                                        </div>
                                        <button onclick="quickAddToCart(this)" data-product-id="{{ $accessory->id }}" data-price="{{ $accessory->price/$accessory->currency_nominal*$accessory->currency_value }}" data-code="{{ $accessory->code }}"><svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 446.853 446.853"><path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708
                                        c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179
                                        c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591
                                        l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916
                                        c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012
                                        s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675
                                        c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432
                                        c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221
                                        c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814
                                        c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z
                                         M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117
                                        S337.916,409.814,327.373,409.814z"/></svg></button>
                                    @else
                                        <div class="s-price">{{ number_format($accessory->price, 2, ',', ' ') }} ₽</div>
                                        <button onclick="quickAddToCart(this)" data-product-id="{{ $accessory->id }}" data-price="{{ $accessory->price }}" data-code="{{ $accessory->code }}"><svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 446.853 446.853"><path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708
                                        c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179
                                        c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591
                                        l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916
                                        c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012
                                        s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675
                                        c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432
                                        c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221
                                        c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814
                                        c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z
                                         M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117
                                        S337.916,409.814,327.373,409.814z"/></svg></button>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                @if ((count($accessories)) > 3)
                <div class="see-more-wrap">
                    <div class="see-more"><span>Посмотреть все</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><polygon points="42,19 23,19 23,0 19,0 19,19 0,19 0,23 19,23 19,42 23,42 23,23 42,23 " /></svg></div>
                </div>
                @endif
            </div>
        </aside>
        @endif
    </div>
    @if (!empty($relatedProducts[0]))
        <div class="cross-selling-wrap">
            <h2>Сопутствующие товары</h2>
            <div class="slider-wrap">
                <div class="carousel" data-flickity='{ "prevNextButtons": true, "lazyLoad": true, "wrapAround": true, "pageDots": false }'>
                    @foreach ($relatedProducts as $product)
                        <a href="{{ URL::to($product->url) }}" class="carousel-cell cs-product">
                            <img
                                class="b-lazy"
                                src="{{ url('/svg/placeholder.svg') }}"
                                data-src="{{ url($product->image) }}"
                                alt="{{ $product->name }}"
                            >
                            <h3 title="{{ $product->name }}">{{ $product->name }}</h3>
                            <div class="code">{{ $product->sku }}</div>
                            <div class="price">
                                {{ number_format($product->price * $product->currency_value, 2, ',', ' ') }} ₽
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    @if (!empty($upselling[0]))
        <div class="up-selling-wrap">
            <h2>Аналогичные товары</h2>
            <div class="up-selling-blocks" data-flickity='{ "cellAlign": "left", "initialIndex": 3, "wrapAround": true, "pageDots": false }'>
                @foreach ($upselling as $upsProduct)
                    <div class="us-product">
                        <a href="{{ URL::to($upsProduct->url) }}" class="img-wrap">
                            <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($upsProduct->image) }}" alt="{{ $upsProduct->name }}">
                        </a>
                        <a href="{{ URL::to($upsProduct->url) }}"><h3>{{ str_limit($upsProduct->name, $limit = 60, $end = '...') }}</h3></a>
                        <div class="code">
                            Код товара: {{ $upsProduct->sku }}<br>
                            Артикул: {{ $upsProduct->code }}
                        </div>
                        <hr>
                        <div class="shop-wrap">
                            <div class="s-price">{{ number_format($upsProduct->price * $upsProduct->currency_value, 2, ',', ' ') }} ₽</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
<div class="mail-us-block">
    <img src="{{ url('/img/static/mail.png') }}" alt="Наша почта">
    <div class="text-phone">
        <div class="text">По всем интересующим вопросам можно получить подробную консультацию по телефону или оставить заявку по e-mail <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a></div>
        <div class="phone"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.product-info-mobile').accordion({
         collapsible: true,
         active : 'none',
         heightStyle: "content"
    });
});
    $('.product-info').tabs();
    var bLazy = new Blazy();
    var product_id = {{ $product->id }};
    var requiredSpecsAmount = $('.code > div').length;
    var price = 0;
    var calcAmount = {{ count($modifications) }};
    var currentAmount = 0;

    window.dataLayer = window.dataLayer || [];
    dataLayer.push({
        'ecommerce' : {
            'currencyCode': 'RUB',
            'detail' : {
                'products' : [
                    {
                      'name' : '{{ $product->name }}',
                      'id' : '{{ $product->sku }}',
                      'price' : {{ $product->price }},
                      'brand' : '{{ $product->brand_name }}',
                      'category' : '{{ $metaCategory }}'
                    }
                ]
            }
        }
    });

    function ifReady()
    {
        var filledSpecs = 0;
        $('.code > div').each(function() {
            var dataPrice = $(this).attr('data-price');
            if (typeof dataPrice !== typeof undefined && dataPrice !== false) {
                filledSpecs += 1;
            }
        });
        @if ($product->price != 0)
        if (filledSpecs == requiredSpecsAmount) {
            document.getElementById('cart').removeAttribute('disabled');
            $('#cart').removeClass('disabled-btn');
            $('.action-required').css('display', 'none');
            @if ($product->can_buy == 0) $('#cart').addClass('disabled-btn'); @endif
        } else {
            document.getElementById('cart').setAttribute('disabled', true);
            $('#cart').addClass('disabled-btn');
            $('.action-required').css('display', 'block');
        }
        @else
            var mailCode = '';
            $('.code > div').each(function() {
                mailCode += $(this).text().trim();
            });
            var mail = '{{ $contacts->email }}';
            var skuCode = '{{ $product->sku }}';
            @if ($product->can_buy)
                $('.cart-wrap a').attr('href', 'mailto:' + mail + '?subject=Запрос на ' + skuCode + ', код товара ' + mailCode + '&body=Добрый день!%0D%0AПрошу выставить счет на ' + skuCode + ', код товара ' + mailCode + ', штук: %0D%0AКонтактный телефон:%0D%0AДоставка:');
            @endif
        @endif
    };

    ifReady();

    $('.see-more').on('click', function() {
        var that = $(this).parent().parent();
        that.removeClass('short');
        $(this).unwrap();
        var bLazy = new Blazy();
        $(this).remove();
    });

    function addToCompare(element) {
        let name = '{{ $product->name }}';
        let product_id = element.getAttribute('data-product-id');
        if (element.classList.contains('selected')) {
            element.classList.remove('selected');
            document.getElementById('global-message') ? document.getElementById('global-message').remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = compareMessage + '<div>"'+ name + '" удален из списка для сравнения</div>';
            document.querySelector('main').appendChild(message);
        } else {
            element.classList.add('selected');
            document.getElementById('global-message') ? document.getElementById('global-message').remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = compareMessage + '<div>"' + name + '" добавлен в список для сравнения</div>';
            document.querySelector('main').appendChild(message);
        }
        axios.put('/api/compare', {
            id: product_id,
            session: session,
        }).then(function(success) {
            let quantity = success.data.length;
            document.getElementById('compare').innerHTML = 'Сравнить (' + quantity + ')';
            document.getElementById('compare').parentElement.setAttribute('href',  '/compare/' + success.data.join(','));
        }, function (error) {
            console.error(error);
        });
    };

    function addToBookmark(element) {
        let name = '{{ $product->name }}';
        let product_id = element.getAttribute('data-product-id');
        if (element.classList.contains('selected')) {
            element.classList.remove('selected');
            document.getElementById('global-message') ? document.getElementById('global-message').remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = bookmarkMessage + '<div>"'+ name + '" удален из списка для сравнения</div>';
            document.querySelector('main').appendChild(message);
        } else {
            element.classList.add('selected');
            document.getElementById('global-message') ? document.getElementById('global-message').remove() : '';
            let message = document.createElement('div');
            message.id = 'global-message';
            message.innerHTML = bookmarkMessage + '<div>"' + name + '" добавлен в список для сравнения</div>';
            document.querySelector('main').appendChild(message);
        }
        axios.put('/api/bookmark', {
            id: product_id,
            session: session,
        }).then(function(success) {
            let quantity = success.data.length;
            const bookmarkElement = document.getElementById('bookmark')
            if (bookmarkElement) {
                bookmarkElement.innerHTML = 'Отложить (' + quantity + ')';
                bookmarkElement.parentElement.setAttribute('href',  '/compare/' + success.data.join(','));
            }
        }, function (error) {
            console.error(error);
        });
    };

    function addToCart(element) {
        let product_id = element.getAttribute('data-product-id');
        if (!$('#cart').hasClass('disabled-btn')) {
            let fullName = document.getElementById('code').innerHTML;
            let priceRub = document.getElementById('price').getAttribute('data-price');
            let quantity = document.getElementById('amount').value;
            axios.put('/api/cart', {
                product_id: product_id,
                price: priceRub,
                quantity: quantity,
                code: fullName,
                session: session,
            }).then(function(success) {
                $('.cart-products').empty();
                let product = [],
                    totalPrice = 0.00,
                    price = [],
                    amount = [],
                    code = [];
                    data = success.data;
                data.forEach(function(item, i) {
                    totalPrice += parseFloat(item.price * (item.currency.value / item.currency.nominal) * item.quantity);
                    $('<div id=i' + i + ' class="product-item"></div>').appendTo('.cart-products');
                    $('<div class="img-wrap"></div>').appendTo('#i' + i + '');
                    $('<div class="product-short-info"></div>').appendTo('#i' + i + '');
                    $('<div class="amount"></div>').appendTo('#i' + i + '');
                    $('<div class="delete-wrap"></div>').appendTo('#i' + i + '');
                    $('<img onerror="this.src =\'/svg/placeholder.svg\'" src="' + item.image + '" alt="' + item.name + '">').appendTo('#i' + i + ' .img-wrap');
                    $('<div class="name"></div>').appendTo('#i' + i + ' .product-short-info');
                    $('<div class="code"></div>').appendTo('#i' + i + ' .product-short-info');
                    $('<div data-price="' + item.price * (item.currency.value / item.currency.nominal) + '" class="price"></div>').appendTo('#i' + i + ' .product-short-info');
                    if (item.currency.id != 1) {
                        $('<div data-currency="' + item.currency.char_code + '" data-price="' + item.price + '" class="price-origin"></div>').appendTo('#i' + i + ' .product-short-info');
                    }
                    $('<label><input onkeyup="changeItemQuantity(' + item.id + ', this.value, '+ i + ')" type="number" value="' + item.quantity + '">шт.</label>').appendTo('#i' + i + ' .amount');
                    $('<div onclick="deleteItem(' + item.id + ', ' + i + ')" class="delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357 357"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"/></svg></div>').appendTo('#i' + i + ' .delete-wrap');
                    $('#i' + i + ' .name').append('<a href="/' + item.url +'">' + item.name + '</a>');
                    $('#i' + i + ' .code').append(item.code);
                    $('#i' + i + ' .price').append(priceStyle.format(item.price * (item.currency.value / item.currency.nominal) * item.quantity) + ' ₽');
                    if (item.currency.id != 1) {
                        $('#i' + i + ' .price-origin').append(priceStyle.format(item.price * item.quantity) + ' ' + item.currency.char_code);
                    }
                })
                $('#global-message').remove();
                $('<div id="global-message"><svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 446.853 446.853"><path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708 c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179 c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591 l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916 c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012 s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675 c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432 c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221 c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814 c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117 S337.916,409.814,327.373,409.814z"></path></svg>Товар добавлен в корзину</div>').appendTo('main');
                $('<div class="total-price"></div>').appendTo('.cart-products');
                $('<div class="total">Общая сумма</div>').appendTo('.total-price');
                $('<div class="price">' + priceStyle.format(totalPrice) + ' ₽</div>').appendTo('.total-price');
                $('<div class="go-to-cart-wrap"></div>').appendTo('.cart-products');
                $('<a class="go-to-cart" href="/cart">Перейти в корзину</a>').appendTo('.go-to-cart-wrap');
                $('.shop-info .cart span').html(priceStyle.format(totalPrice) + ' ₽');
            }, function (error) {
                console.error(error);
            });
        }
    }

    function changeQuantity()
    {
        let amount = document.querySelector('.cart-wrap > input').value;
        if (amount < 1) {
            document.querySelector('.cart-wrap > input').value = 1;
            amount = 1;
        }
        let price = parseFloat(amount * document.getElementById('price').getAttribute('data-price').replace(',', '.'));
        let priceNotRub = parseFloat(amount * document.getElementById('price-USD').getAttribute('data-price').replace(',', '.'));
        document.getElementById('price').innerHTML = priceStyle.format(price);
        document.getElementById('price-USD').innerHTML = priceStyle.format(priceNotRub);
    }

    function increaseQuantity()
    {
        let amount = document.querySelector('.cart-wrap > input').value++;
        amount++;
        let price = parseFloat(amount * document.getElementById('price').getAttribute('data-price').replace(',', '.'));
        let priceNotRub = parseFloat(amount * document.getElementById('price-USD').getAttribute('data-price').replace(',', '.'));

        document.getElementById('price').innerHTML = priceStyle.format(price);
        document.getElementById('price-USD').innerHTML = priceStyle.format(priceNotRub);
    }

    function decreaseQuantity()
    {
        let amount = document.querySelector('.cart-wrap > input').value;
        if (amount > 1) {
            document.querySelector('.cart-wrap > input').value--;
            amount--;
        }
        let price = parseFloat(amount * document.getElementById('price').getAttribute('data-price').replace(',', '.'));
        let priceNotRub = parseFloat(amount * document.getElementById('price-USD').getAttribute('data-price').replace(',', '.'));
        document.getElementById('price').innerHTML = priceStyle.format(price);
        document.getElementById('price-USD').innerHTML = priceStyle.format(priceNotRub);
    }

    function buildCode(element, id) {
        if (!$(element).hasClass('done')) {
            $(element).addClass('done');
            currentAmount += 1;
        }
        let barPercent = (100 / calcAmount) * currentAmount;
        document.getElementById('bar').style.width = barPercent + '%';
        let code = element.value;
        if (id != 'code_id_1') {
            code ? document.getElementById(id).innerHTML = '-' + code : document.getElementById(id).innerHTML = '';
        } else {
            code ? document.getElementById(id).innerHTML = code : document.getElementById(id).innerHTML = '';
        }
        ifReady();
        let searchCode = '';
        document.querySelectorAll('.options-code .opt-code > div').forEach(function(item) {
            searchCode += item.innerHTML;
        });
        if (calcAmount == currentAmount) {
            axios.post('/api/skuCode', {
                code: searchCode
            }).then(function(success) {
                let sku = success.data;
                if (sku) {
                    let price = sku.price * (sku.currency.value / sku.currency.nominal);
                    if (price != 0) {
                        document.getElementById('amount').value = 1;
                        document.getElementById('price').innerHTML = priceStyle.format(price);
                        document.getElementById('price').setAttribute('data-price', price);
                        if (sku.currency.char_code == 'RUB') {
                            document.querySelector('.price-usd-wrap').className = 'price-usd-wrap hidden';
                        } else {
                            document.querySelector('.price-usd-wrap').className = 'price-usd-wrap';
                        }
                        document.getElementById('price-USD').innerHTML = priceStyle.format(sku.price);
                        document.getElementById('price-USD').nextElementSibling.innerHTML = sku.currency.char_code;
                        document.getElementById('price-USD').setAttribute('data-price', sku.price);
                    }
                    document.getElementById('sku').innerHTML = sku.sku;
                    document.getElementById('code').innerHTML = sku.sku_code;
                }
            }, function (error) {
                console.error(error);
            });
        }
    }
</script>
@endsection
