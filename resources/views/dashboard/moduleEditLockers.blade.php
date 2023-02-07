@extends('dashboard.layouts.main')

@section('content')
<div id="app">
    <module-locker :locker-id="{{ $locker->id }}"></module-locker>
</div>
@endsection
