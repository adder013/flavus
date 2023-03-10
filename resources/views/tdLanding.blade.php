@extends('layouts.master')

@section('content')
    <div id="tdLanding">
        <section class="hero">
            <div class="dots-container">
                <div class="dots"></div>
            </div>
            <h1 class="hero__title">
                <div class="hero__title-highlight">FLAVUS</div>
                Оптовые цены всегда рядом
            </h1>
            <div class="dots-container">
                <div class="dots"></div>
                <div class="dots"></div>
                <div class="dots"></div>
            </div>
        </section>
        <ul class="features">
            <li>
                <img src="/img/static/tdLanding/icon-1.svg" alt="Поставка">
                <div class="features__title">Оптовые цены на закупки</div>
                Во всех районах России даже отдаленных
            </li>
            <li>
                <img src="/img/static/tdLanding/icon-2.svg" alt="Перевозка">
                <div class="features__title">Быстрая доставка</div>
                Можно получить на ближайшем пункте OZON или СДЭК, или заказать бесплатную доставку до адреса
            </li>
            <li>
                <img src="/img/static/tdLanding/icon-3.svg" alt="Документы">
                <div class="features__title">Работа по договору с гарантией</div>
                Можем оформить договор на любую поставку
            </li>
        </ul>
        <section class="about">
            <div class="about__title">
                FLAVUS — федеральный дистрибьютор товаров для HORECA.<br />
                Оборудование для кафе по оптовым ценам везде рядом с вами.
            </div>
            <a href="/about" class="about__button">Подробнее о нас</a>
        </section>
        <div class="cards">
            <div class="card card--partners">
                <div class="card__text">
                    <div class="card__number">120</div>
                    заводов партнеров
                </div>
            </div>
            <div class="card card--products">
                <div class="card__text">
                    <div class="card__number">450 000</div>
                    товаров
                </div>
            </div>
            <div class="card card--clients">
                <div class="card__text">
                    <div class="card__number">23 000</div>
                    постоянных клиентов
                </div>
            </div>
            {{-- <div class="card card--foundation">
                <div class="card__text">
                    <div class="card__number">2007</div>
                    год основания
                </div>
            </div> --}}
        </div>
        <section class="supplying">
            <h2>Направления поставки</h2>
            <div class="supplying-cards">
                @foreach ($navCategories->take(4) as $subCategory)
                    <div class="card">
                        <div class="card__header">
                            <img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}"
                                data-src="{{ url($subCategory->image) }}" alt="{{ $subCategory->name }}">
                            <div class="card__header-title">{{ $subCategory->name }}</div>
                        </div>
                        <div class="card__content">
                            <ul>
                                @foreach ($subCategory->child->take(6) as $subCat)
                                    @if ($subCat)
                                        <li>
                                            <a href="{{ URL::to($subCat->path) }}">{{ $subCat->name }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="card__more">
                                <a href="{{ URL::to($subCategory->path) }}">
                                    <span title="Все {{ $subCategory->name }}">
                                        Все {{ $subCategory->name }}
                                        @if (count($subCategory->child) > 5)
                                            <b title="(еще {{ count($subCategory->child) - 5 }})">
                                                (еще {{ count($subCategory->child) - 5 }})
                                            </b>
                                        @endif
                                    </span>
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="chevron-right"
                                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path fill="currentColor"
                                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="supplying__more">
                <a href="/catalog">Все направления</a>
            </div>
        </section>
        <section class="regions">
            <h2>Регионы поставки</h2>
            <ul class="countries">
                <li>
                    <img src="/img/static/tdLanding/central.png" alt="Флаг Москвы">
                    <div class="country__name">Центральный</div>
                    <div>18 областей</div>
                </li>
                <li>
                    <img src="/img/static/tdLanding/northwestern.png" alt="Флаг Санкт-Петербурга">
                    <div class="country__name">Северо-Западный</div>
                    <div>11 областей</div>
                </li>
                <li>
                    <img src="/img/static/tdLanding/south.png" alt="Флаг Ростов-на-Дону">
                    <div class="country__name">Южный</div>
                    <div>8 областей</div>
                </li>
                <li>
                    <img src="/img/static/tdLanding/north-caucasian.png" alt="Флаг Пятигорск">
                    <div class="country__name">Северо-Кавказский</div>
                    <div>7 областей</div>
                </li>
                <li>
                    <img src="/img/static/tdLanding/volga.png" alt="Флаг Нижний Новгород">
                    <div class="country__name">Приволжский</div>
                    <div>14 областей</div>
                </li>
                <li>
                    <img src="/img/static/tdLanding/ural.png" alt="Флаг Екатеринбург">
                    <div class="country__name">Уральский</div>
                    <div>6 областей</div>
                </li>
                <li>
                    <img src="/img/static/tdLanding/siberian.png" alt="Флаг Новосибирск">
                    <div class="country__name">Сибирский</div>
                    <div>10 областей</div>
                </li>
                <li>
                    <img src="/img/static/tdLanding/far-eastern.png" alt="Флаг Владивосток">
                    <div class="country__name">Дальневосточный</div>
                    <div>11 областей</div>
                </li>
            </ul>
        </section>
        <section class="callback">
            <div class="column">
                <h2>Сделать заявку</h2>
                <a href="mailto:{{ $contacts->email }}" class="callback__button">Написать нам</a>
                <div class="contacts">
                    <div class="email">
                        Напишите запрос на&nbsp;почту и&nbsp;ваша заявка придет к&nbsp;нашему менеджеру
                        <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a>
                    </div>
                    <div class="phones">
                        Остались вопросы, звоните нашему менеджеру
                        <div class="phones__item">
                            <a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">
                                {{ $contacts->phone }}
                            </a>
                            <span>Екатеринбург</span>
                        </div>
                        <div class="phones__item">
                            <a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone_msk) }}">
                                {{ $contacts->phone_msk }}
                            </a>
                            <span>Москва</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="social-buttons">
                    <a href="https://www.facebook.com/uralenergotel" title="Facebook">
                        <img src="/img/static/tdLanding/fb.svg" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/td_uet" title="Instagram">
                        <img src="/img/static/tdLanding/ig.svg" alt="Instagram">
                    </a>
                    <a href="https://www.youtube.com/channel/UCAEO89tnU7Fi9lzkZec_aqA" title="YouTube">
                        <img src="/img/static/tdLanding/yt.svg" alt="YouTube">
                    </a>
                </div> -->
            </div>
            <div class="column">
                <img src="/img/static/tdLanding/footer.jpg">
        </section>
    </div>
@endsection
