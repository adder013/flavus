<template>
    <div class="products-table-wrap">
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <div class="table-wrap">
            <div class="search">
                <input v-on:keyup="searchQuery()" v-model="query" type="text" autocomplete="off" autocorrect="off" placeholder="Поиск...">
            </div>
            <table v-if="products.length == 0 && search == 0 && loading == 0">
                <tbody>
                    <tr>
                        <td class="center">Идет загрузка таблицы...</td>
                    </tr>
                </tbody>
            </table>
            <table v-if="products.length == 0 && search == 0 && loading == 1">
                <tbody>
                    <tr>
                        <td class="center">Категория пуста</td>
                    </tr>
                </tbody>
            </table>
            <table v-if="products.length == 0 && search == 1">
                <tbody>
                    <tr>
                        <td class="center">По данному запросу ничего не найдено</td>
                    </tr>
                </tbody>
            </table>
            <div v-if="products.length != 0" class="lazy-table">
                <div class="table-head">
                    <div>
                        <div><input v-on:click="selectAllRows()" class="select-row" type="checkbox"></div>
                        <div>Наименование</div>
                        <div>Артикул</div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <draggable :options="options" v-if="products.length != 0" :list="products" @change="change" class="table-body" :sortable="{scroll: true}">
                    <div :id="product.id" v-for="product in products">
                        <div>
                            <input v-on:click="selectRow(product.id)" class="select-row" type="checkbox">
                        </div>
                        <div>
                            <a :href="'/dashboard/products/edit/' + product.id + '/' + product.url">{{ product.name }}</a>
                        </div>
                        <div>
                            <a :href="'/dashboard/products/edit/' + product.id + '/' + product.url">{{ product.skuName }}</a>
                        </div>
                        <div><i class="fas fa-bars"></i></div>
                        <div><button v-on:click="deleteLine(product.id)"><i class="fas fa-trash"></i></button></div>
                    </div>
                </draggable>
            </div>
            <div class="selected-actions">
                <div class="selected">1 - Всего выбрано</div>
                <a v-on:click="cleanSelected()" class="clean"><i class="fas fa-broom"></i><span>Очистить</span></a>
                <a v-on:click="deleteSelected()" class="delete"><i class="fas fa-trash"></i><span>Удалить</span></a>
            </div>
            <div v-if="products.length != 0" class="table-actions">
                <div class="perPage"></div>
                <div class="table-nav">
                    <div class="nav-list">1 - {{ this.products.length }} из {{ total }}</div>
                </div>
            </div>
            <div v-if="ready == true && products.length != 0" class="scroll-me"><img src="/svg/lazy_load_dashboard.svg" alt="Загрузка"></div>
        </div>
        <div class="table-fix"></div>
    </div>
</template>
<script>
    export default {
        name: 'brand-products-table-draggable',
        props: {
            brandId: {
                type: Number,
                require: true
            },
        },
        components: {
            draggable: VueDraggable
        },
        data() {
            return {
                progress: false,
                error: false,
                errorMessage: String,
                success: false,
                successMessage: String,
                query: '',
                loading: 0,
                products: [],
                dataform: { code: 0 },
                total: 0,
                selected: [],
                search: 0,
                ready: false,
                lazy: 50,
                options: {
                    forceFallback: true,
                }
            }
        },
        methods: {
            handleScroll(event) {
                if (this.ready == true && this.progress == false && this.products.length != 0 && this.search == 0) {
                    var rect = document.querySelector('.scroll-me').getBoundingClientRect();
                    var elemTop = rect.top;
                    var elemBottom = rect.bottom;
                    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
                    if (isVisible) {
                        this.progress = true;
                        this.lazy = this.lazy + 50;
                        this.$http.get('/getData?brand=' + this.brandId + '&lazy=' + this.lazy)
                        .then(function(response) {
                            this.progress = false;
                            this.products = (response.data == null || response.data == 0) ? [] : response.data;
                            if (this.lazy >= this.total) {
                                this.ready = false;
                            }
                        });
                    }
                }
            },
            change() {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;;
                this.$http.post('/changeSortBrandProducts', { products: this.products, brand_id: this.brandId })
                .then(function() {
                });
            },
            deleteLine(id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteProducts', { id: id }, { emulateJSON:true })
                .then(function(response) {
                    this.progress = false;
                    this.selected = [];
                    document.getElementsByClassName('selected-actions')[0].style.display = 'none';
                    var selectRows = document.getElementsByClassName('select-row');
                    for (var i = 0; i < selectRows.length; i++) {
                        selectRows[i].checked = false;
                    }
                    if (response.data.success) {
                        this.success = true;
                        this.successMessage = 'Удалено';
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                        if (this.query.length > 1) {
                            this.search = 1;
                            this.$http.get('/searchTableProducts?query=' + this.query + '&brand=' + this.brandId)
                            .then(function(response) {
                                this.products = (response.data == null || response.data == 0) ? [] : response.data;
                                this.ready = false;
                            });
                        } else {
                            this.search = 0;
                            this.$http.get('/getTableData?brand=' + this.brandId)
                            .then(function(response) {
                                this.total = response.data.total;
                                this.$http.get('/getData?brand=' + this.brandId + '&lazy=' + this.lazy)
                                .then(function(response) {
                                    this.products = (response.data == null || response.data == 0) ? [] : response.data;
                                    this.ready = true;
                                });
                            });
                        }
                    } else {
                        this.error = true;
                        this.errorMessage = 'Произошла неизвестная ошибка';
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    }
                });
            },
            deleteSelected() {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteProducts', { id: this.selected }, { emulateJSON:true })
                .then(function(response) {
                    this.progress = false;
                    this.selected = [];
                    var selectRows = document.getElementsByClassName('select-row');
                    for (var i = 0; i < selectRows.length; i++) {
                        selectRows[i].checked = false;
                    }
                    document.getElementsByClassName('selected-actions')[0].style.display = 'none';
                    if (response.data.success) {
                        this.success = true;
                        this.successMessage = 'Удалено';
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                        if (this.query.length > 1) {
                            this.search = 1;
                            this.$http.get('/searchTableProducts?query=' + this.query + '&brand=' + this.brandId)
                            .then(function(response) {
                                this.products = (response.data == null || response.data == 0) ? [] : response.data;
                                this.ready = false;
                            });
                        } else {
                            this.search = 0;
                            this.$http.get('/getTableData?brand=' + this.brandId)
                            .then(function(response) {
                                this.total = response.data.total;
                                this.$http.get('/getData?brand=' + this.brandId + '&lazy=' + this.lazy)
                                .then(function(response) {
                                    this.products = (response.data == null || response.data == 0) ? [] : response.data;
                                    this.ready = true;
                                });
                            });
                        }
                    } else {
                        this.error = true;
                        this.errorMessage = 'Произошла неизвестная ошибка';
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    }
                });
            },
            cleanSelected() {
                this.selected = [];
                var selectRows = document.getElementsByClassName('select-row');
                for (var i = 0; i < selectRows.length; i++) {
                    selectRows[i].checked = false;
                }
                document.getElementsByClassName('selected-actions')[0].style.display = 'none';
            },
            selectRow(id) {
                if (this.selected.includes(id)) {
                    for (var i = 0; i < this.selected.length; i++) {
                        if (this.selected[i] === id) {
                            this.selected.splice(i, 1);
                        }
                    }
                } else {
                    this.selected.push(id);
                }
                if (this.selected.length > 0) {
                    document.getElementsByClassName('selected-actions')[0].style.display = 'flex';
                    document.querySelector('.selected-actions .selected').innerHTML = this.selected.length + ' - Всего выбрано';
                } else {
                    document.getElementsByClassName('selected-actions')[0].style.display = 'none';
                }
            },
            selectAllRows() {
                if (this.selected.length > 0) {
                    this.selected = [];
                    var selectRows = document.getElementsByClassName('select-row');
                    for (var i = 0; i < selectRows.length; i++) {
                        selectRows[i].checked = false;
                    }
                    document.getElementsByClassName('selected-actions')[0].style.display = 'none';
                } else {
                    var selectRows = document.getElementsByClassName('select-row');
                    for (var i = 0; i < selectRows.length; i++) {
                        selectRows[i].checked = true;
                    }
                    for (var i = 0; i < this.products.length; i++) {
                        this.selected.push(this.products[i].id);
                    }
                    document.getElementsByClassName('selected-actions')[0].style.display = 'flex';
                    document.querySelector('.selected-actions .selected').innerHTML = this.selected.length + ' - Всего выбрано';
                }
            },
            searchQuery() {
                if (this.query.length > 1) {
                    this.search = 1;
                    this.$http.get('/searchTableProducts?query=' + this.query + '&brand=' + this.brandId)
                    .then(function(response) {
                        this.products = (response.data == null || response.data == 0) ? [] : response.data;
                        this.ready = false;
                    });
                } else {
                    this.search = 0;
                    this.$http.get('/getTableData?brand=' + this.brandId)
                    .then(function(response) {
                        this.total = response.data.total;
                        this.lazy = 50;
                        this.$http.get('/getData?brand=' + this.brandId + '&lazy=' + this.lazy)
                        .then(function(response) {
                            this.products = (response.data == null || response.data == 0) ? [] : response.data;
                            this.ready = true;
                            this.loading = 1;
                        });
                    });
                }
            }
        },
        created() {
            this.$http.get('/getTableData?brand=' + this.brandId)
            .then(function(response) {
                this.total = response.data.total;
                this.$http.get('/getData?brand=' + this.brandId + '&lazy=' + this.lazy)
                .then(function(response) {
                    this.products = (response.data == null || response.data == 0) ? [] : response.data;
                    this.ready = true;
                    this.loading = 1;
                });
            });
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll);
        },
        destroyed () {
            window.removeEventListener('scroll', this.handleScroll);
        },
    }
</script>
