@extends('layouts.master')

@section('content')
	<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
		<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
			<meta itemprop="position" content="1">
			<span>|</span>
		</div>
		<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="{{ URL::to('/about') }}"><span itemprop="name">О компании</span></a>
			<meta itemprop="position" content="2">
			<span>|</span>
		</div>
		<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="{{ URL::to('/about/deals/') }}"><span itemprop="name">Новости производителей</span></a>
			<meta itemprop="position" content="3">
			<span>|</span>
		</div>
		<div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">{{ $deal->name }}</span></a>
			<meta itemprop="position" content="4">
			<span>|</span>
		</div>
	</div>
	<div class="shop-wrap">
		<h1><a href="{{ Request::url() }}">{{ $h1 }}</a></h1>
		<div class="special-description">
			<div class="description">{!! $deal->description !!}</div>
			<div class="latest-news">
				<h2>Другие новости</h2>
				@foreach ($previous_news as $previous)
					<div class="news-item">
						<div class="time">{{ $previous->updated_at }}</div>
						<div class="name"><a href="{{ URL::to('/about/deals/'.$previous->url) }}">{{ $previous->name }}</a></div>
					</div>
				@endforeach
				<div class="all-news-link">
					<a href="{{ URL::to('about/deals') }}">Вce новости производителей<svg aria-hidden="true" data-prefix="fas" data-icon="arrow-right" class="svg-inline--fa fa-arrow-right fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></a>
				</div>
			</div>
		</div>
		<div class="mobile-filter">
			<button class="enable-mobile-filters"><span>Подобрать по параметрам</span>
				<svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
					<path
						d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z"/>
				</svg>
			</button>
		</div>
		<div class="product-filter">
			@if (!empty($products[0]))
				<div class="top-filter">
					<div class="main-filter">
						<div class="sort-name">Сортировать:</div>
						<form name="sorting" onchange="runSort()" action="/changeSortMethod" method="POST">
							@csrf
							<input type="hidden" name="noPage" value="{{ Request::url() }}">
							<label><input name="sort" value="commonSort" type="radio">По умолчанию</label>
							<label><input name="sort" value="priceASC" type="radio">Сначала дешевые</label>
							<label><input name="sort" value="priceDESC" type="radio">Сначала дорогие</label>
							<label><input name="sort" value="nameASC" type="radio">По названию</label>
						</form>
					</div>
					<div class="switch">
						<img id="grid-view" src="{{ url('/svg/grid.svg') }}" alt="Отображать блоками">
						<img id="list-view" src="{{ url('/svg/list.svg') }}" alt="Отображать списком">
					</div>
				</div>
			@endif
			<div class="filter-wrap">
				<div class="products-wrap">
					@if (!empty($products[0]))
						<div class="products @if(\Cookie::get('view') == 2) grid @else list @endif" itemscope
							 itemtype="http://schema.org/ItemList">
							<link itemprop="url" href="{{ Request::url() }}">
							@foreach ($products as $product)
								<div class="product-block" itemprop="itemListElement" itemscope
									 itemtype="http://schema.org/Product">
									<link itemprop="url" href="{{ URL::to($product->url) }}">
									<meta itemprop="description" content="{{ $product->meta_description }}">
									<div class="grid-cv">
										<div onclick="quickAddToCompare(this)" data-product-id="{{ $product->id }}"
											 data-price="{{ $product->price }}" data-code="{{ $product->code }}"
											 class="compare"></div>
										<div onclick="quickAddToBookmark(this)" data-product-id="{{ $product->id }}"
											 data-price="{{ $product->price }}" data-code="{{ $product->code }}"
											 class="bookmark"></div>
									</div>
									<div class="product-image">
										<a href="{{ URL::to($product->url) }}"><img itemprop="image" class="b-lazy"
																					src="/svg/placeholder.svg"
																					data-src="{{ $product->image }}"
																					alt="{{ $product->name }}"></a>
									</div>
									<div class="product-info">
										<div class="top">
											<div class="name">
												<a href="{{ URL::to($product->url) }}" class="title"><span
														itemprop="name">{{ $product->name }}</span></a>
												@if (isset($product->sticker_text))
													<div class="sticker"
														 style="background:{{ $product->sticker_color }};">{{ $product->sticker_text }}</div>
												@endif
											</div>
											<ul>
												<li>Код товара: {{ $product->sku }}</li>
												<li>Артикул: {{ $product->code }}</li>
												<li>Производитель: {{ $product->brand_name }}</li>
											</ul>
										</div>
										<div class="bottom">
											<div class="wrap">
												<div onclick="quickAddToCompare(this)"
													 data-product-id="{{ $product->id }}"
													 data-price="{{ $product->price }}" data-code="{{ $product->code }}"
													 class="compare">
													<span>Сравнить</span>
												</div>
												<div onclick="quickAddToBookmark(this)"
													 data-product-id="{{ $product->id }}"
													 data-price="{{ $product->price }}" data-code="{{ $product->code }}"
													 class="bookmark">
													<span>Отложить</span>
												</div>
												<div class="brand">
													<a href="{{ URL::to('brand/'.$product->brand_url) }}"><img
															class="b-lazy" src="/svg/brand_placeholder.svg"
															data-src="{{ $product->brand_image }}"
															alt="{{ $product->brand_name }}"></a>
												</div>
											</div>
										</div>
									</div>
									<div class="product-shop">
										<div class="cart" itemprop="offers" itemscope
											 itemtype="http://schema.org/Offer">
											<meta itemprop="priceCurrency" content="RUB">
											@if (!empty($product->old_price))
												<div class="price-wrap">
													<div class="old-price">{{ $product->old_price }}</div>
													<div class="old-tax">(с НДС)</div>
												</div>
											@endif
											<div class="price-wrap">
												@if ($product->price != 0)
													@if($product->currency != 'RUB')
														<div
															class="cat-price">{{ number_format($product->price/$product->currency_nominal*$product->currency_value, 2, ',', ' ') }}
															₽
														</div>
														<div class="tax">(с НДС)</div>
														<div class="cat-price-usd-wrap">
															<div class="cat-price-usd" itemprop="price"
																 content="{{ $product->price }}">{{ number_format($product->price, 2, ',', ' ') }}</div>
															<span>{{ $product->currency }}</span>
														</div>
													@else
														<div class="cat-price" itemprop="price"
															 content="{{ $product->price }}">{{ number_format($product->price, 2, ',', ' ') }}
															₽
														</div>
														<div class="tax">(с НДС)</div>
													@endif
												@else
													<div class="cat-price-empty" itemprop="price"
														 content="{{ $product->price }}">Цена по запросу
													</div>
												@endif
											</div>
											<div class="btn-wrap">
												@if ($product->price)
													@if($product->currency != 'RUB')
														<form action="{{ URL::to($product->url) }}">
															<button>Купить<span
																	class="cart-icon"></span></button>
														</form>
													@else
														<form action="{{ URL::to($product->url) }}">
															<button>Купить<span
																	class="cart-icon"></span></button>
														</form>
													@endif
												@else
													<a href="mailto:{{ $contacts->email }}?subject=Запрос на код товара {{ $product->code }}&body=Добрый день!%0D%0AПрошу выставить счет на {{ $product->name }} ({{ $product->sku }}), код товара {{ $product->code }}, штук: %0D%0AКонтактный телефон:%0D%0AДоставка:"
													   class="request-price">Запросить счет</a>
												@endif
											</div>
										</div>
										<div class="additional-info">
											@if ($product->in_stock === null || $product->in_stock > 0)
												<div class="in-stock"><span class="in-stock-icon"></span>В наличии</div>
											@elseif ($product->in_stock === 0)
												<div class="preorder"><span class="preorder-icon"></span></span>Под заказ</div>
											@endif
											@if ($product->production)
												<div class="production"><span class="production-icon"></span>Срок изготовления {{ $product->production }}</div>
											@endif
											@if ($product->delivery)
												<div class="delivery-city"><span class="delivery-city-icon"></span>{{ $product->delivery }}</div>
											@endif
										</div>
									</div>
								</div>
							@endforeach
							<div class="pagination-wrap">
								{{ $products->links('layouts.pagination') }}
								<div class="select-wrap">
									<select onchange="changePerPage(this)">
										<option value="10" @if (\Cookie::get('perpage') == 10) selected @endif>
											Показывать по 10 товаров
										</option>
										<option value="20" @if (\Cookie::get('perpage') == 20) selected @endif>
											Показывать по 20 товаров
										</option>
										<option value="50" @if (\Cookie::get('perpage') == 50) selected @endif>
											Показывать по 50 товаров
										</option>
										<option value="10000" @if (\Cookie::get('perpage') == 10000) selected @endif>
											Показать все
										</option>
									</select>
								</div>
							</div>
						</div>
					@else
						<div class="empty-block">
							По вашему запросу не найдено ни одного товара
						</div>
					@endif
				</div>
				<div class="filter">
					<div class="filter-option">
						<div class="name">Найдено {{ $countedProducts }} товаров</div>
					</div>
					<form action="/refreshFilters" method="POST" class="refresh">
						@csrf
						<input type="hidden" name="refreshed" value="{{ Request::url() }}">
						<button type="submit">Сбросить</button>
					</form>
					<div class="filter-option">
						<div class="name">Наличие:</div>
						<ul class="selectable">
							<li><a onclick="changeInStock(2)"
								   @if (\Cookie::get('instock') == 2) class="selected" @endif>Товар в наличии</a></li>
							<li><a onclick="changeInStock(1)"
								   @if (\Cookie::get('instock') == 1) class="selected" @endif>Под заказ</a></li>
						</ul>
					</div>
					<div class="filter-option">
						<div class="name">Цена, руб.</div>
						<div class="selectable-price">
							<div class="select-price">
								<input name="minprice" id="min-price" type="number" min="0" max="{{ $maxPrice }}"
									   @if (\Cookie::get('minprice')) value="{{ \Cookie::get('minprice') }}"
									   @else value="0"
									   @endif placeholder="от">
								<input name="maxprice" id="max-price" type="number" min="0" max="{{ $maxPrice }}"
									   @if (\Cookie::get('maxprice')) value="{{ \Cookie::get('maxprice') }}"
									   @else value="{{ $maxPrice }}"
									   @endif placeholder="до">
							</div>
							<div class="select-range">
								<div id="slider-range"></div>
							</div>
						</div>
						<div class="apply-price">
							<button onclick="applyPrice()" type="button">Применить</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function changeView(option) {
			var xhr = new XMLHttpRequest();
			var data = 'value=' + option;
			xhr.open('POST', '/changeView');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content);
			xhr.send(data);
		}

		function applyPrice() {
			var min = $('#min-price').val();
			var max = $('#max-price').val();
			var xhr = new XMLHttpRequest();
			var data = 'minprice=' + min + '&maxprice=' + max;
			xhr.open('POST', '/applyPrice');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content);
			xhr.onload = function () {
				if (xhr.status === 200) {
					window.location = window.location.href.split("?")[0];
				} else {
					console.log('Ошибка');
				}
			};
			xhr.send(data);
		}

		function changeInStock(option) {
			var xhr = new XMLHttpRequest();
			var data = 'value=' + option;
			xhr.open('POST', '/changeInStock');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content);
			xhr.onload = function () {
				if (xhr.status === 200) {
					window.location = window.location.href.split("?")[0];
				} else {
					console.log('Ошибка');
				}
			};
			xhr.send(data);
		}

		function changePerPage(element) {
			var xhr = new XMLHttpRequest();
			var data = 'value=' + element.value;
			xhr.open('POST', '/changePerPage');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.setRequestHeader("X-CSRF-TOKEN", document.head.querySelector("[name=csrf-token]").content);
			xhr.onload = function () {
				if (xhr.status === 200) {
					window.location = window.location.href.split("?")[0];
				} else {
					console.log('Ошибка');
				}
			};
			xhr.send(data);
		}

		function runSort() {
			document.sorting.submit();
		}

		$(document).ready(function () {

			$('#list-view').on('click', function () {
				$('.products').addClass('list');
				$('.products').removeClass('grid');
				changeView(1);
			});

			$('#grid-view').on('click', function () {
				$('.products').addClass('grid');
				$('.products').removeClass('list');
				changeView(2);
			});

			var maxPrice = @if ($maxPrice) {{ $maxPrice }} @else 0 @endif,
				thisMinPrice = @if (\Cookie::get('minprice')) value = "{{ \Cookie::get('minprice') }}"
			@else value = "0" @endif,
				thisPrice = @if (\Cookie::get('maxprice')) {{ \Cookie::get('maxprice') }} @else @if ($maxPrice) {{ $maxPrice }} @else 0 @endif @endif;

			$('#slider-range').slider({
				range: true,
				min: 0,
				max: maxPrice,
				values: [thisMinPrice, thisPrice],
				slide: function (event, ui) {
					$('#min-price').val(ui.values[0]);
					$('#max-price').val(ui.values[1]);
				}
			});

			$('.filter .filter-option .name').on('click', function () {
				if (window.innerWidth <= 1024) {
					var that = $(this).next();
					$(this).find('img').toggleClass('flip-filter');
					that.slideToggle();
				}
			});

			$('.enable-mobile-filters').on('click', function () {
				$('.filter').slideToggle();
			});

		});
	</script>
@endsection
