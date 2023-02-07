@extends('dashboard.layouts.main')

@section('content')
<div class="property-wrap">
    <h1>{{ $property->name }}</h1>
    <div class="property">
        <form action="/editOption" method="POST" class="edit-property">
            @csrf
            <input type="hidden" name="id" value="{{ $property->id }}">
            <div class="input-wrap">
                <div class="name">Название:</div>
                <input type="text" name="name" value="{{ $property->name }}" placeholder="Название" required>
            </div>
            <div class="input-wrap">
                <div class="name">URL:</div>
                <input type="text" name="url" value="{{ $property->url }}" placeholder="URL" required>
            </div>
            <div class="select-wrap">
                <div class="name">Тип характеристики:</div>
                <select name="type" required>
                    <option disabled @if ($property->type == 0) selected @endif>Тип характеристики</option>
                    <option value="1" @if ($property->type == 1) selected @endif>Одно значение</option>
                    <option value="2" @if ($property->type == 2) selected @endif>Множество значений</option>
                    <option value="3" @if ($property->type == 3) selected @endif>Текст</option>
                </select>
            </div>
            <div class="input-wrap">
                <div class="name">H1:</div>
                <input type="text" name="h1" value="{{ $property->h1 }}" placeholder="H1">
            </div>
            <div class="input-wrap">
                <div class="name">Meta Title:</div>
                <input type="text" name="metaTitle" value="{{ $property->metaTitle }}" placeholder="Meta Title">
            </div>
            <div class="textarea-wrap">
                <div class="name">Meta Description:</div>
                <textarea name="metaDesc" placeholder="Meta Description">{{ $property->metaDesc }}</textarea>
            </div>
            <div class="btn-sub-wrap">
                <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
            </div>
        </form>
        @if ($property->type != 3)
        <h2>Добавить значение для характеристики</h2>
        <form action="/addProp" method="POST" class="add-option-value">
            @csrf
            <input type="hidden" name="id" value="{{ $property->id }}">
            <div class="input-wrap">
                <div class="name">Значение:</div>
                <input type="text" name="value" placeholder="Значение" required>
            </div>
            <div class="input-wrap">
                <div class="name">URL:</div>
                <input type="text" name="url" placeholder="URL" required>
            </div>
            <div class="btn-sub-wrap">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </div>
        </form>
    </div>
    <div class="all-props-table">
        <div id="app">
          <properties-edit prop-id="{{ $property->id }}" prop-name="{{ $property->name }}"></properties-edit>
        </div>
    </div>
@endif
</div>
@endsection
