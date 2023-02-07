@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="module-specials-wrap">
    <h1>Новости производителей</h1>
    <div class="add-special">
        <form action="/addSpecial" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="file-btn">
                <input type="file" name="newImage" accept=".jpg,.jpeg,.png,.bmp">
            </label>
            <div class="input-wrap">
                <div class="name">Название:</div>
                <input type="text" name="name" placeholder="Название новости" required>
            </div>
            </label>
            <div class="input-wrap">
                <div class="name">URL:</div>
                <input type="text" name="url" placeholder="URL" required>
            </div>
            <div class="input-wrap">
                <div class="name">H2:</div>
                <input type="text" name="h2" placeholder="H2">
            </div>
            <div class="textarea-wrap">
                <div class="name">Краткое описание:</div>
                <textarea name="short_description" placeholder="Краткое описание"></textarea>
            </div>
            <div class="textarea-wrap">
                <div class="name">Описание:</div>
                <textarea name="description" placeholder="Описание"></textarea>
            </div>
            <div class="textarea-wrap">
                <div class="name">Meta Title:</div>
                <textarea name="metaTitle" placeholder="Meta Title"></textarea>
            </div>
            <div class="textarea-wrap">
                <div class="name">Meta Description:</div>
                <textarea name="metaDescription" placeholder="Meta Description"></textarea>
            </div>
            <div class="btn-sub-wrap">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </div>
        </form>
    </div>
    <div class="specials">
        @foreach ($specials as $special)
            <div class="locker">
                <a href="{{ url('/dashboard/modules/specials/'.$special->url) }}">{{ $special->name }}</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
