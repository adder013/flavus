<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Торговый дом УЭТ | Панель управления</title>
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
	<link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="theme-color" content="#ffffff">
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.min.css" integrity="sha256-orhFmLdAikn1cv90PcWIa93VOQx4tAQWA32hnBP40M4=" crossorigin="anonymous" />
 	<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
 	<script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('/js/blazy.js') }}"></script>
	<script src="{{ asset('/js/flatpickr.js') }}"></script>
	<script src="https://npmcdn.com/flatpickr/dist/l10n/ru.js"></script>
	<script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
	<script defer src="{{ asset('/js/dashboard.js') }}"></script>
	<script defer src="{{ asset('/js/fontawesome-all.min.js') }}"></script>
</head>
<body>
<header>
@include('dashboard.layouts.header')
</header>
<main>
	<div id="app">
		@yield('content')
	</div>
</main>
<footer>
@include('dashboard.layouts.footer')
</footer>

<script>
    function rollback(version) {
        axios.post('/git/branchCheckout', {
            branch: 'v' + version
        }).then(
            success => {
                console.log(success)
            }
        )
    }
	$('.error-block').outerHeight($('.timeline').outerHeight());
	var line = 0;

	function uploadProductLine() {
		var type = $('#csv-product-field').val();
		switch (type) {
			case '1':
				var url = '/uploadProductType1';
				break;
			case '2':
				var url = '/uploadProductType2';
				break;
			default:
				var url = '/uploadProductType1';
				break;
		}
		$('#prepare-products #body-table').scrollTop($('#num_0')[0].scrollHeight * line);
		$('#num_' + line + ' div').css('background-color', 'rgba(5%, 69%, 92%, .5)');
		$('#num_' + line + ' div').css('color', 'white');
		$.ajax({
			url: url,
			method: 'GET',
			success: function(response) {
				$('#num_' + line + ' div').css('background-color', 'rgba(11%, 89%, 28%, .3)');
				$('#num_' + line + ' div').css('color', 'white');
				$('#num_' + line).wrap('<a href="/' + response.link + '" target="_blank"></a>');
				$('#num_' + line + ' .sku').text(response.sku);
				if (response.continue == true) {
					line += 1;
					uploadProductLine();
				} else {
					line = 0;
					$('#csv-upload button[type=button]').hide();
					$('#csv-upload .import-field').hide();
				}
			}
		});
	}
	var categoryLine = 0;

	function uploadCategoryLine() {
		var url = '/uploadCategory';
		$('#prepare-categories #body-table-categories').scrollTop($('#cat_num_0')[0].scrollHeight * categoryLine);
		$('#cat_num_' + categoryLine + ' div').css('background-color', 'rgba(5%, 69%, 92%, .5)');
		$('#cat_num_' + categoryLine + ' div').css('color', 'white');
		$.ajax({
			url: url,
			method: 'GET',
			success: function(response) {
				$('#cat_num_' + categoryLine + ' div').css('background-color', 'rgba(11%, 89%, 28%, .3)');
				$('#cat_num_' + categoryLine + ' div').css('color', 'white');
				if (response.continue == true) {
					categoryLine += 1;
					uploadCategoryLine();
				} else {
					categoryLine = 0;
					$('#csv-categories-upload button[type=button]').hide();
				}
			}
		});
	}
	var auto = 0;

	function autoUpdate() {
		if (auto == 1) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			var url = '/checkUploaded';
			$.ajax({
				url: url,
				method: 'GET',
				success: function(response) {
					$('#uploaded-products .content').empty();
					if (response.logs.length > 0) {
						for (i = 0; i < response.logs.length; i++) {
							if (response.logs[i].updated == 1) {
								$('#uploaded-products .content').append('<div id="num_' + i + '" class="product updated"></div>');
							} else {
								$('#uploaded-products .content').append('<div id="num_' + i + '" class="product"></div>');
							}
							$('<div class="name">' + response.logs[i].product + '</div>').appendTo('#num_' + i);
							$('<div class="url">' + response.logs[i].url + '</div>').appendTo('#num_' + i);
							$('<div class="sku">' + response.logs[i].sku + '</div>').appendTo('#num_' + i);
							$('<div class="sku-name">' + response.logs[i].sku_name + '</div>').appendTo('#num_' + i);
							$('<div class="sku-price">' + response.logs[i].sku_price + '</div>').appendTo('#num_' + i);
							$('<div class="sku-old-price">' + response.logs[i].sku_old_price + '</div>').appendTo('#num_' + i);
						}
					}
					$('<div class="uploading">Загрузка...</div>').appendTo('#uploaded-products .content');
					$('#uploaded-products .content').scrollTop($('#uploaded-products .content')[0].scrollHeight);
					setTimeout(autoUpdate, 300);
				},
				error: function() {
					setTimeout(autoUpdate, 300);
				},
			});
		} else {
			$('.uploading').remove();
			$('<div class="uploading">Успешно загружено!</div>').appendTo('#uploaded-products .content');
		}
	}

	function isOdd(num) {
		return num % 2;
	};
	var autoCalc = 0;

	function autoUpdateCalc() {
		if (autoCalc == 1) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			var url = '/checkUploadedCalculator';
			$.ajax({
				url: url,
				method: 'GET',
				success: function(response) {
					$('#uploaded-calculator .content').empty();
					if (response.logs.length > 0) {
						for (i = 0; i < response.logs.length; i++) {
							if (response.logs[i].updated == 1) {
								$('#uploaded-calculator .content').append('<div id="numC_' + i + '" class="product updated"></div>');
							} else {
								$('#uploaded-calculator .content').append('<div id="numC_' + i + '" class="product"></div>');
							}
							$('<div class="item">' + response.logs[i].product + '</div>').appendTo('#numC_' + i);
							$('<div class="option">' + response.logs[i].group + '</div>').appendTo('#numC_' + i);
							$('<div class="value">' + response.logs[i].option + '</div>').appendTo('#numC_' + i);
							$('<div class="code">' + response.logs[i].option_code + '</div>').appendTo('#numC_' + i);
							$('<div class="price">' + response.logs[i].option_price + '</div>').appendTo('#numC_' + i);
						}
					}
					$('<div class="uploading">Загрузка...</div>').appendTo('#uploaded-calculator .content');
					$('#uploaded-calculator .content').scrollTop($('#uploaded-calculator .content')[0].scrollHeight);
					setTimeout(autoUpdateCalc, 300);
				},
				error: function() {
					setTimeout(autoUpdateCalc, 300);
				},
			});
		} else {
			$('.uploading').remove();
			$('<div class="uploading">Успешно загружено!</div>').appendTo('#uploaded-calculator .content');
		}
	}
	$(document).ready(function() {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#clear-log').on('click', function() {
			$.ajax({
				url: '/deleteLaravelLogs',
				method: 'POST',
				success: function(response) {
					location.reload();
				}
			});
		});
		$('#more-history').on('click', function() {
			$('.timeline .event:nth-child(3)').css('border-bottom', '1px dashed rgba(255, 255, 255, .1)');
			$('.timeline .event:nth-child(3)').css('margin-bottom', '50px');
			$('.timeline .event').slideDown();
			$(this).remove();
		});
		$('#uploaded-products .close-terminal').on('click', function() {
			$('#uploaded-products').css('height', '0');
		});
		$('#csv-upload').on('change', function() {
			if (document.getElementById("csv-file").value != "") {
				$('.display-filename').css('margin-top', '0');
				$('.display-filename').empty();
				$('#prepare-products').empty();
				$('#prepare-products-wrap').css('height', '0');
				$('#csv-upload label').html(
					'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg>' +
					document.getElementById('csv-file').value.replace(/.*[\/\\]/, ''));
				$('#csv-upload button[type=submit]').css('display', 'flex');
				$('#csv-upload button[type=button]').css('display', 'none');
			}
		});
		$('#csv-categories-upload').on('change', function() {
			if (document.getElementById("csv-categories-file").value != "") {
				$('#csv-categories-upload label').html(
					'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg>' +
					document.getElementById('csv-categories-file').value.replace(/.*[\/\\]/, ''));
				$('#csv-categories-upload button[type=submit]').css('display', 'flex');
				$('#csv-categories-upload button[type=button]').css('display', 'none');
			}
		});
		$('#csv-upload').submit(function(e) {
			$('#prepare-products').empty();
			$('#prepare-products-wrap').css('height', '420px');
			$('.display-errors').empty();
			$('.display-errors').css('margin-top', '0');
			e.preventDefault();
			var formData = new FormData(this);
			var url = '/csvProductsUpload';
			$.ajax({
				url: url,
				method: 'POST',
				data: formData,
				dataType: 'JSON',
				contentType: false,
				processData: false,
				success: function(response) {
					var file = document.getElementById('csv-file');
					var import_field = 1;
					$('.display-filename').html(file.value.replace(/.*[\/\\]/, ''));
					$('.display-filename').css('margin-top', '10px');
					file.value = file.defaultValue;
					$('#global-message').remove();
					$('#global-message-red').remove();
					if (response.success == false) {
						$('main').prepend('<div id="global-message-red">' + response.message + '</div>');
					}
					$('#csv-upload button[type=submit]').css('display', 'none');
					$('#csv-upload label').html(
						'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg> Импортировать товары'
					);
					if (response.data.length > 0) {
						$('#prepare-products').append('<div id="head-table"></div>');
						$('#prepare-products').append('<div id="body-table"></div>');
						$('#head-table').append('<div>#</div>');
						$('#head-table').append('<div>Категория</div>');
						$('#head-table').append('<div>Артикул</div>');
						$('#head-table').append('<div>Код товара</div>');
						$('#head-table').append('<div>Наименование</div>');
						$('#head-table').append('<div>Статус</div>');
						$('#head-table').append('<div>Наклейка</div>');
						$('#head-table').append('<div>Наименование артикула</div>');
						$('#head-table').append('<div>В наличии, шт</div>');
						$('#head-table').append('<div>Валюта</div>');
						$('#head-table').append('<div>Цена</div>');
						$('#head-table').append('<div>Старая цена</div>');
						$('#head-table').append('<div>URL</div>');
						$('#head-table').append('<div>Производитель</div>');
						$('#head-table').append('<div>Срок изготовления</div>');
						$('#head-table').append('<div>Доставка</div>');
						$('#head-table').append('<div>Краткая информации</div>');
						$('#head-table').append('<div>Описание</div>');
						$('#head-table').append('<div>Meta Title</div>');
						$('#head-table').append('<div>Meta Description</div>');
						$('#body-table').append('<div class="content"></div>');
						var options = JSON.parse(response.data[0].options);
						for (var k in options) {
							if (options.hasOwnProperty(k)) {
								try {
									$('#head-table').append('<div>' + k[0].toUpperCase() + k.substring(1) + '</div>');
								} catch (error) {
									$('#head-table').append('<div class="error">Неизвестный столбец</div>');
								}
							}
						}
						for (i = 0; i < response.data.length; i++) {
							if (isOdd(response.data[i].child) == 0) {
								$('#body-table .content').append('<div class="product odd" id="num_' + i + '"></div>');
							} else {
								$('#body-table .content').append('<div class="product" id="num_' + i + '"></div>');
							}
							$('<div>' + (i + 1) + '</div>').appendTo('#num_' + i);
							if (response.data[i].category_id != 0) {
								$('<div class="category">' + $('<p>' + response.data[i].category + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .category').attr('title', response.data[i].category);
							} else {
								if (response.data[i].category != 0) {
									$('<div class="error category">' + $('<p>' + response.data[i].category + '</p>').text() + '</div>').appendTo('#num_' + i);
									$('#num_' + i + ' .category').attr('title', response.data[i].category);
								} else {
									$('<div class="error">Отсутствует</div>').appendTo('#num_' + i);
								}
							}
							if (response.data[i].sku != null) {
								$('<div class="sku">' + $('<p>' + response.data[i].sku + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .sku').attr('title', response.data[i].sku);
							} else {
								import_field = 0;
								$('<div class="sku">-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].sku_code != null) {
								$('<div class="sku_code">' + $('<p>' + response.data[i].sku_code + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .sku_code').attr('title', response.data[i].sku_code);
							} else {
								$('<div class="error">Отсутствует</div>').appendTo('#num_' + i);
							}
							$('<div class="name">' + $('<p>' + response.data[i].name + '</p>').text() + '</div>').appendTo('#num_' + i);
							$('#num_' + i + ' .name').attr('title', response.data[i].name);
							if (response.data[i].status != 0) {
								$('<div class="status">Отображается</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .status').attr('title', 'Отображается');
							} else {
								$('<div>Скрыто</div>').appendTo('#num_' + i);
							}
							if (response.data[i].sticker_id != 0) {
								$('<div class="sticker">' + $('<p>' + response.data[i].sticker + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .sticker').attr('title', response.data[i].sticker);
							} else {
								if (response.data[i].sticker_id != 0) {
									$('<div class="error sticker">' + $('<p>' + response.data[i].sticker + '</p>').text() + '</div>').appendTo('#num_' + i);
									$('#num_' + i + ' .sticker').attr('title', response.data[i].sticker);
								} else {
									$('<div>-</div>').appendTo('#num_' + i);
								}
							}
							if (response.data[i].sku_name != null) {
								$('<div class="sku_name">' + $('<p>' + response.data[i].sku_name + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .sku_name').attr('title', response.data[i].sku_name);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].in_stock != 0 && response.data[i].in_stock != null) {
								$('<div class="in_stock">' + $('<p>' + response.data[i].in_stock + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .in_stock').attr('title', response.data[i].in_stock);
							} else {
								if (response.data[i].in_stock != null) {
									$('<div>Нет в наличии</div>').appendTo('#num_' + i);
								} else {
									$('<div>∞</div>').appendTo('#num_' + i);
								}
							}
							if (response.data[i].currency != null) {
								$('<div class="currency">' + $('<p>' + response.data[i].currency + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .currency').attr('title', response.data[i].currency);
							} else {
								$('<div class="error">Отсутствует</div>').appendTo('#num_' + i);
							}
							if (response.data[i].price != null) {
								$('<div>' + response.data[i].price + ',00 ₽</div>').appendTo('#num_' + i);
							} else {
								$('<div>Цена по запросу</div>').appendTo('#num_' + i);
							}
							if (response.data[i].old_price != null) {
								$('<div>' + response.data[i].old_price + '</div>').appendTo('#num_' + i);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].url != null) {
								$('<div class="url">' + $('<p>' + response.data[i].url + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .url').attr('title', response.data[i].url);
							} else {
								$('<div class="error">' + response.data[i].url + '</div>').appendTo('#num_' + i);
							}
							if (response.data[i].brand_id != 0) {
								$('<div class="brand_id">' + $('<p>' + response.data[i].brand + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .brand_id').attr('title', response.data[i].brand);
							} else {
								if (response.data[i].brand != 0) {
									$('<div class="error brand_id">' + $('<p>' + response.data[i].brand + '</p>').text() + '</div>').appendTo('#num_' + i);
									$('#num_' + i + ' .brand_id').attr('title', response.data[i].brand);
								} else {
									$('<div class="error">Отсутствует</div>').appendTo('#num_' + i);
								}
							}
							if (response.data[i].production != null) {
								$('<div class="production">' + $('<p>' + response.data[i].production + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .production').attr('title', response.data[i].production);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].delivery != null) {
								$('<div class="delivery">' + $('<p>' + response.data[i].delivery + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .delivery').attr('title', response.data[i].delivery);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].short_info != null) {
								$('<div class="short_info">' + $('<p>' + response.data[i].short_info + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .short_info').attr('title', response.data[i].short_info);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].description != null) {
								$('<div class="description">' + $('<p>' + response.data[i].description.substr(0, 30) + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .description').attr('title', response.data[i].description);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].meta_title != null) {
								$('<div class="meta_title">' + $('<p>' + response.data[i].meta_title + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .meta_title').attr('title', response.data[i].meta_title);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							if (response.data[i].meta_description != null) {
								$('<div class="meta_description">' + $('<p>' + response.data[i].meta_description + '</p>').text() + '</div>').appendTo('#num_' + i);
								$('#num_' + i + ' .meta_description').attr('title', response.data[i].meta_description);
							} else {
								$('<div>-</div>').appendTo('#num_' + i);
							}
							var options = JSON.parse(response.data[i].options);
							for (var k in options) {
								if (options.hasOwnProperty(k)) {
									if (options[k][0] != null) {
										var key = k.substr(0, 15);
										key = key.replace(" ", "_");
										key = key.replace("/", "_");
										var trim = key.replace(/(^,)|(,$)/g, "");
										key = trim.replace(" ", "_");
										$('<div class="block_' + key + '">' + $('<p>' + options[k].toString().substr(0, 30) + '</p>').text() + '</div>').appendTo('#num_' + i);
										$('#num_' + i + ' .block_' + key).attr('title', options[k]);
									} else {
										$('<div></div>').appendTo('#num_' + i);
									}
								}
							}
						}
						var errors = $('.error').length;
						if (import_field == 1) {
							$('#csv-upload .import-field').css('display', 'flex');
						}
						$('#csv-upload button[type=button]').css('display', 'flex');
						if ($('.error').length > 0) {
							$('#csv-upload button[type=button]').addClass('disabled');
							$('.display-errors').append('Загрузка недоступна. Найдено ' + errors + ' ошибок.');
							$('.display-errors').css('margin-top', '10px');
						} else {
							$('#csv-upload button[type=button]').removeClass('disabled');
							$('.display-errors').empty();
							$('.display-errors').css('margin-top', '0');
						}
					}
					$('#prepare-products #body-table').scrollTop($('#prepare-products #body-table')[0].scrollHeight);
				},
				error: function() {
					var file = document.getElementById('csv-file');
					file.value = file.defaultValue;
				}
			});
		});

		$('#csv-categories-upload').submit(function(e) {
			$('#prepare-categories').empty();
			$('#prepare-categories-wrap').css('height', '420px');
			$('.display-errors').empty();
			$('.display-errors').css('margin-top', '0');
			e.preventDefault();
			var formData = new FormData(this);
			var url = '/csvCategoriesUpload';
			$.ajax({
				url: url,
				method: 'POST',
				data: formData,
				dataType: 'JSON',
				contentType: false,
				processData: false,
				success: function(response) {
					var file = document.getElementById('csv-categories-file');
					file.value = file.defaultValue;
					$('#global-message').remove();
					$('#global-message-red').remove();
					if (response.success == false) {
						$('main').prepend('<div id="global-message-red">' + response.message + '</div>');
					}
					$('#csv-categories-upload button[type=submit]').css('display', 'none');
					$('#csv-categories-upload label').html(
						'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg> Импортировать категории'
					);
					if (response.data.length > 0) {
						$('#prepare-categories').append('<div id="head-table-categories"></div>');
						$('#prepare-categories').append('<div id="body-table-categories"></div>');
						$('#head-table-categories').append('<div>#</div>');
						$('#head-table-categories').append('<div>Родительская категория</div>');
						$('#head-table-categories').append('<div>Наименование</div>');
						$('#head-table-categories').append('<div>URL</div>');
						$('#head-table-categories').append('<div>Описание</div>');
						$('#head-table-categories').append('<div>Активно</div>');
						$('#head-table-categories').append('<div>Показывать контент</div>');
						$('#head-table-categories').append('<div>Показывать в меню</div>');
						$('#head-table-categories').append('<div>Meta Title</div>');
						$('#head-table-categories').append('<div>Meta Description</div>');
						$('#head-table-categories').append('<div>Изображение</div>');
						$('#body-table-categories').append('<div class="content"></div>');
						for (i = 0; i < response.data.length; i++) {
							if (isOdd(i) == 0) {
								$('#body-table-categories .content').append('<div class="product odd" id="cat_num_' + i + '"></div>');
							} else {
								$('#body-table-categories .content').append('<div class="product" id="cat_num_' + i + '"></div>');
							}
							$('<div>' + (i + 1) + '</div>').appendTo('#cat_num_' + i);
							if (response.data[i].parent_name != null) {
								$('<div class="parent_category">' + $('<p>' + response.data[i].parent_name + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .parent_category').attr('title', response.data[i].parent_name);
							} else {
								$('<div>-</div>').appendTo('#cat_num_' + i);
							}
							if (response.data[i].name != null) {
								$('<div class="name">' + $('<p>' + response.data[i].name + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .name').attr('title', response.data[i].name);
							}
							if (response.data[i].url != null) {
								$('<div class="url">' + $('<p>' + response.data[i].url + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .url').attr('title', response.data[i].url);
							}
							if (response.data[i].body != null) {
								$('<div class="body">' + $('<p>' + response.data[i].body + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .body').attr('title', response.data[i].body);
							} else {
								$('<div>-</div>').appendTo('#cat_num_' + i);
							}
							if (response.data[i].active !== null) {
								$('<div class="active">' + $('<p>' + response.data[i].active + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .active').attr('title', response.data[i].active);
							}
							if (response.data[i].show_content !== null) {
								$('<div class="show_content">' + $('<p>' + response.data[i].show_content + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .show_content').attr('title', response.data[i].show_content);
							}
							if (response.data[i].show_menu !== null) {
								$('<div class="show_menu">' + $('<p>' + response.data[i].show_menu + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .show_menu').attr('title', response.data[i].show_menu);
							}
							if (response.data[i].meta_title != null) {
								$('<div class="meta_title">' + $('<p>' + response.data[i].meta_title + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .meta_title').attr('title', response.data[i].meta_title);
							}
							if (response.data[i].meta_description != null) {
								$('<div class="meta_description">' + $('<p>' + response.data[i].meta_description + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .meta_description').attr('title', response.data[i].meta_description);
							}
							if (response.data[i].image != null) {
								$('<div class="image">' + $('<p>' + response.data[i].image + '</p>').text() + '</div>').appendTo('#cat_num_' + i);
								$('#cat_num_' + i + ' .image').attr('title', response.data[i].image);
							} else {
								$('<div>-</div>').appendTo('#cat_num_' + i);
							}
						}
						$('#csv-categories-upload button[type=button]').css('display', 'flex');
						$('#csv-categories-upload button[type=button]').removeClass('disabled');
					}
					$('#prepare-categories #body-table-categories').scrollTop($('#prepare-categories #body-table-categories')[0].scrollHeight);
				},
				error: function() {
					var file = document.getElementById('csv-categories-file');
					file.value = file.defaultValue;
				}
			});
		});

		$('#csv-upload button[type=button]').on('click', function(e) {
			if ($(this).hasClass('disabled') != true) {
				uploadProductLine();
			}
		});

		$('#csv-categories-upload button[type=button]').on('click', function(e) {
			if ($(this).hasClass('disabled') != true) {
				uploadCategoryLine();
			}
		});

		$('#upload').on('change', function() {
			if (document.getElementById("file-upload").value != "") {
				$('#upload label').html(
					'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg>' +
					document.getElementById('file-upload').value.replace(/.*[\/\\]/, ''));
				$('#upload button[type=submit]').css('display', 'flex');
			}
		});
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#upload').submit(function(e) {
			auto = 1;
			$('#uploaded-products .content').empty();
			$('#uploaded-products').css('height', '340px');
			e.preventDefault();
			var formData = new FormData(this);
			var url = '/uploadProducts';
			setTimeout(autoUpdate, 500);
			$.ajax({
				url: url,
				method: 'POST',
				data: formData,
				dataType: 'JSON',
				contentType: false,
				processData: false,
				success: function(response) {
					var file = document.getElementById('file-upload');
					file.value = file.defaultValue;
					autoUpdate();
					auto = 0;
					$('#global-message').remove();
					$('#global-message-red').remove();
					if (response.success == true) {
						$('main').prepend('<div id="global-message">' + response.message + '</div>');
					} else {
						$('main').prepend('<div id="global-message-red">' + response.message + '</div>');
					}
					$('#upload button[type=submit]').css('display', 'none');
					$('#upload label').html(
						'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg> Импортировать товары'
					);
				},
				error: function() {
					var file = document.getElementById('file-upload');
					file.value = file.defaultValue;
				}
			});
		});
		$('#uploaded-calculator .close-terminal').on('click', function() {
			$('#uploaded-calculator').css('height', '0');
		});
		$('#upload-calculator').on('change', function() {
			if (document.getElementById("file-upload-calculator").value != "") {
				$('#upload-calculator label').html(
					'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg>' +
					document.getElementById('file-upload-calculator').value.replace(/.*[\/\\]/, ''));
				$('#upload-calculator button[type=submit]').css('display', 'flex');
			}
		});
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$('#upload-calculator').submit(function(e) {
			autoCalc = 1;
			$('#uploaded-calculator .content').empty();
			$('#uploaded-calculator').css('height', '340px');
			e.preventDefault();
			var formData = new FormData(this);
			var url = '/uploadCalculator';
			setTimeout(autoUpdateCalc, 500);
			$.ajax({
				url: url,
				method: 'POST',
				data: formData,
				dataType: 'JSON',
				contentType: false,
				processData: false,
				success: function(response) {
					var file = document.getElementById('file-upload-calculator');
					file.value = file.defaultValue;
					autoUpdateCalc();
					autoCalc = 0;
					$('#global-message').remove();
					$('#global-message-red').remove();
					if (response.success == true) {
						$('main').prepend('<div id="global-message">' + response.message + '</div>');
					} else {
						$('main').prepend('<div id="global-message-red">' + response.message + '</div>');
					}
					$('#upload-calculator button[type=submit]').css('display', 'none');
					$('#upload-calculator label').html(
						'<svg fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 550.801 550.801"><path d="M475.084,131.992c-0.021-2.521-0.828-5.021-2.562-6.993L366.324,3.689c-0.031-0.035-0.062-0.045-0.084-0.077    c-0.633-0.706-1.371-1.284-2.151-1.803c-0.232-0.145-0.464-0.285-0.707-0.422c-0.675-0.367-1.392-0.665-2.13-0.886    c-0.201-0.063-0.38-0.145-0.58-0.197C359.87,0.114,359.037,0,358.193,0H97.2C85.282,0,75.6,9.693,75.6,21.601v507.6    c0,11.907,9.682,21.601,21.6,21.601H453.6c11.908,0,21.601-9.693,21.601-21.601V133.202    C475.2,132.791,475.137,132.393,475.084,131.992z M181.101,495.672c8.931,0,18.845-1.94,24.677-4.271l4.472,23.129    c-5.444,2.722-17.684,5.643-33.626,5.643c-45.291,0-68.618-28.191-68.618-65.506c0-44.709,31.88-69.589,71.529-69.589    c15.356,0,27.021,3.106,32.276,5.833l-6.033,23.514c-6.02-2.525-14.386-4.846-24.877-4.846c-23.517,0-41.784,14.186-41.784,43.331    C139.116,479.155,154.662,495.672,181.101,495.672z M261.776,520.172c-14.964,0-29.742-3.892-37.125-7.973l6.02-24.49    c7.976,4.082,20.218,8.163,32.854,8.163c13.605,0,20.798-5.643,20.798-14.196c0-8.163-6.217-12.824-21.963-18.457    c-21.766-7.583-35.955-19.627-35.955-38.675c0-22.359,18.658-39.467,49.565-39.467c14.771,0,25.66,3.106,33.428,6.613    l-6.602,23.909c-5.258-2.531-14.576-6.223-27.412-6.223c-12.825,0-19.045,5.833-19.045,12.636c0,8.369,7.38,12.055,24.303,18.468    c23.124,8.559,34.014,20.598,34.014,39.065C314.645,501.504,297.738,520.172,261.776,520.172z M400.18,518.216h-34.594    L323.6,387.213h32.463l15.937,55.403c4.472,15.546,8.554,30.512,11.665,46.844h0.58c3.301-15.747,7.383-31.298,11.854-46.259    l16.717-55.982h31.493L400.18,518.216z M97.2,366.752V21.601h250.192v110.521c0,5.962,4.842,10.8,10.801,10.8H453.6v223.837H97.2    V366.752z"/><path d="M377.188,170.058h-66.149h-2.31h-66.15l0,0h-65v29.223v2.193v27.032v2.312v26.924v2.302v29.226h68.462l0,0h131.27v-92.688    h-0.122V170.058z M243.728,286.971H179.89v-26.927h63.837V286.971z M243.728,257.742H179.89v-26.924h63.837V257.742z     M243.728,228.506H179.89v-26.913h62.688h1.149V228.506z M244.891,199.281v-26.913h63.838v26.913H246.04H244.891z     M374.604,286.569h-25.207v-77.098H332.09v77.098h-14.418v-61.13h-17.308v61.13h-12.698v-45.362h-17.31v45.362h-24.321v-26.525    v-2.302v-26.924v-2.312v-26.913h62.688h2.315h63.565V286.569z M374.878,196.581h-0.274v2.7h-63.565v-26.913h63.84V196.581z" /></svg> Импортировать конфигуратор заказа'
					);
				},
				error: function() {
					var file = document.getElementById('file-upload-calculator');
					file.value = file.defaultValue;
				}
			});
		});
	});
function toUpdate(update) {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
    $.ajax({
        url: '/toUpdate',
        method: 'POST',
		data: {
			update: update,
		},
		success: function(response) {
			$('#global-message').remove();
			$('#global-message-red').remove();
			$('#action-message').remove();
			if (response.success == true) {
				if (response.refresh == true) {
					$('main').prepend('<div id="global-message">' + response.shell + '</div>');
					setTimeout(function() {
						location.reload();
					}, 2000);
				} else {
					$('main').prepend('<div id="global-message">' + response.shell + '</div>');
				}
			} else {
				$('main').prepend('<div id="global-message-red">' + response.shell + '</div>');
			}
		}
    });
}
@if (Auth::user()->role_id <= 2)
function checkUpdate() {
	$.ajax({
		url: '/checkUpdate',
		method: 'GET',
		success: function(response) {
			$('#action-message').remove();
			if (response.success == true) {
				$('main').prepend('<div id="action-message"><div class="message">Вышло обновление ' + response.versions[0] + '. Обновить сейчас?</div><div class="buttons-wrap"><button onclick="toUpdate(1)" type="button"><i class="fas fa-retweet"></i><span>Обновить</span></button><button onclick="toUpdate(2)" type="button"><i class="far fa-clock"></i><span>Спросить позже</span></button><button onclick="toUpdate(3)" type="button"><i class="fas fa-ban"></i><span>Отменить</span></button></div></div>');
				console.log(response.versions);
			}
		},
		error: function() {

		},
	});
};
// checkUpdate();
@endif
</script>
</body>
</html>
