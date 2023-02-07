@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="module-partners-wrap">
    <h1>Партнеры</h1>
    <div class="add-partner">
        <form action="/addPartner" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="file-btn">
                <input type="file" name="newImage" accept=".jpg,.jpeg,.png,.bmp">
            </label>
            <label class="file-btn">
                <input type="file" name="newCertificate" accept=".jpg,.jpeg,.png,.bmp">
            </label>
            <div class="input-wrap">
                <div class="name">Название:</div>
                <input type="text" name="name" placeholder="Наименование партнера" required>
            </div>
            <div class="textarea-wrap">
                <div class="name">Описание:</div>
                <textarea name="desc" placeholder="Описание"></textarea>
            </div>
            <div class="btn-sub-wrap">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </div>
        </form>
    </div>
    <div class="partners">
        @foreach ($partners as $partner)
            <div class="partner">
                <form action="/updatePartner" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $partner->id }}">
                    <div class="img-wrap">
                        <img src="{{ $partner->image }}" alt="{{ $partner->name }}">
                    </div>
                    <label class="file-btn">
                        <input type="file" name="newImage" accept=".jpg,.jpeg,.png,.bmp">
                    </label>
                    <div class="img-wrap">
                        <img src="{{ $partner->certificate }}" alt="Сертификат {{ $partner->name }}">
                    </div>
                    <label class="file-btn">
                        <input type="file" name="newCertificate" accept=".jpg,.jpeg,.png,.bmp">
                    </label>
                    <div class="input-wrap">
                        <div class="name">Название:</div>
                        <input type="text" name="name" value="{{ $partner->name }}" placeholder="Наименование партнера" required>
                    </div>
                    <div class="textarea-wrap">
                        <div class="name">Описание:</div>
                        <textarea name="desc" placeholder="Описание">{{ $partner->body }}</textarea>
                    </div>
                    <div class="btn-sub-wrap">
                        <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    </div>
                </form>
                <div class="delete-partner">
                    <form action="/deletePartner" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $partner->id }}">
                        <button type="submit"><i class="fas fa-trash"></i><span>Удалить категорию</span></button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
