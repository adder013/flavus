@extends('dashboard.layouts.main')

@section('content')
<div id="app"></div>
<div class="module-stickers-wrap">
    <h1>Стикеры для товаров</h1>
    <div class="add-sticker">
        <form action="/addSticker" method="POST">
            @csrf
            <div class="input-wrap">
                <div class="name">Текст стикера:</div>
                <input type="text" name="name" placeholder="Текст" required>
            </div>
            <div class="input-wrap">
                <div class="name">Код цвета (Вида #AA00FF):</div>
                <input type="text" name="color" placeholder="Код цвета" required>
            </div>
            <div class="btn-sub-wrap">
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </div>
        </form>
    </div>
    <div class="stickers">
        @foreach ($stickers as $sticker)
            <form action="/editSticker" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $sticker->id }}">
                <div class="input-wrap">
                    <div class="name">Текст стикера:</div>
                    <input type="text" name="name" value="{{ $sticker->text }}" placeholder="Текст">
                </div>
                <div class="input-wrap">
                    <div class="name">Код цвета (Вида #AA00FF):</div>
                    <input type="text" name="color" value="{{ $sticker->color }}" placeholder="Код цвета">
                </div>
                <div class="btn-wrap">
                    <div class="btn-sub-wrap">
                        <button type="submit"><i class="fas fa-hdd"></i><span>Обновить</span></button>
                    </div>
                    <div class="btn-sub-wrap">
                        <button onclick="deleteSticker({{ $sticker->id }})" type="button"><i class="fas fa-trash"></i><span>Удалить</span></button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
</div>
<script>
function deleteSticker(element) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: "/deleteSticker",
        data: {
            sticker_id: element,
        },
        success: function(response) {
            location.reload();
        }
    });
};
</script>
@endsection
