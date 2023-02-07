@extends('dashboard.layouts.main')

@section('content')
<div class="specials-edit-wrap">
    <h1>{{ $special->name }}</h1>
    <form class="upload-image">
        @csrf
        <input type="hidden" name="id" value="{{ $special->id }}">
        <div class="image">
            <img id="dynamic-img" src="{{ $special->image }}" alt="{{ $special->name }}">
        </div>
        <label class="file-btn">
            <i class="fas fa-images"></i><span>Изменить изображение</span>
            <input type="file" name="newImage">
        </label>
    </form>
    <form action="/updateSpecial" method="POST" class="update-special">
        @csrf
        <input type="hidden" name="id" value="{{ $special->id }}">
        <div class="input-wrap">
            <div class="name">Название:</div>
            <input type="text" name="name" value="{{ $special->name }}" placeholder="Название" required>
        </div>
        <div class="input-wrap">
            <div class="name">Url:</div>
            <input type="text" name="url" value="{{ $special->url }}" placeholder="Url" required>
        </div>
        <div class="input-wrap">
            <div class="name">H2:</div>
            <input type="text" name="h2" value="{{ $special->h2 }}" placeholder="H2" required>
        </div>
        <div class="textarea-wrap">
            <div class="name">Краткое описание:</div>
            <textarea name="short_description" placeholder="Краткое описание" required>{{ $special->short_description }}</textarea>
        </div>
        <div class="textarea-wrap">
            <div class="name">Описание:</div>
            <textarea name="description" placeholder="Описание" required>{{ $special->description }}</textarea>
        </div>
        <div class="input-wrap">
            <div class="name">Meta Title:</div>
            <input type="text" name="metaTitle" value="{{ $special->metaTitle }}" placeholder="Meta Title">
        </div>
        <div class="textarea-wrap">
            <div class="name">Meta Description:</div>
            <textarea name="metaDescription" placeholder="Meta Description">{{ $special->metaDescription }}</textarea>
        </div>
        <div class="btn-wrap">
            <div class="btn-sub-wrap">
                <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
            </div>
            <div class="btn-sub-wrap">
                <button onclick="deleteSpecial({{ $special->id }})" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
            </div>
        </div>
    </form>
    <div id="app">
        <specials prop-id="{{ $special->id }}"></specials>
        <specials-connections prop-id="{{ $special->id }}"></specials-connections>
    </div>
</div>
<script>
function deleteSpecial(element) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/deleteSpecial",
        data: {
            special_id: element,
        },
        success: function(response) {
            window.location = '/dashboard/modules/specials/';
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
        var url = '/addSpecialImg';
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
});
</script>
@endsection
