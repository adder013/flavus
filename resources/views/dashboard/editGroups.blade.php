@extends('dashboard.layouts.main')

@section('content')
<h1>{{ $group->name }}</h1>
<div class="edit-group">
    <div class="edit">
        <form action="/editGroupInfo" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $group->id }}">
            <input type="text" name="name" placeholder="Название группы" required>
            <button><i class="fas fa-hdd"></i><span>Обновить</span></button>
        </form>
    </div>
    <div id="app">
        <group-block-added prop-id="{{ $group->id }}"></group-block-added>
        <group-block prop-id="{{ $group->id }}"></group-block>
    </div>
</div>
@endsection
