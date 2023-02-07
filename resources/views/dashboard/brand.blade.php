@extends('dashboard.layouts.main')

@section('content')
<div class="brands-wrap">
    <div id="app">
        <brand :brand-id="{{ $brand->id }}"></brand>
        <brand-products-table-draggable :brand-id="{{ $brand->id }}"></brand-products-table-draggable>
    </div>
</div>
@endsection
