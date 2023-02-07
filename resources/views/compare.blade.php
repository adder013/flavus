@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ Request::url() }}"><span itemprop="name">Сравнить товары</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="compare-wrap">
    <h1>Сравнить товары</h1>
    @if($products)
    <div class="compare">
        <div class="main-field">
            <a href="{{ URL::to('catalog') }}" class="back"><svg aria-hidden="true" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>Вернуться в каталог</a>
            <div class="params">
                <div class="name">Варианты:</div>
                <div><label><input onclick="allOptions()" type="radio" name="params" checked><span>Все параметры</span></label></div>
                <div><label><input onclick="diffOptions()" type="radio" name="params"><span>Различающиеся</span></label></div>
            </div>
            <div class="param all">
                @foreach ($options as $name => $filter)
                    <div class="name" data-diff="{{ $filter->diff ? 1 : 0 }}">{{ $name }}</div>
                @endforeach
            </div>
        </div>
        <div class="scroll-compare all">
            @foreach ($products as $product)
                <div id="{{ $product->id }}" class="product-compare">
                    <div class="product-preview-wrap">
                        <a href="{{ url($product->url) }}"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="@if ($product->image){{ url($product->image) }}@endif" alt="{{ $product->name }}"></a>
                        <div class="name">{{ str_limit($product->name, $limit = 50, $end = '...') }}</div>
                        <div class="shop-wrap">
                            @if ($product->currency != 'RUB')
                                <div class="s-price">{{ number_format($product->price/$product->currency_nominal*$product->currency_value, 2, ',', ' ') }} ₽</div>
                            @else
                                <div class="s-price">{{ number_format($product->price, 2, ',', ' ') }} ₽</div>
                            @endif
                            <button onclick="quickAddToCart(this)" data-product-id="{{ $product->id }}" data-price="{{ $product->price/$product->currency_nominal*$product->currency_value }}" data-code="{{ $product->sku_code }}"><svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 446.853 446.853"><path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708
                            c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179
                            c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591
                            l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916
                            c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012
                            s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675
                            c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432
                            c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221
                            c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814
                            c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z
                             M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117
                            S337.916,409.814,327.373,409.814z"/></svg></button>
                        </div>
                        <div onclick="removeItem({{ $product->id }})" class="delete"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 357 357"><polygon points="357,35.7 321.3,0 178.5,142.8 35.7,0 0,35.7 142.8,178.5 0,321.3 35.7,357 178.5,214.2 321.3,357 357,321.3 214.2,178.5"/></svg></div>
                    </div>
                @foreach ($options as $name => $value)
                    @if (isset($value->options[$product->id]))
                        <div class="param-value @if($value->diff) diff @endif" data-diff="{{ $value->diff ? 1 : 0 }}">{{ $value->options[$product->id] }}</div>
                    @else
                        <div class="param-value diff" data-diff="{{ $value->diff ? 1 : 0 }}">-</div>
                    @endif
                @endforeach
                </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="empty-block">
        Список товаров для сравнения пуст
    </div>
    @endif
</div>
<script>
    function allOptions()
    {
        document.querySelectorAll('.param > .name').forEach(function(item) {
            item.classList.remove('hidden');
        });
        document.querySelectorAll('.scroll-compare .param-value').forEach(function(item) {
            item.classList.remove('hidden');
        });
    }

    function diffOptions()
    {
        document.querySelectorAll('.param > .name').forEach(function(item) {
            if (item.getAttribute('data-diff') == 0) {
                item.classList.add('hidden');
            }
        });
        document.querySelectorAll('.scroll-compare .param-value').forEach(function(item) {
            if (item.getAttribute('data-diff') == 0) {
                item.classList.add('hidden');
            }
        });
    }
    function removeItem(id) {
        document.getElementById(id).remove();
        let quantity = document.querySelectorAll('.product-compare').length;
        if (quantity < 1) {
            document.querySelector('.compare-wrap > .compare').remove();
            let div = document.createElement('div');
            div.className = 'empty-block';
            div.innerHTML = 'Список товаров для сравнения пуст';
            document.querySelector('.compare-wrap').appendChild(div);
        }
        axios.delete('/api/compare/' + id + '/' + session).then(function(success) {
            let quantity = success.data.length;
            document.getElementById('compare').innerHTML = 'Сравнить (' + quantity + ')';
            document.getElementById('compare').parentElement.setAttribute('href', '/compare/' + success.data.join(','));
        });

    };
</script>
@endsection
