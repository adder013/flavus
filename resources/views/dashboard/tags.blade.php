@extends('dashboard.layouts.main')

@section('content')
    <h1>Теги</h1>
    <div class="tags-wrap">
        <div class="add-tag">
            <form action="/addEmptyTag" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Название" required>
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </form>
        </div>
        <div id="app">
            <tags></tags>
        </div>
    </div>
@endsection
