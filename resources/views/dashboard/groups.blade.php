@extends('dashboard.layouts.main')

@section('content')
<div id="app" class="hidden"></div>
<h1>Группы товаров</h1>
<div class="groups">
    <div class="add-group">
        <form action="/addGroup" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Название" required>
            <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
        </form>
    </div>
    <div class="groups-wrap">
        @foreach ($groups as $group)
            <div class="group-block">
                <div class="name">{{ $group->name }}</div>
                <a href="{{ URL::route('edit.groups', array($group->id, $group->name)) }}"><i class="fas fa-pen-square"></i><span>Редактировать</span></a>
                <form action="/deleteGroup" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $group->id }}">
                    <button><i class="fas fa-trash"></i><span>Удалить</span></button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
