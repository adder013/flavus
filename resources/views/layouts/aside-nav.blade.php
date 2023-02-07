<div id="sidebar">
    @if (isset($navCategories))
        <nav class="product-nav">
            @include('layouts.aside-nav-recursive', ['navCategories' => $navCategories])
        </nav>
    @endif
    @if (false)
        <div class="price-btn-wrap">
            <a href="#">
                <span>Скачать прайс</span>
                <div class="excel-ico">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M288 248v28c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-28c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm-12 72H108c-6.6 0-12 5.4-12 12v28c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-28c0-6.6-5.4-12-12-12zm108-188.1V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h204.1C264.8 0 277 5.1 286 14.1L369.9 98c9 8.9 14.1 21.2 14.1 33.9zm-128-80V128h76.1L256 51.9zM336 464V176H232c-13.3 0-24-10.7-24-24V48H48v416h288z" />
                    </svg>
                </div>
            </a>
        </div>
    @endif
</div>
<script>
    $(document).ready(function() {
        var sidebar = new StickySidebar('aside', {
            containerSelector: 'main',
            innerWrapperSelector: '.sidebar',
            topSpacing: 172,
            bottomSpacing: 0
        });
        var asideHeight = $('aside').height();
        $('.menu .menu-link .sub-menu').css('height', asideHeight);
    });

</script>
