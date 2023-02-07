<ul>
    @foreach ($navCategories as $categoryItem)
        <li>
            <div class="menu__item__wrap">
                <a href="{{ URL::to($categoryItem->path) }}" class="menu__item">{{ $categoryItem->name }}</a>
                <div class="arrow-wrap">
                    <svg class="arrow-icon" viewBox="0 0 100 100">
                        <path d="M 10 50 L 60 100 L 70 90 L 30 50 L 70 10 L 60 0 Z"
                            transform="translate(100, 100) rotate(180)"></path>
                    </svg>
                </div>
            </div>
            <div class="fogging"></div>
            <div class="submenu-block">
                <ul class="submenu__inner">
                    @if ($categoryItem->child)
                        @foreach ($categoryItem->child as $subCategory)
                            <li class="submenu__item">
                                <a href="{{ URL::to($subCategory->path) }}" class="title">
                                    {{ $subCategory->name }}
                                </a>
                                <ul class="item__inner">
                                    @if ($subCategory->child)
                                        @foreach ($subCategory->child as $subSubCategory)
                                            <li>
                                                <a href="{{ URL::to($subSubCategory->path) }}" class="device">
                                                    {{ $subSubCategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                        @endforeach
                    @endif
                </ul>
                @if ($categoryItem->brandCategories->count() > 0)
                    <div class="brands__block">
                        @foreach ($categoryItem->brandCategories as $brandCategory)
                            <a class="brand__item" href="{{ $brandCategory->link() }}">
                                <div class="brand__wrap">
                                    <img src="{{ $brandCategory->brand->image }}">
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </li>
    @endforeach
</ul>