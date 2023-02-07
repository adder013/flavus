@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="module-news-wrap">
    <h1>Новости</h1>
    <div class="add-news">
        <form action="/addNews" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="on-off">
                <span>Отображать:</span>
                <input name="active" class="tgl tgl-flat" id="enabled" type="checkbox">
                <label class="tgl-btn" for="enabled"></label>
            </div>
            <label class="file-btn">
                <input type="file" name="newImage" accept=".jpg,.jpeg,.png,.bmp">
            </label>
            <div class="input-wrap">
                <div class="name">Название:</div>
                <input type="text" name="title" placeholder="Название" required>
            </div>
            <div class="textarea-wrap">
                <div class="name">Превью новости:</div>
                <textarea name="preview" placeholder="Превью новости"></textarea>
            </div>
            <div class="textarea-wrap">
                <div class="name">Текст новости:</div>
                <textarea name="body" placeholder="Текст новости"></textarea>
            </div>
            <div class="input-wrap">
                <div class="name">URL:</div>
                <input type="text" name="url" placeholder="URL" required>
            </div>
            <div class="input-wrap">
                <div class="name">Meta Title:</div>
                <input type="text" name="metaTitle" placeholder="Meta Title">
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
    <div class="all-news">
        @foreach ($allNews as $news)
            <div class="news">
                <a href="{{ URL::to('/dashboard/modules/news/'.$news->url) }}">{{ $news->title }}</a>
            </div>
        @endforeach
    </div>
</div>
@endsection
