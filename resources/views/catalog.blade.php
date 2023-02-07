@extends('layouts.master')

@section('content')
<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('/') }}"><span itemprop="name">Главная</span></a>
        <meta itemprop="position" content="1">
        <span>|</span>
    </div>
    <div class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{ URL::to('catalog') }}"><span itemprop="name">Каталог</span></a>
        <meta itemprop="position" content="2">
        <span>|</span>
    </div>
</div>
<div class="catalog-wrap">
    <h1>Каталог</h1>
    <div class="category-blocks">
        @foreach ($navCategories as $subCategory)
            <div class="block">
                <a class="img-link" href="{{ URL::to($subCategory->path) }}"><img class="b-lazy" src="{{ url('/svg/placeholder.svg') }}" data-src="{{ url($subCategory->image) }}" alt="{{ $subCategory->name }}"></a>
                <h2>
                    <a href="{{ URL::to($subCategory->path) }}">{{ $subCategory->name }}</a>
                    @if (count($subCategory->child) > 0)
                    <button class="dropdown-btn-cat">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;"
                            xml:space="preserve">
                            <g>
                                <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
                                L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
                                c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
                                c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
                            </g>
                        </svg>  
                    </button>
                    @endif
                </h2>
                <div class="sub-categories">
                    <ul>
                        @foreach ($subCategory->child as $subCat)
                            @if ($subCat)
                            <li>
                                <a href="{{ URL::to($subCat->path) }}">{{ $subCat->name }}</a>
                                @if (count($subCat->child) > 0)    
                                    <button class="dropdown-btn">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            width="284.929px" height="284.929px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;"
                                            xml:space="preserve">
                                            <g>
                                                <path d="M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441
                                                L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082
                                                c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647
                                                c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z"/>
                                            </g>
                                        </svg>                      
                                    </button>
                                @endif
                                <ul class="dropdown-container">
                                    @foreach ($subCat->child as $subSubCat)
                                        @if ($subSubCat->path)
                                            <li><a href="{{ URL::to($subSubCat->path) }}">{{ $subSubCat->name }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script> 
    let dropdown_sub = document.getElementsByClassName("dropdown-btn");
    
    for (let sub_drop of dropdown_sub) {
        sub_drop.addEventListener("click", function() {
            this.classList.toggle("active");
            let dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                this.children[0].style.transform = "rotate(0deg)";
            } else {
                dropdownContent.style.display = "block";
                this.children[0].style.transform = "rotate(180deg)";
            }
        });
    }
    
    let dropdown = document.getElementsByClassName("dropdown-btn-cat");

    for (let drop of dropdown) {
        drop.addEventListener("click", function() {
            this.classList.toggle("active");
            let dropdownContent = this.parentElement.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
                this.children[0].style.transform = "rotate(0deg)";
            } else {
                dropdownContent.style.display = "block";
                this.children[0].style.transform = "rotate(180deg)";
            }
        });
    } 
</script>
@endsection
