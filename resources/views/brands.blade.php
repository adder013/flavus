@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
	<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
		<meta itemprop="position" content="1">
		<span>|</span>
	</div>
	<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		<a itemprop="item" href="{{ URL::to('about/brands') }}"><span itemprop="name">Бренды</span></a>
		<meta itemprop="position" content="2">
		<span>|</span>
	</div>
</div>

<div class="brands-wrap">
	<h1>Бренды</h1>
	<div class="tabs">
		<p>Сортировать:</p>
		<button class="tablinks" onclick="openTab(event, 'production-type')" id="defaultOpen">По&nbsp;виду&nbsp;продукции</button>
		<button class="tablinks" onclick="openTab(event, 'alphabet')">По&nbsp;алфавиту</button>
		<button class="tablinks" onclick="openTab(event, 'industry')" style="display: none">По&nbsp;отрасли</button>
	</div>

	<div id="production-type" class="tabcontent">
		@foreach ($brandsTags as $tag => $brandsList)
			<div class="tag-wrap">
				<h2>{{ $tag }}</h2>
				<div class="logo-wrap">
					@foreach ($brandsList as $brand)
						<a href="{{ URL::to('brand/'.$brand->url) }}" class="brand-logo">
							<div class="img-wrap"><img src="{{ url('svg/placeholder.svg') }}" data-src="{{ $brand->image }}" alt="{{ $brand->name }}" class="b-lazy"></div>
						</a>
					@endforeach
				</div>
			</div>
		@endforeach
	</div>

	<div id="alphabet" class="tabcontent">
		<div class="letters">
			<p>A-Z</p>
			@foreach ($brandsLetters as $letter => $brand)
				<ul>
					@if (preg_match("/А/", $letter))
						</ul>
						<p>А-Я</p>
						<ul>
					@endif
					<li class="letter">{{ $letter }}</li>
					@foreach ($brand as $thisBrand)
						<li><a href="{{ URL::to('brand/'.$thisBrand->url) }}">{{ $thisBrand->name }}</a></li>
					@endforeach
				</ul>
			@endforeach
		</div>
		<div class="logo-wrap">
			@foreach ($brands as $brand)
				<a href="{{ URL::to('brand/'.$brand->url) }}" class="brand-logo">
					<div class="img-wrap">
						<img src="{{ url('svg/placeholder.svg') }}" data-src="{{ $brand->image }}" alt="{{ $brand->name }}" class="b-lazy">
					</div>
				</a>
			@endforeach
		</div>
	</div>

	<div id="industry" class="tabcontent">
		@foreach ($brandsIndustries as $industry => $brandsList)
			<div class="industry-wrap">
				<h2>{{ $industry }}</h2>
				<div class="logo-wrap">
					@foreach ($brandsList as $brand)
						<a href="{{ URL::to('brand/'.$brand->url) }}" class="brand-logo">
							<div class="img-wrap">
								<img src="{{ url('svg/placeholder.svg') }}" data-src="{{ $brand->image }}" alt="{{ $brand->name }}" class="b-lazy">
							</div>
						</a>
					@endforeach
				</div>
			</div>
		@endforeach</div>
</div>

<script>
	document.getElementById("defaultOpen").click();

	function openTab(evt, tabName) {
		var i, tabcontent, tablinks;
		var blazy = new Blazy();
		blazy.load();
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none"
		}

		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].classList.remove("active")
		}

		document.getElementById(tabName).style.display = "flex";
		evt.currentTarget.className += " active";
	}
</script>
@endsection