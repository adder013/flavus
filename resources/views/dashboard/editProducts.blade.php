@extends('dashboard.layouts.main')

@section('content')
<div class="edit-product">
    <div id="app">
        <product-main-info prop-id="{{ $product->id }}"></product-main-info>
        <div class="files-wrap">
            <div class="uploaded-images"></div>
            <button type="button" id="lfm-img" data-input="selected-image"><i class="far fa-image"></i><span>Добавить изображение</span></button>
            <input id="selected-image" class="hidden" type="text" name="filepath">
            <div class="uploaded-files"></div>
            <button type="button" id="lfm-files" data-input="selected-files"><i class="fas fa-folder"></i><span>Добавить документ</span></button>
            <input id="selected-files" class="hidden" type="text" name="filepath">
        </div>
        <product-edit prop-id="{{ $product->id }}"></product-edit>
        <product-tabs prop-id="{{ $product->id }}"></product-tabs>
        <calc-options prop-id="{{ $product->id }}"></calc-options>
        <product-accessories prop-id="{{ $product->id }}"></product-accessories>
        <product-cross-selling prop-id="{{ $product->id }}"></product-cross-selling>
        <product-up-selling prop-id="{{ $product->id }}"></product-up-selling>
    </div>
</div>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function getAllFiles() {
    var product_id = {{ $product->id }};
    var url = '/getAllFiles/' + product_id;
    $.ajax({
        url: url,
        method: 'GET',
        success: function(response) {
            $('.uploaded-images').empty();
            $('.uploaded-files').empty();
            if (response.images.length > 0) {
                for (i = 0; i < response.images.length; i++) {
                    $('.uploaded-images').append('<div id="img_' + i + '" class="upd-img"></div>');
                    $('<div class="img-wrap"><img src="' + response.images[i].path  + '" alt="Image"></div>').appendTo('#img_' + i);
                    $('<div class="wrap-img-btn"></div>').appendTo('#img_' + i);
                    $('<button onclick="makeMain(' + response.images[i].id + ')"><i class="fas fa-images"></i></button>').appendTo('#img_' + i + ' .wrap-img-btn');
                    $('<button onclick="deleteImg(' + response.images[i].id + ')"><i class="fas fa-trash"></i></button>').appendTo('#img_' + i + ' .wrap-img-btn');
                }
            }
            if (response.files.length > 0) {
                for (i = 0; i < response.files.length; i++) {
                    $('.uploaded-files').append('<div id="file_' + i + '" class="upd-files"></div>');
                    $('<div class="file-name"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm160-14.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path></svg><span>' + response.files[i].name + '</span></div>').appendTo('#file_' + i);
                    $('<div class="wrap-file-btn"></div>').appendTo('#file_' + i);
                    $('<button onclick="deleteFile(' + response.files[i].id + ')"><i class="fas fa-trash"></i></button>').appendTo('#file_' + i + ' .wrap-file-btn');
                }
            }
        },
    });
}

function makeMain(img_id) {
    var p_id = {{ $product->id }};
    $.ajax({
        url: '/makeMainImg',
        method: 'POST',
        data: {
            product_id: p_id,
            image: img_id,
        },
        dataType: 'JSON',
        success: function(response) {
            $('#main-img').attr('src', response.image);
        },
    });
}

function deleteImg(img_id) {
    var p_id = {{ $product->id }};
    $.ajax({
        url: '/deleteImg',
        method: 'POST',
        data: {
            product_id: p_id,
            image: img_id,
        },
        dataType: 'JSON',
        success: function(response) {
            $('#main-img').attr('src', response.image);
            if (response.image == null) {
                $('#main-img').attr('src', '/img/placeholder.jpg');
            }
            getAllFiles();
        },
    });
}
function deleteFile(file_id) {
    var p_id = {{ $product->id }};
    $.ajax({
        url: '/deleteFile',
        method: 'POST',
        data: {
            product_id: p_id,
            file: file_id,
        },
        dataType: 'JSON',
        success: function(response) {
            getAllFiles();
        },
    });
}

getAllFiles();

$(document).ready(function() {
    $('#lfm-img').filemanager('image', {prefix: ""});
    $('#lfm-files').filemanager('file', {prefix: ""});

    $('#selected-image').on('change', function() {
        var add = $(this).val(),
            p_id = {{ $product->id }};
        $(this).val('');
        $.ajax({
            url: '/addProductImage',
            method: 'POST',
	        data: {
                product_id: p_id,
                path: add,
            },
            dataType: 'JSON',
            success: function(response) {
                getAllFiles();
            },
        });
    });

    $('#selected-files').on('change', function() {
        var add = $(this).val(),
            p_id = {{ $product->id }};
        $(this).val('');
        $.ajax({
            url: '/addProductFile',
            method: 'POST',
	        data: {
                product_id: p_id,
                path: add,
            },
            dataType: 'JSON',
            success: function(response) {
                getAllFiles();
            },
        });
    });

    $('#accessories-btn').change(function() {

        if ($('#accessories-btn').is(':checked')) {
            $('.product-accessories').css('max-height', '15000px');
        } else {
            $('.product-accessories').css('max-height', '0');
        }
    });

    $('#cross-selling-btn').change(function() {
        if ($('#cross-selling-btn').is(':checked')) {
            $('.product-cross-selling').css('max-height', '15000px');
        } else {
            $('.product-cross-selling').css('max-height', '0');
        }
    });

    $('#cross-up-btn').change(function() {
        if ($('#cross-up-btn').is(':checked')) {
            $('.product-up-selling').css('max-height', '15000px');
        } else {
            $('.product-up-selling').css('max-height', '0');
        }
    });

});
</script>
@endsection
