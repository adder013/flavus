@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/freedelivery') }}"><span itemprop="name">Регионы бесплатной доставки</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="free-delivery-wrap">
	<h1>Бесплатная доставка по Екатеринбургу и близлежащим населённым пунктам</h1>
	<div class="text">
		<img src="{{ url('/img/static/delivery.svg') }}" alt="Доставка">
		<p>Клиенты из Екатеринбурга и ближайших к нему городов<br>могут воспользоваться сервисом бесплатной доставки</p>
	</div>
	<div class="delivery-area">
		<div class="list">
			<h2>Зона бесплатной доставки:</h2>
			<ul>
				@foreach ($cities as $city)
					<li>{{ $city }}</li>
				@endforeach
			</ul>
		</div>
		<div class="map"><img src="{{ url('/img/static/delivery/free_area_map.png') }}" alt="Зона бесплатной доставки"></div>
	</div>
	<a class="pickup" href="{{ url('/samovyvoz') }}">
		<div class="img-wrap"><img src="{{ url('/img/static/delivery/pickup.svg') }}" alt="Самовывоз"></div>
		<div class="text">
			<h2>Пункт самовывоза:</h2>
			<p>Также можно забрать товар со склада Уралэнерготел:<br>г. Екатеринбург, ул. Малышева 164 лит. О</p>
		</div>
	</a>
</div>
@endsection
