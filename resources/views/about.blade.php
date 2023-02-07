@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
	<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
		<meta itemprop="position" content="1">
		<span>|</span>
	</div>
	<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a itemprop="item" href="{{ URL::to('about') }}"><span itemprop="name">О компании</span></a>
		<meta itemprop="position" content="2">
		<span>|</span>
	</div>
</div>
<div class="about-page">
	<div class="top">
		<h1>Торговый дом УЭТ</h1>
		<div class="text">
			<p>Надёжный поставщик оборудования<br>автоматики и телемеханики.</p>
			<a href="#brands-text"><img src="{{ url('/img/static/about/arrow.svg') }}"></a>
		</div>
	</div>
	<div class="banner-1">
		<h2>О компании</h2>
		<p>Торговый дом УЭТ – сервис поставок, специализирующийся на продаже оборудования для промышленных предприятий и предприятий в сфере энергетики, основанный на базе инжиниринговой компании ООО «Уралэнерготел», опыт работы которой в этой отрасли составляет более 12 лет.</p>
	</div>
	<div class="equipment">
		<img src="{{ url('/img/static/about/equipment.png') }}" alt="equipment">
		<div class="text">
			<h2>Поставляем оборудование</h2>
			<p>Мы поставляем оборудование для систем измерения и учёта электроэнергии, оборудование КИП и автоматизации, вентиляцию, насосы и насосные агрегаты, двигатели, частотные преобразователи, электроприводы, запорную арматуру, средства учета тепла и приборы измерений расхода.</p>
		</div>
	</div>
	<div class="map">
		<div class="map-container">
			<img src="{{ url('/img/static/about/map.png') }}" alt="Карта">
			<p class="russia">РОССИЯ {{ $russia }} городов</p>
			<p class="belarus">БЕЛОРУССИЯ {{ $belarus }} городов</p>
			<p class="armenia">АРМЕНИЯ {{ $armenia }} городов</p>
			<p class="kazakhstan">КАЗАХСТАН {{ $kazakhstan }} город</p>
			<p class="kyrgyzstan">КИРГИЗИЯ {{ $kyrgyzstan }} городов</p>
		</div>
		<p class="text">Торговый дом УЭТ осуществляет доставку оборудования<br>по всей территории России и стран Таможенного Союза –<br>Казахстана, Беларуси, Киргизии и Армении.</p>
	</div>
	<div class="container-4">
		<div>
			<h2>Единый поставщик</h2>
			<p>В нашем интернет-магазине представлено оборудование более 25 лидеров индустрии, поэтому вы можете закупить всё, что вам требуется, в одном месте.</p>
		</div>
		<div>
			<h2>Комплексные поставки при строительстве объектов</h2>
			<p>Вы можете воспользоваться услугой Комплексные поставки и купить оборудование по вашей спецификации в нашем интернет-магазине от разных производителей одной закупкой с доставкой прямо на объект. Мы поставляем как типовую продукцию, так и индивидуально изготовленные изделия по вашему проекту.</p>
			<a class="details" href="{{ URL::to('about/brands') }}">Подробнее</a>
		</div>
		<div>
			<h2>Организация доставки по России и в страны Таможенного Союза</h2>
			<p>Мы доставляем товары по всей России транспортными компаниями Деловые Линии и DPD, по Казахстану, Беларуси, Армении и Киргизии – DPD. Также мы готовы сотрудничать с клиентами из других стран ближнего зарубежья.</p>
			<div class="devlivery-brands">
				<img src="{{ url('/img/static/about/dpd.png') }}" alt="DPD">
				<img src="{{ url('/img/static/about/dellin.png') }}" alt="Деловые Линии">
				<img src="{{ url('/img/static/about/peclogo.png') }}" alt="ПЭК">
				<img src="{{ url('/img/static/about/cdek_logo.png') }}" alt="СДЭК">
			</div>
			<a class="details" href="{{ URL::to('delivery') }}">Подробнее</a>
		</div>
		<div>
			<h2>Техническая помощь при выборе оборудования</h2>
			<p>Наши технические специалисты проконсультируют вас, какое оборудование лучше вам подойдёт с учётом требуемых характеристик, подберут замены для оборудования снятого с производства</p>
		</div>
	</div>
	<div class="container-2">
		<div>
			<h2>Купить у нас выгоднее, чем на заводе</h2>
			<p>У нас вы купите оборудование по ценам заводов-производителей или ниже. С гарантийными и пост гарантийным официальным сервисом. Для постоянных клиентов предусмотрены скидки.</p>
		</div>
		<div>
			<h2>Сопровождение менеджера на всех этапах закупки</h2>
			<p>У вашей организации будет персональный менеджер, который сопровождает ваш заказ от его формирования до исполнения: все ваши пожелания будут учтены и вы всегда будете в курсе статуса выполнения заказа.</p>
		</div>
	</div>
	<div id="brands-text">
		<h2>Бренды</h2>
		<p>Компания Торговый дом УЭТ (Уралэнерготел) является партнером и поставляет оборудование для технических систем известных Российских и мировых производителей.</p>
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
	<div class="company-contacts">
		<div class="img-block"></div>
		<div class="full-contacts">
			<ul>
				<li>
					<div class="name"><strong>Полное наименование:</strong></div>
					<div class="body">ООО "{{ $contacts->name }}"</div>
				</li>
				<li>
					<div class="name"><strong>Юридический адрес:</strong></div>
					<div class="body">{{ $contacts->legal_address }}</div>
				</li>
				<li>
					<div class="name"><strong>Фактический адрес:</strong></div>
					<div class="body">{{ $contacts->post_address }}</div>
				</li>
				<li>
					<div class="name"><strong>ИНН:</strong></div>
					<div class="body">6670497540</div>
				</li>
				<li>
					<div class="name"><strong>КПП:</strong></div>
					<div class="body">667001001</div>
				</li>
				<li>
					<div class="name"><strong>ОГРН:</strong></div>
					<div class="body">1206600065550</div>
				</li>
				<li>
					<div class="name"><strong>Генеральный директор:</strong></div>
					<div class="body">Федосеева Марина Николаевна</div>
				</li>
				<li>
					<div class="name"><strong>Наименование банка:</strong></div>
					<div class="body">Уральский филиал АО «Райффайзенбанк» г. Екатеринбург</div>
				</li>
				<li>
					<div class="name"><strong>БИК:</strong></div>
					<div class="body">046577906</div>
				</li>
				<li>
					<div class="name"><strong>Корреспондентский счет:</strong></div>
					<div class="body">30101810100000000906</div>
				</li>
				<li>
					<div class="name"><strong>Расчетный счет:</strong></div>
					<div class="body">40702810104000037455</div>
				</li>
				<li>
					<div class="name"><strong>ОКПО:</strong></div>
					<div class="body">80099403</div>
				</li>
				<li>
					<div class="name"><strong>Телефон в Екатеринбурге:</strong></div>
					<div class="body"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone) }}">{{ $contacts->phone }}</a></div>
				</li>
				<li>
					<div class="name"><strong>Телефон в Москве:</strong></div>
					<div class="body"><a href="tel:+{{ preg_replace('/[^0-9]/', '', $contacts->phone_msk) }}">{{ $contacts->phone_msk }}</a></div>
				</li>
				<li>
					<div class="name"><strong>E-mail:</strong></div>
					<div class="body"><a href="mailto:{{ $contacts->email }}">{{ $contacts->email }}</a></div>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection
