@extends('dashboard.layouts.main')

@section('content')
<div class="products-wrap">
    <div id="app">
        <category :category-id="{{ $category->id }}"></category>
        <products-table-draggable :category-id="{{ $category->id }}"></products-table-draggable>
    </div>
</div>
@endsection
