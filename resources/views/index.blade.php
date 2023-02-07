@extends('layouts.master')

@section('content')
<div class="main-slider">
    @if($hpSliders)
    <div class="carousel" data-flickity='{ "lazyLoad": true, "autoPlay": 5000, "pauseAutoPlayOnHover": false, "wrapAround": true, "pageDots": false, "imagesLoaded": true }'>
        @foreach ($hpSliders as $slider)
            <a href="{{ url($slider->url) }}" class="carousel-cell">
                <img class="carousel-cell-image" src="{{ url($slider->image) }}" data-flickity-lazyload="{{ url($slider->image) }}" alt="{{ $slider->alt }}">
            </a>
        @endforeach
    </div>
    @endif
</div>
<div class="brands-block">
    <div class="brands">
        @foreach ($homeBrands as $homeBrand)
            @if ($homeBrand)
            <a class="brand" href="{{ url('brand/'.$homeBrand->url) }}"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($homeBrand->image) }}" alt="{{ $homeBrand->name }}"></a>
            @else
            <a class="brand" href="{{ URL::to('about/brands') }}"><img src="{{ url('/svg/placeholder.svg') }}" alt="Бренд не найден"></a>
            @endif
        @endforeach
        <a class="brand all-brands" href="{{ URL::to('about/brands') }}">Все бренды</a>
    </div>
</div>
<section class="categories">
    <div class="title">
        <h1>Торговый дом УЭТ</h1>
        <h2>Продукция</h2>
    </div>
    <div class="categories-mobile">
        <ul>
            <li class="sub-menu">
                @foreach ($navCategories as $subCategory)
                    <div class="has-sub-menu">
                        <a href="{{ URL::to($subCategory->path) }}">{{ $subCategory->name }}</a>
                        @if ($subCategory->child)
                            <div class="expand"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407.437 407.437"><polygon points="386.258,91.567 203.718,273.512 21.179,91.567 0,112.815 203.718,315.87 407.437,112.815 "/></svg></div>
                        @endif
                    </div>
                    <ul class="ios-fix">
                        @foreach ($subCategory->child as $subCat)
                            <li><a href="{{ URL::to($subCat->path) }}">{{ $subCat->name }}</a></li>
                        @endforeach
                    </ul>
                @endforeach
            </li>
        </ul>
    </div>
    <div class="mobile-brands">
        <a href="{{ URL::to('about/brands') }}">Бренды</a>
    </div>
    <div class="category-blocks">
        @foreach ($navCategories as $category)
            <div class="block">
                <div class="category-img"><a href="{{ URL::to($category->path) }}"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($category->image) }}" alt="{{ $category->name }}"></a></div>
                <h3><a href="{{ URL::to($category->path) }}">{{ $category->name }}</a></h3>
                <div class="sub-categories">
                    <ul>
                        @foreach ($category->child as $subCat)
                                <li><a href="{{ URL::to($subCat->path) }}">{{ $subCat->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="more">
                    <a href="{{ URL::to($category->path) }}"><span>Все {{ $category->name }}</span>@if(count($category->child) > 5) (еще {{ (count($category->child) - 5) }}) @endif<svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></a>
                </div>
            </div>
        @endforeach
    </div>
</section>
<div class="news-and-subscribe">
    <section class="news">
        <h2><a href="{{ URL::to('/about/news') }}">Новости ТД УЭТ<span><svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></span></a></h2>
        @foreach ($news as $article)
        <div class="block">
            <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($article->image) }}" alt="{{ $article->title }}"></div>
            <div class="text">
                <h3><a href="{{ URL::to('about/news/'.$article->url) }}">{{ $article->title }}</a></h3>
                <p>{{ str_limit($article->preview, 200) }}</p>
            </div>
        </div>
        @endforeach
    </section>
    <section class="promotions">
        <h2><a href="{{ URL::to('/about/deals') }}">Новости производителей<span><svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></span></a></h2>
        @foreach ($specials as $special)
        <div class="block">
            <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($special->image) }}" alt="{{ $special->name }}"></div>
            <div class="text">
                <h3><a href="{{ URL::to('about/deals/'.$special->url) }}">{{ $special->name }}</a></h3>
                <p>{{ str_limit($special->short_description, 200) }}</p>
            </div>
        </div>
    @endforeach
    </section>
    <!-- <div class="subscribe">
        <div class="title">Будьте в курсе</div>
        <p>Подпишитесь на последие обновления и узнавайте о новинках и специальных предложениях первыми</p>
        <form>
            <input type="email" name="email" placeholder="Адрес электронной почты">
            <label><input type="checkbox"><span>Я соглашаюсь с политикой защиты и обработки персональных данных и даю согласие на их обработку.</span></label>
            <button type="submit">Подписаться</button>
        </form>
    </div> -->
</div>
<div class="specials-banner">
    <div class="banner-name">Будь в плюсе!</div>
    <div class="banner-more">
        <p>У нас вы сможете заказать оборудование под свой проект с дополнительными скидками</p>
        <a href="{{ URL::to('/customers') }}">Узнать больше</a>
    </div>
</div>
<section class="about-company">
    <div class="img-wrap"><img src="{{ url('/img/static/about_company.png') }}" alt="{{ $contacts->name }}"></div>
    <div class="company-text">
        <h2>О компании</h2>
        <p>Торговый дом УЭТ – поставщик контрольно-измерительных приборов, оборудования автоматизации, вентиляции, насосов и насосных агрегатов, двигателей, частотных преобразователей, электроприводов, запорной арматуры, средства учета тепла и приборы измерений расхода. Мы представляем продукцию наших партнёров заводов – ведущих российских производителей. У нас вы купите оборудование по ценам заводов или ниже. Так же предоставляем гарантийный и пост гарантийный официальный сервис.</p>
        <p>У нас вы можете воспользоваться услугой «Комплексные поставки» и купить оборудование по вашей спецификации в нашем торговом доме от разных производителей одной закупкой с доставкой прямо на объект.</p>
        <p>У нас вы можете получить профессиональную консультацию специалистов и особые условия для оптовых заказчиков, а для постоянных клиентов действуют партнерские программы. Мы постоянно работаем над улучшением процесса взаимодействия с покупателями и расширением ассортимента, чтобы ваша покупка была выгодной и комфортной. Мы осуществляем доставку по всей территории России, а также в страны Таможенного Союза: Казахстан, Беларусь, Армению и Киргизию.</p>
    </div>
</section>
<div class="offers">
    <a href="{{ URL::to('/td_uet') }}" class="block">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/profitable.svg') }}" alt="Доставка"></div>
        <div class="text">
            <div class="title">Оптовые цены</div>
            <span>Оптовые цены даже для самых небольших покупателей</span>
        </div>
    </a>
    <a href="{{ URL::to('/delivery') }}" class="block">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/delivery.svg') }}" alt="Доставка"></div>
        <div class="text">
            <div class="title">Доставка по всей России</div>
            <span>Быстрая доставка в отдаленные регионы доставка СДЭК</span>
        </div>
    </a>
    <a href="{{ URL::to('/about/brands') }}" class="block">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/provider.svg') }}" alt="Доставка"></div>
        <div class="text">
            <div class="title">ТД УЭТ & OZON</div>
            <span>Получите рядом - в любом пункте выдачи OZON</span>
        </div>
    </a>
    <a href="{{ URL::to('/customers') }}" class="block">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/manager.svg') }}" alt="Доставка"></div>
        <div class="text">
            <div class="title">Личный менеджер</div>
            <span>На связи 24/7, оснащение вышего бизнеса легко и доступно</span>
        </div>
    </a>
    <a href="{{ URL::to('mailto:'.$contacts->email) }}" class="block">
        <div class="img-wrap"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url('/img/static/credit-card-front-svgrepo-com.svg') }}" alt="Доставка"></div>
        <div class="text">
            <div class="title">Оплата картой на сайте</div>
            <span></span>
        </div>
    </a>
</div>
<script>
    var bLazy = new Blazy();
</script>
@endsection
