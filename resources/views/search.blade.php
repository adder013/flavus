@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">Поиск</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
</div>
<div class="shop-wrap">
    <h1><a href="{{ Request::url() }}">Поиск по: {{ $text }}</a></h1>
    <div class="search-wrap">
        @if ($text)
        <div class="search-content">
            <div class="search-settings">
                {{-- <div>
                    Найдено {{ $total }} товаров
                </div> --}}
                <div>
                    <form action="/search" id="sort_form">
                        <input type="hidden" name="text" value="{{ $text }}">
                        @if (request('category_id'))
                            <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                        @endif
                        @if (request('available'))
                            <input type="hidden" name="available" value="{{ request('available') }}">
                        @endif
                        @if (request('price_low'))
                            <input type="hidden" name="price_low" value="{{ request('price_low') }}">
                        @endif
                        @if (request('price_high'))
                            <input type="hidden" name="price_high" value="{{ request('price_high') }}">
                        @endif
                        @if (request('page'))
                            <input type="hidden" name="page" value="{{ request('page') }}">
                        @endif
                        <input type="checkbox" name="how" id="sort_checkbox" value="aprice" value="" {{ request('how') == 'aprice' ? 'checked' : '' }}>
                        <label for="sort_checkbox">Сортировать по цене</label>
                    </form>
                    <form action="/search" id="available_form">
                        <input type="hidden" name="text" value="{{ $text }}">
                        @if (request('category_id'))
                            <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                        @endif
                        @if (request('how'))
                            <input type="hidden" name="how" value="{{ request('how') }}">
                        @endif
                        @if (request('price_low'))
                            <input type="hidden" name="price_low" value="{{ request('price_low') }}">
                        @endif
                        @if (request('price_high'))
                            <input type="hidden" name="price_high" value="{{ request('price_high') }}">
                        @endif
                        @if (request('page'))
                            <input type="hidden" name="page" value="{{ request('page') }}">
                        @endif
                        <input type="checkbox" name="available" id="available_checkbox" value="true" value="" {{ request('available') == true ? 'checked' : '' }}>
                        <label for="available_checkbox">Есть в наличии</label>
                    </form>
                    <form action="/search" id="category_form">
                        <input type="hidden" name="text" value="{{ $text }}">
                        @if (request('available'))
                            <input type="hidden" name="available" value="{{ request('available') }}">
                        @endif
                        @if (request('how'))
                            <input type="hidden" name="how" value="{{ request('how') }}">
                        @endif
                        @if (request('price_low'))
                            <input type="hidden" name="price_low" value="{{ request('price_low') }}">
                        @endif
                        @if (request('price_high'))
                            <input type="hidden" name="price_high" value="{{ request('price_high') }}">
                        @endif
                        @if (request('page'))
                            <input type="hidden" name="page" value="{{ request('page') }}">
                        @endif
                        <div class="categories">
                            <input type="radio" id="category_radio" name="category_id" value="" {{ request('category_id') == null ? 'checked' : '' }}><label for="category_radio">Все категории</label>
                            <ul>
                                @foreach ($firstLevelCategories as $firstLevelCategory)
                                <li><input type="radio" id="category_radio_{{ $firstLevelCategory->id }}" name="category_id" value="{{ $firstLevelCategory->id }}"
                                        {{ request('category_id') == $firstLevelCategory->id ? 'checked' : '' }}><label for="category_radio_{{ $firstLevelCategory->id }}">{{ $firstLevelCategory->name }}</label>
                                    @if ($firstLevelCategory->subCategory && in_array($firstLevelCategory->id,
                                    $expandCategories))
                                    <ul>
                                        @foreach ($firstLevelCategory->subCategory as $secondLevelCaregory)
                                        <li><input type="radio" id="category_radio_{{ $secondLevelCaregory->id }}" name="category_id" value="{{ $secondLevelCaregory->id }}"
                                                {{ request('category_id') == $secondLevelCaregory->id ? 'checked' : '' }}><label for="category_radio_{{ $secondLevelCaregory->id }}">{{ $secondLevelCaregory->name }}</label>
                                            @if ($secondLevelCaregory->subCategory && in_array($secondLevelCaregory->id,
                                            $expandCategories))
                                            <ul>
                                                @foreach ($secondLevelCaregory->subCategory as $thirdLevelCaregory)
                                                <li><input type="radio" id="category_radio_{{ $thirdLevelCaregory->id }}" name="category_id"
                                                        value="{{ $thirdLevelCaregory->id }}"
                                                        {{ request('category_id') == $thirdLevelCaregory->id ? 'checked' : '' }}><label for="category_radio_{{ $thirdLevelCaregory->id }}">{{ $thirdLevelCaregory->name }}</label>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="search-result">
                @forelse ($products as $product)
                <div class="search-product">
                    <div class="image-wrap">
                        <img itemprop="image" class="b-lazy" src="/svg/placeholder.svg" data-src="{{ $product->image }}"
                            alt="{{ $product->name }}">
                    </div>
                    <div class="description-wrap">
                        <div class="title"><a target="_blank" href="/{{ $product->url }}">{{ $product->name }}</a></div>
                        <div class="category"><a target="_blank" href="{{ $product->category_url }}">{{ $product->category_name }}</a>
                        </div>
                        <div class="description">{!! $product->description !!}</div>
                    </div>
                    <div class="price-wrap">
                        <div class="price">
                            <span class="rub">{{ round($product->price * $currencies[$product->currency]->value * 1.2, 2) }}
                                ₽</span>
                            @if ($product->currency != 1)
                            <br><span class="currency">{{ round($product->price * 1.2, 2) }}
                                {{ $currencies[$product->currency]->char_code }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <p>По вашему запросу не найдено ни одного товара</p>
                @endforelse
            </div>
        </div>
        <div class="pagination-wrap">
            {{ $paginator->links('layouts.pagination') }}
        </div>
        @else
        <div class="no-text">
            Введите запрос в строку поиска
        </div>
        @endif
    </div>
</div>

<script>
    document.querySelector("#sort_checkbox").addEventListener("change", function (event) {
        document.querySelector("#sort_form").submit()
    })

    document.querySelector("#available_checkbox").addEventListener("change", function (event) {
        document.querySelector("#available_form").submit()
    })

    var radio = document.querySelectorAll("input[type='radio']")
    radio.forEach(element => {
        element.addEventListener("change", function (event) {
            document.querySelector("#category_form").submit()
        })
    });

</script>
@endsection