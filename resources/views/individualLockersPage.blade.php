@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('shkafy-individualnoi-sborki') }}"><span itemprop="name">Сборка шкафов на заказ</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('shkafy-individualnoi-sborki/'.$locker->url) }}"><span itemprop="name">{{ $locker->name }}</span></a>
        <meta itemprop="position" content="3">
        <span>|</span>
    </div>
</div>
<div class="individual-lockers-wrap">
	<h1>{{ $locker->name }}</h1>
    @if ($locker->sliders)
        <div class="text-slider">
           <div class="left-arrow"><img src="{{ url('img/static/arrow-left.png') }}" alt="Назад"></div>
           <div class="all-slides">
               <div class="sl-wrap">
                   @foreach ($locker->sliders as $slider)
                       <div class="toslide">
                           <div class="slider-block">
                               <div class="preview-img"><img src="{{ $slider->image }}" alt="{{ $slider->name }}"></div>
                               <h2>{{ $slider->name }}</h2>
                               @if ($slider->customer)
                                   <p><span>Заказчик:</span> {{ $slider->customer }}</p>
                               @endif
                               <p>{!! $slider->description !!}</p>
                           </div>
                       </div>
                   @endforeach
               </div>
           </div>
           <div class="right-arrow"><img src="{{ url('img/static/arrow-right.png') }}" alt="Вперед"></div>
        </div>
    @endif
    @if ($locker->orders)
        <div class="locker-options">
            <p>
                {!! $locker->more_text !!}
            </p>
            <h2>В торговом доме УЭТ вы можете заказать:</h2>
            <ul>
                @foreach ($locker->orders as $order)
                    <li>{!! $order->order_option !!}</li>
                @endforeach
            </ul>
            <p class="plus-text">{{ $locker->order_bottom_text }}</p>
            @if ($staticImages)
                <a id="checkQuality" href="javascript:;">Посмотреть качество сборки</a>
            @endif
        </div>
        <div class="photo-block">
            @foreach ($locker->images as $key => $image)
                <div onclick="showFrom({{ $key }})" class="carousel-cell">
                    <img class="carousel-cell-image" src="{{ url($image->image_path) }}" alt="Slider {{ $key + 1 }}">
                </div>
            @endforeach
            @if (count($locker->images) > 3)
            <div onclick="showFrom(0)"  class="more-placeholder">
                + {{ (count($locker->images) - 3) }}
            </div>
            @endif
        </div>
    @endif
    @if ($locker->tables)
        <div class="lockers-objects">
            <h2>{{ $locker->table_header }}</h2>
            @foreach ($locker->tables as $table)
                <table class="mobile-tb">
                   <thead>
                       <tr>
                           <th>Год</th>
                           <th>{{ $table->year }}</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>Заказчик</td>
                           <td>{!! $table->customer !!}</td>
                       </tr>
                       <tr>
                           <td>Объект</td>
                           <td>{!! $table->object !!}</td>
                       </tr>
                       <tr>
                           <td>Изделия</td>
                           <td>{!! $table->item !!}</td>
                       </tr>
                   </tbody>
                </table>
            @endforeach
           <table class="desktop-tb">
               <thead>
                   <tr>
                       <th>Год</th>
                       <th>Заказчик</th>
                       <th>Объект</th>
                       <th>Изделия</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($locker->tables as $table)
                       <tr>
                           <td>{{ $table->year }}</td>
                           <td>{!! $table->customer !!}</td>
                           <td>{!! $table->object !!}</td>
                           <td>{!! $table->item !!}</td>
                       </tr>
                   @endforeach
               </tbody>
           </table>
        </div>
    @endif
    @if ($locker->brands)
        <div class="brands-slider">
            <h2>{{ $locker->slider_block_header }}</h2>
            <p>{!! $locker->slider_block_text !!}</p>
            <div class="carousel" data-flickity='{ "contain": true, "pageDots": false }'>
                @foreach ($locker->brands as $brand)
                    @if (!empty($brand->image_path) && !empty($brand->url))
                    <a href="{{ url($brand->url) }}" class="carousel-cell"><img src="{{ url($brand->image_path) }}" alt="{{ $brand->alt_name }}"></a>
                    @elseif (!empty($brand->image_path))
                        <div class="carousel-cell"><img src="{{ url($brand->image_path) }}" alt="{{ $brand->alt_name }}"></div>
                    @endif
                @endforeach
            </div>
        </div>
    @endif
    <div class="callback-lockers">
       <h3>Заказать шкаф по собственной спецификации</h3>
       <p>Для заказа шкафа свяжитесь с нашими менеджерами по телефону </p>
       <p class="phone"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></p>
       <p>или оставьте заявку по e-mail <a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a></p>
       <img class="banner-callback" src="{{ url('/img/static/ind_lockers/indlockerbanner.png') }}" alt="Шкаф индивидуальной сборки" >
    </div>
</div>
<script>
    function showFrom(key) {
        $.fancybox.open([
        @foreach ($locker->images as $key => $image)
            {
                src  : '{{ url($image->image_path) }}',
                opts : {
                    caption: function() { return ''; },
                    thumb   : '{{ url($image->image_path) }}',
                }
            },
        @endforeach
        ], {
        index: key,
        loop : true,
        hash : "Качество сборки"
        });
    }
    $("#checkQuality").on('click', function() {
        $.fancybox.open([
        @foreach ($staticImages as $key => $image)
            {
                src  : '{{ url($image) }}',
                opts : {
                    caption: function() { return ''; },
                    thumb   : '{{ url($image) }}',
                }
            },
        @endforeach
        ], {
        loop : true,
        hash : "Качество сборки"
        });
    });
    $(document).ready(function() {
        var start = 0;
        var scrollX = 0;
        var startWidth = $(window).width();
        $(window).resize(function() {
            if ($(window).width() < 601 && $(window).width() != startWidth) {
                window.start = 0;
                $('.sl-wrap').css('left', 0);
                window.scrollX = 316;
            }
            if ($(window).width() > 601 && $(window).width() < 993 && $(window).width() != startWidth) {
                window.start = 0;
                $('.sl-wrap').css('left', 0);
                window.scrollX = 520;
            } if ($(window).width() > 993 && $(window).width() < 1600 && $(window).width() != startWidth) {
                window.start = 0;
                $('.sl-wrap').css('left', 0);
                window.scrollX = 600;
            }
            if ($(window).width() > 1600 && $(window).width() != startWidth) {
                window.start = 0;
                $('.sl-wrap').css('left', 0);
                window.scrollX = 1150;
            }
        });
        if ($(window).width() < 601) {
            var slider = $('.sl-wrap');
            window.start = 0;
            var blocks = $('.sl-wrap .slider-block').length;
            var blockWidth = $('.all-slides').outerWidth();
            var view = $('.all-slides').width();
            window.scrollX = 316;
            $('.left-arrow').on('click', function() {
                if (window.start > 0) {
                    window.start -= 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', -(blocks - 1)*window.scrollX);
                    window.start = blocks;
                }
            });
            $('.right-arrow').on('click', function() {
                if (window.start < (blocks - 1)) {
                    window.start += 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', '0');
                    window.start = 0;
                }
            });
        }
        if ($(window).width() > 601 && $(window).width() < 993) {
            var slider = $('.sl-wrap');
            window.start = 0;
            var blocks = $('.sl-wrap .slider-block').length;
            var blockWidth = $('.all-slides').outerWidth();
            var view = $('.all-slides').width();
            window.scrollX = 520;
            $('.left-arrow').on('click', function() {
                if (window.start > 0) {
                    window.start -= 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', -(blocks - 1)*window.scrollX);
                    window.start = blocks;
                }
            });
            $('.right-arrow').on('click', function() {
                if (window.start < (blocks - 1)) {
                    window.start += 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', '0');
                    window.start = 0;
                }
            });
        }
        if ($(window).width() > 993 && $(window).width() < 1600) {
            var slider = $('.sl-wrap');
            window.start = 0;
            var blocks = $('.sl-wrap .slider-block').length;
            var blockWidth = $('.all-slides').outerWidth();
            var view = $('.all-slides').width();
            window.scrollX = 600;
            $('.left-arrow').on('click', function() {
                if (window.start > 0) {
                    window.start -= 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', -(blocks - 1)*window.scrollX);
                    window.start = blocks;
                }
            });
            $('.right-arrow').on('click', function() {
                if (window.start < (blocks - 1)) {
                    window.start += 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', '0');
                    window.start = 0;
                }
            });
        }
        if ($(window).width() > 1600) {
            var slider = $('.sl-wrap');
            window.start = 0;
            var blocks = $('.sl-wrap .slider-block').length;
            var blockWidth = $('.all-slides').outerWidth();
            var view = $('.all-slides').width();
            window.scrollX = 1150;
            $('.left-arrow').on('click', function() {
                if (window.start > 0) {
                    window.start -= 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', -(blocks - 1)*window.scrollX);
                    window.start = blocks;
                }
            });
            $('.right-arrow').on('click', function() {
                if (window.start < (blocks - 1)) {
                    window.start += 1;
                    var toMove = window.start*window.scrollX;
                    slider.css('left', -toMove);
                } else {
                    slider.css('left', '0');
                    window.start = 0;
                }
            });
        }
     });
 </script>
@endsection
