@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">Поиск посылки по номеру</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="content-wrap --faq-wrap">
    <div class="mobile-padding">
        <h1>Поиск заказа по номеру отслеживания</h1>
        <div class="tracking-form-box">
            <form action="{{ URL::to('/tracks') }}" target="_self" accept-charset="utf-8" method="GET"
                class="tracking__input">
                <input type="search" name="code" placeholder="Введите номер отслеживания"
                    value="{{ Request::get('code') }}" />
                <button type="submit" class="search-ico">
                    Отследить
                </button>
            </form>
        </div>
    </div>
    <div class="content --tracking-info">
        @if (!$order && Request::get('code'))
        <div class="track-not-found">
            Данный номер не существует
        </div>
        @elseif (!$order && !Request::get('code'))
        <div class="track-not-found">
            Если у вас нет номера для отслеживания свяжитесь с менеджером по телефону <a
                href="tel:+{{ $contacts->phone }}">{{ $contacts->phone }}</a> и мы вам поможем
        </div>
        @else
        <div class="general__info">
            <div class="tracks">
                <div class="client__info">
                    <div class="full__name">
                        Клиент: <data>{{ $order->user->name }}</data>
                    </div>
                    <div class="id">
                        Номер счета: <data>{{ $order->crm_invoice_number }}</data>
                    </div>
                </div>
                @foreach ($order->trackGroups as $trackGroup)
                <div class="route__info --transport-delivery" @if ($loop->last) style="border-bottom: none; padding-bottom: 0" @endif>
                    @foreach ($trackGroup->tracks as $index => $track)
                    <div class="route__number" @if (!$loop->first) style="margin-top: 28px" @endif>Маршрут № {{ $index + 1 }}</div>
                    <div class="delivery__type">{{ $track->delivery_type }}</div>
                    <div class="from-to-blocks">
                        <div class="from__to">
                            <div class="head">
                                <div class="img__wrap">
                                    <img src="/svg/map.svg">
                                </div>
                                <div class="head__title">Откуда:</div>
                            </div>
                            <p class="address">{{ $track->departure }}</p>
                        </div>
                        @if ($track->arrival)
                        <div class="from__to">
                            <div class="head">
                                <div class="img__wrap">
                                    <img src="/svg/map.svg">
                                </div>
                                <div class="head__title">Куда:</div>
                            </div>
                            <p class="address">{{ $track->arrival }}</p>
                        </div>
                        @endif
                    </div>
                    <div class="status__info">  
                        <div>Статус</div>
                        <div class="status__block">
                            @foreach ($trackGroup->statuses as $key => $status)
                            @if ($status->id != 6 && $status->id <= $track->status->id)
                            @if ($status->id != 4 || $track->status->id == 4)
                            @if (!(!$track->arrival && $status->id > 3))
                            <div class="item">
                                <div class="status-icon__wrap">
                                    <img src="@if($track->status->id > $status->id) /svg/ready.svg @else /svg/notready.svg @endif" class="stat__icon">
                                </div>
                                <div class="item__info">
                                    {{ $status->name }}
                                    @if($status->id == 2 && $track->start_date)
                                        @if($track->status->id == 2)
                                            <br>Приблизительная дата отправки: {{ $track->start_date_formatted }}
                                        @else
                                            <br>Дата отправки: {{ $track->start_date_formatted }}
                                        @endif
                                    @endif
                                    @if ($status->id == 5 && $track->status->id > 4)
                                    <br>
                                    Трек номер: {{ $track->track_code }}
                                        @if (mb_strtolower($track->delivery_company) == 'деловые линии' && $track->track_code)
                                        <br><a href="https://www.dellin.ru/tracker/?mode=search&rwID={{ $track->track_code }}" target="_blank">Посмотреть статус доставки на сайте Деловых линий</a>
                                        @endif
                                    @endif
                                    @if ($status->id == 5 && $track->receive_date)
                                        @if($track->status->id == 5)
                                            <br>Приблизительная дата доставки: {{ $track->receive_date_formatted }}
                                        @endif
                                    @endif
                                </div>
                            </div>
                            @endif
                            @endif
                            @endif
                            @endforeach
                        </div>
                        @if ($loop->last)
                        <div class="extended__status__block">
                            <p class="delivery__status">@if ($trackGroup->tracks->last()->status->id != 6)Товар в пути / Изготавливается@else Ваш заказ доставлен@endif</p>
                            <p>
                                Остались вопросы - свяжитесь с нашим мнеджером по телефону:
                                <a href="tel:+{{ $contacts->phone }}">{{ $contacts->phone }}</a>
                            </p>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection