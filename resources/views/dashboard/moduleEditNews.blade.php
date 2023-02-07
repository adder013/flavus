@extends('dashboard.layouts.main')

@section('content')
<div class="news-edit">
    <h1>{{ $news->title }}</h1>
    <form class="upload-image">
        @csrf
        <input type="hidden" name="id" value="{{ $news->id }}">
        <div class="image">
            <img id="dynamic-img" src="{{ $news->image }}" alt="{{ $news->title }}">
        </div>
        <label class="file-btn">
            <i class="fas fa-images"></i><span>Изменить изображение</span>
            <input type="file" name="newImage">
        </label>
    </form>
    <div class="on-off">
        <span>Отображать на сайте:</span>
        <input class="tgl tgl-flat" id="enabled" type="checkbox" @if ($news->active) checked @endif>
        <label class="tgl-btn" for="enabled"></label>
    </div>
    <form action="/updateNews" method="POST" class="update-news">
        @csrf
        <input type="hidden" name="id" value="{{ $news->id }}">
        <div class="input-wrap">
            <div class="name">Название:</div>
            <input type="text" name="name" value="{{ $news->title }}" placeholder="Название" required>
        </div>
        <div class="textarea-wrap">
            <div class="name">Превью новости:</div>
            <textarea name="preview" placeholder="Превью новости">{{ $news->preview }}</textarea>
        </div>
        <div class="textarea-wrap">
            <div class="name">Текст новости:</div>
            <textarea name="body" placeholder="Текст новости">{{ $news->body }}</textarea>
        </div>
        <div class="input-wrap">
            <div class="name">Url:</div>
            <input type="text" name="url" value="{{ $news->url }}" placeholder="Url" required>
        </div>
        <div class="input-wrap">
            <div class="name">Meta Title:</div>
            <input type="text" name="metaTitle" value="{{ $news->metaTitle }}" placeholder="Meta Title">
        </div>
        <div class="textarea-wrap">
            <div class="name">Meta Description:</div>
            <textarea name="metaDescription" placeholder="Meta Description">{{ $news->metaDescription }}</textarea>
        </div>
        <div class="btn-wrap">
            <div class="btn-sub-wrap">
                <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
            </div>
            <div class="btn-sub-wrap">
                <button onclick="deleteNews({{ $news->id }})" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
            </div>
        </div>
    </form>
    <div id="app">
        <module-news prop-id="{{ $news->id }}"></module-news>
    </div>
</div>
<script>
function deleteNews(element) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/deleteNews",
        data: {
            locker_id: element,
        },
        success: function(response) {
            window.location = '/dashboard/modules/news/';
        }
    });
};
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.upload-image').change(function() {
        var formData = new FormData(this);
        var url = '/addNewsImg';
        $.ajax({
	        url: url,
	        method: 'POST',
	        data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
	        success: function(response) {
                if (response.success == true) {
                    $('#dynamic-img').attr('src', response.newImage);
                } else {
                    $('.global-message-red').remove();
                    $('<div class="global-message-red">' + response.message + '</div>').appendTo('#app');
                }
            }
        });
    });
    $('#enabled').change(function() {
        if ($('#enabled').is(':checked')) {
            var id = {{ $news->id }};
            var url = '/enableNews';
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    id: id,
                    checked: 1,
                },
            });
        } else {
            var id = {{ $news->id }};
            var url = '/enableNews';
            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    id: id,
                    checked: 0,
                },
            });
        }
    });
});
</script>
@endsection
