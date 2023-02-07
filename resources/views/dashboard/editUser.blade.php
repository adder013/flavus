@extends('dashboard.layouts.main')

@section('content')
<div id="app" class="hidden"></div>
<div class="edit-user">
    <h1>{{ $user->name }}</h1>
    <form class="upload-image">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="image">
            <img id="dynamic-img" class="b-lazy" src="{{ url('/img/placeholder.jpg') }}" data-src="@if($user->image){{ url($user->image) }}@endif" alt="{{ $user->name }}">
        </div>
        <label class="file-btn">
            <i class="fas fa-images"></i><span>Изменить изображение</span>
            <input type="file" name="newImage">
        </label>
    </form>
    <form action="/updateUser" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <div class="input-wrap">
            <div class="name">Имя:</div>
            <input type="text" name="name" value="{{ $user->name }}" placeholder="Имя"  autocomplete="off">
        </div>
        <div class="input-wrap">
            <div class="name">E-mail:</div>
            <input type="email" name="email" value="{{ $user->email }}" placeholder="E-mail" autocomplete="new-email">
        </div>
        <div class="input-wrap">
            <div class="name">Пароль:</div>
            <input type="password" name="password" placeholder="Пароль" autocomplete="new-password">
        </div>
        <div class="input-wrap">
            <div class="name">Подтвердить пароль:</div>
            <input type="password" name="password_confirmation" placeholder="Подтвердить пароль" autocomplete="new-password">
        </div>
        <div class="btn-sub-wrap">
            <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
        </div>
    </form>
</div>
<script>
var bLazy = new Blazy();
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.upload-image').change(function() {
        var formData = new FormData(this);
        var url = '/addUserImg';
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
