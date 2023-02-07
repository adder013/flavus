<template>
    <div class="shop-wrap">
        <div class="top-info">
            <div class="call">
                <div class="phone"><a :href="this.propCall">{{ this.propPhone }}</a></div>
                <span>Звоните: с 9-00 до 18-00</span>
            </div>
            <div class="search">
                <div class="search-wrap">
                    <input type="text" placeholder="Найти товары">
                    <div class="search-ico"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg></div>
                </div>
            </div>
            <div class="shop-info">
                <div class="compare">
                    <svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M433.941 65.941l-51.882-51.882A48 48 0 0 0 348.118 0H176c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h224c26.51 0 48-21.49 48-48v-48h80c26.51 0 48-21.49 48-48V99.882a48 48 0 0 0-14.059-33.941zM266 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h74v224c0 26.51 21.49 48 48 48h96v42a6 6 0 0 1-6 6zm128-96H182a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h106v88c0 13.255 10.745 24 24 24h88v202a6 6 0 0 1-6 6zm6-256h-64V48h9.632c1.591 0 3.117.632 4.243 1.757l48.368 48.368a6 6 0 0 1 1.757 4.243V112z"/></svg>
                    <span>Сравнить (0)</span>
                </div>
                <div class="view-later">
                    <svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>
                    <span>Отложить (0)</span>
                </div>
                <div class="cart">
                    <svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"/></svg>
                    <span>0 ₽</span>
                </div>
            </div>
        </div>
        <div class="category-menu">
            <div class="breadcrumbs"><a href="/">Главная</a><span>|</span>{{ this.categoriesTop.name }}</div>
            <a :href="this.categoriesTop.url"><h1>{{ this.categoriesTop.name }}</h1></a>
            <div class="links">
                <ul>
                    <li v-for="subCategory in categoriesBottom"><a :href="subCategory.url">{{ subCategory.name }}</a></li>
                </ul>
            </div>
        </div>
        <div class="product-filter">
            <div class="top-filter">
                <div class="main-filter">
                    <select>
                        <option>Новые и популярные</option>
                        <option>Название</option>
                        <option>В наличии</option>
                        <option>Цена</option>
                    </select>
                </div>
                <div class="switch">
                    <svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M149.333 56v80c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h101.333c13.255 0 24 10.745 24 24zm181.334 240v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm32-240v80c0 13.255 10.745 24 24 24H488c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24zm-32 80V56c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.256 0 24.001-10.745 24.001-24zm-205.334 56H24c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24zM0 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zm386.667-56H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zm0 160H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H386.667c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zM181.333 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24z"/></svg>
                    <svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M149.333 216v80c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24v-80c0-13.255 10.745-24 24-24h101.333c13.255 0 24 10.745 24 24zM0 376v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H24c-13.255 0-24 10.745-24 24zM125.333 32H24C10.745 32 0 42.745 0 56v80c0 13.255 10.745 24 24 24h101.333c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24zm80 448H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24zm-24-424v80c0 13.255 10.745 24 24 24H488c13.255 0 24-10.745 24-24V56c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24zm24 264H488c13.255 0 24-10.745 24-24v-80c0-13.255-10.745-24-24-24H205.333c-13.255 0-24 10.745-24 24v80c0 13.255 10.745 24 24 24z"/></svg>
                </div>
            </div>
            <div class="filter-wrap">
                <div class="products">
                    <div v-for="product in products" class="product-block">
                        <div class="product-image"><img class="b-lazy" src="/svg/placeholder.svg" :data-src="product.image" :alt="product.name"></div>
                        <div class="product-info">
                            <div class="top">
                                <a :href="'/' + product.url" class="title">{{ product.name }}</a>
                                <ul>
                                    <li>Арт.: {{ product.sku }}</li>
                                    <li>Код товара: {{ product.sku_code }}</li>
                                    <li>Производитель: {{ product.brand_name }}</li>
                                </ul>
                            </div>
                            <div class="bottom">
                                <div class="wrap">
                                    <div class="compare">
                                        <svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M433.941 65.941l-51.882-51.882A48 48 0 0 0 348.118 0H176c-26.51 0-48 21.49-48 48v48H48c-26.51 0-48 21.49-48 48v320c0 26.51 21.49 48 48 48h224c26.51 0 48-21.49 48-48v-48h80c26.51 0 48-21.49 48-48V99.882a48 48 0 0 0-14.059-33.941zM266 464H54a6 6 0 0 1-6-6V150a6 6 0 0 1 6-6h74v224c0 26.51 21.49 48 48 48h96v42a6 6 0 0 1-6 6zm128-96H182a6 6 0 0 1-6-6V54a6 6 0 0 1 6-6h106v88c0 13.255 10.745 24 24 24h88v202a6 6 0 0 1-6 6zm6-256h-64V48h9.632c1.591 0 3.117.632 4.243 1.757l48.368 48.368a6 6 0 0 1 1.757 4.243V112z"/></svg>
                                        <span>Сравнить</span>
                                    </div>
                                    <div class="view-later">
                                        <svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"/></svg>
                                        <span>Отложить</span>
                                    </div>
                                    <div class="brand">
                                        <a :href="product.brand_url"><img class="b-lazy" src="/svg/brand_placeholder.svg" :data-src="product.brand_image" :alt="product.brand_name"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-shop">
                            <div class="cart">
                                <div class="price">{{ product.price }} ₽<span>(с НДС)</span></div>
                                <div class="btn-wrap">
                                    <button>Купить<span><svg fill="#000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"/></svg></span></button>
                                </div>
                            </div>
                            <div class="additional-info">
                                <div v-if="product.in_stock" class="in-stock"><span><svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm121.2 231.8l-143 141.8c-4.7 4.7-12.3 4.6-17-.1l-82.6-83.3c-4.7-4.7-4.6-12.3.1-17L99.1 285c4.7-4.7 12.3-4.6 17 .1l46 46.4 106-105.2c4.7-4.7 12.3-4.6 17 .1l28.2 28.4c4.7 4.8 4.6 12.3-.1 17z"/></svg></span>В наличии</div>
                                <div v-else class="order"><span><svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M624 352h-16V243.9c0-12.7-5.1-24.9-14.1-33.9L494 110.1c-9-9-21.2-14.1-33.9-14.1H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-208H416V144h44.1l99.9 99.9V256z"/></svg></span>Под заказ</div>
                                <div v-if="product.production" class="production"><span><svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"/></svg></span>Срок изготовления {{ product.production }} дн.</div>
                                <div v-if="product.delivery"  class="delivery-city"><span><svg fill="#7f7f7f" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z"/></svg></span>{{ product.delivery }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrap">
                        <paginate
                            :page-count="allPages"
                            :click-handler="changedPage"
                            :prev-text="'Назад'"
                            :next-text="'Вперед'"
                            :container-class="'pagination'">
                        </paginate>
                        <div class="select-wrap">
                            <select v-model="perPage" @change="changedPerPage(perPage)">
                                <option value="10">Показывать по 10 товаров</option>
                                <option value="20">Показывать по 20 товаров</option>
                                <option value="50">Показывать по 50 товаров</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="filter">
                    <div class="refresh">
                        <button>Сбросить</button>
                    </div>
                    <form v-for="filter in filters" class="filter-option">
                        <div class="name">{{ filter.name }}:</div>
                        <div class="selectable">
                            <label v-for="option in filter.options"><input v-model="option.selected" v-on:change="optionClick(option.selected)" type="checkbox" :checked="option.selected">{{ option.name }}</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'shop',
        components: {
            paginate: VuejsPaginate
        },
        props: {
            propId: String,
            propPhone: String,
            propCall: String,
        },
        data() {
            return {
                categoriesTop: [],
                categoriesBottom: [],
                loadedProducts: [],
                products: [],
                filters: [],
                perPage: 10,
                thisPage: 1,
                allPages: 1,
            };
        },
        methods: {
            changedPerPage(pages) {
                this.perPage = pages;
                this.thisPage = 1;
                this.allPages = Math.ceil10((_.size(this.loadedProducts) / this.perPage));
                var start = (this.thisPage * this.perPage) - this.perPage,
                    stop = this.thisPage * this.perPage;
                this.products = this.loadedProducts.slice(start, stop);
            },
            changedPage(page) {
                this.thisPage = page;
                var start = (this.thisPage * this.perPage) - this.perPage,
                    stop = this.thisPage * this.perPage;
                this.products = this.loadedProducts.slice(start, stop);
            },
            optionClick(selected) {
                console.log(this.filters);
                this.products = [];
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/filterAll', { category_id: this.propId, filters: this.filters }, {emulateJSON:true})
                .then(function(response) {
                    console.log(response.data.log);
                    if (response.data.filters.length == 0) {
                        this.$http.get('/getFilterProducts/' + this.propId)
                        .then(function(response) {
                            this.loadedProducts = response.data;
                            this.allPages = Math.ceil10((_.size(this.loadedProducts) / this.perPage));
                            var start = (this.thisPage * this.perPage) - this.perPage,
                                stop = this.thisPage * this.perPage;
                            this.products = this.loadedProducts.slice(start, stop);
                        });
                        this.$http.get('/getFilters/' + this.propId)
                        .then(function(response) {
                            this.filters = response.data;
                            setTimeout(function() {
                                var bLazy = new Blazy();
                            }, 400);
                        });
                    } else {
                        this.loadedProducts = response.data.products;
                        this.filters = response.data.filters;
                        this.allPages = Math.ceil10((_.size(this.loadedProducts) / this.perPage));
                        var start = (this.thisPage * this.perPage) - this.perPage,
                            stop = this.thisPage * this.perPage;
                        this.products = this.loadedProducts.slice(start, stop);
                        setTimeout(function() {
                            var bLazy = new Blazy();
                        }, 400);
                    }
                });
            }
        },
        created: function() {
            this.$http.get('/getCategories/' + this.propId)
            .then(function(response) {
                this.categoriesTop = response.data.top;
                this.categoriesBottom = response.data.bottom;
            });
            this.$http.get('/getFilterProducts/' + this.propId)
            .then(function(response) {
                this.loadedProducts = response.data;
                this.allPages = Math.ceil10((_.size(this.loadedProducts) / this.perPage));
                var start = (this.thisPage * this.perPage) - this.perPage,
                    stop = this.thisPage * this.perPage;
                this.products = this.loadedProducts.slice(start, stop);
                setTimeout(function() {
                    var bLazy = new Blazy();
                }, 400);
            });
            this.$http.get('/getFilters/' + this.propId)
            .then(function(response) {
                console.log(response.data);
                this.filters = response.data;
            });
        },
    }
</script>
