@extends('dashboard.layouts.main')

@section('content')
<div class="module-delivery-wrap">
    <h1>Доставка</h1>
    <form enctype="multipart/form-data" action="/uploadDeliveryDB" method="POST" class="upload-delivery-db">
        @csrf
        <input type="file" name="file-upload">
        <button type="submit">Загрузить</button>
    </form>
    <div class="add-delivery">
        <form action="/addDelivery" method="POST">
            @csrf
            <div class="on-off">
                <span>Показывать в подвале:</span>
                <input name="active" class="tgl tgl-flat" id="enabled" type="checkbox">
                <label class="tgl-btn" for="enabled"></label>
            </div>
            <div class="input-wrap">
                <div class="name">Страна:</div>
                <input type="text" name="country" placeholder="Страна" required>
            </div>
            <div class="input-wrap">
                <div class="name">Регион:</div>
                <input type="text" name="region" placeholder="Регион" required>
            </div>
            <div class="input-wrap">
                <div class="name">Город:</div>
                <input type="text" name="city" placeholder="Город" required>
            </div>
            </label>
            <div class="input-wrap">
                <div class="name">URL:</div>
                <input type="text" name="url" placeholder="URL">
            </div>
            <div class="input-wrap">
                <div class="name">Meta Title:</div>
                <input type="text" name="metaTitle" placeholder="Meta Title">
            </div>
            <div class="textarea-wrap">
                <div class="name">Meta Description:</div>
                <textarea name="metaDescription" placeholder="Meta Description"></textarea>
            </div>
            <div class="textarea-wrap">
                <div class="name">Адрес</div>
                <textarea name="address" placeholder="Адрес"></textarea>
            </div>
            <div class="btn-sub-wrap">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </div>
        </form>
    </div>
    <div id="app">
        <delivery></delivery>
    </div>
</div>
@endsection
