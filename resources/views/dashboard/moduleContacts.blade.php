@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="module-contacts-wrap">
    <h1>Контакты</h1>
    <form action="/editContacts" method="POST">
        @csrf
        <div class="input-wrap">
            <div class="name">Название организации:</div>
            <input type="text" name="name" value="{{ $contacts['name'] }}" placeholder="Название организации">
        </div>
        <div class="input-wrap">
            <div class="name">Юридический адрес:</div>
            <input type="text" name="legal_address" value="{{ $contacts['legal_address']}}" placeholder="Юридический адрес">
        </div>
        <div class="input-wrap">
            <div class="name">Почтовый адрес:</div>
            <input type="text" name="post_address" value="{{ $contacts['post_address'] }}" placeholder="Почтовый адрес">
        </div>
        <div class="input-wrap">
            <div class="name">Фактический адрес:</div>
            <input type="text" name="main_address" value="{{ $contacts['main_address'] }}" placeholder="Фактический адрес">
        </div>
        <div class="input-wrap">
            <div class="name">Адрес склада:</div>
            <input type="text" name="storage_address" value="{{ $contacts['storage_address'] }}" placeholder="Адрес склада">
        </div>
        <div class="input-wrap">
            <div class="name">E-mail:</div>
            <input type="text" name="email" value="{{ $contacts['email'] }}" placeholder="E-mail">
        </div>
        <div class="input-wrap">
            <div class="name">Телефон в Екатеринбурге:</div>
            <input type="text" name="phone" value="{{ $contacts['phone'] }}" placeholder="Телефон в Екатеринбурге">
        </div>
        <div class="input-wrap">
            <div class="name">Телефон в Москве:</div>
            <input type="text" name="phone_msk" value="{{ $contacts['phone_msk'] }}" placeholder="Телефон в Москве">
        </div>
        <div class="input-wrap">
            <div class="name">Телефон Склада:</div>
            <input type="text" name="storage_phone" value="{{ $contacts['storage_phone'] }}" placeholder="Телефон склада">
        </div>
        <div class="textarea-wrap">
            <div class="name">Реквизиты:</div>
            <textarea name="bank_info" placeholder="Реквизиты">{{ $contacts['bank_info'] }}</textarea>
        </div>
        <div class="textarea-wrap">
            <div class="name">Время работы:</div>
            <textarea name="work_hours" placeholder="Время работы">{{ $contacts['work_hours'] }}</textarea>
        </div>
        <div class="btn-sub-wrap">
            <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
        </div>
    </form>
</div>
@endsection
