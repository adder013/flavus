<template>
    <div class="product-groups-wrap">
        <div class="on-off">
            <span>Сопутствующие категории:</span>
            <input class="tgl tgl-flat" id="cross-selling-btn" type="checkbox">
            <label class="tgl-btn" for="cross-selling-btn"></label>
        </div>
        <div class="product-cross-selling">
            <h2>Сопутствующие категории</h2>
            <vue-good-table
                :columns="columns"
                :rows="rows"
                :pagination-options="{
                    enabled: false
                }"
                :select-options="{
                    enabled: true,
                    selectionText: '- всего выбрано',
                    clearSelectionText: '(очистить)',
                    selectionInfoClass: 'row-clear',
                }"
                :search-options="{
                    enabled: true,
                    placeholder: 'Поиск',
                }">
                <div slot="selected-row-actions">
                    <a v-on:click="deleteConnection()">Удалить</a>
                </div>
                <div slot="emptystate">
                    <div class="loading-table">
                        <span>Не добавлено ни одного товара</span>
                        <img src="/svg/empty-search.svg" alt="Search">
                    </div>
                </div>
            </vue-good-table>
            <h2>Добавить cопутствующие категории</h2>
            <vue-good-table
                :columns="columns_add"
                :rows="rows_add"
                :pagination-options="{
                    enabled: true,
                    perPage: 2,
                    nextLabel: 'Далее',
                    prevLabel: 'Назад',
                    rowsPerPageLabel: 'Товаров на странице',
                    ofLabel: 'из',
                    allLabel: 'Все',
                }"
                :select-options="{
                    enabled: true,
                    selectionText: '- всего выбрано',
                    clearSelectionText: '(очистить)',
                    selectionInfoClass: 'row-clear',
                }"
                :search-options="{
                    enabled: true,
                    placeholder: 'Поиск',
                }">
                <div slot="selected-row-actions">
                    <a v-on:click="addConnection()">Добавить</a>
                </div>
                <div slot="emptystate">
                    <div class="loading-table">
                        <img src="/svg/product-search.svg" alt="Search">
                    </div>
                </div>
            </vue-good-table>
        </div>
    </div>
</template>
<script>
export default {
    name: 'product-cross-selling',
    props: {
        propId: String,
    },
    data() {
        return {
            columns: [{
                label: 'Название категории',
                field: 'name',
                type: 'string',
            }],
            rows: [],
            columns_add: [{
                label: 'Название категории',
                field: 'name',
                type: 'string',
            }],
            rows_add: [],
        };
    },
    methods: {
        deleteConnection() {
            var items = [];
            this.$children["0"].selectedRows.forEach(function(toSend) {
                items.push(toSend.id);
            });
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteCategoryConnection', { product_id: this.propId, items: items, type: '2'}, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getProductCrossSelling/' + this.propId)
                .then(function(response) {
                    this.rows = response.data;
                });
            });
        },
        addConnection() {
            var id = [];
            this.$children["1"].selectedRows.forEach(function(product) {
                id.push(product.id);
            });
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addCategoryToProductConnection', { product_id: this.propId, categories: id, type_id: '2' }, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getProductCrossSelling/' + this.propId)
                .then(function(response) {
                    this.rows = response.data;
                });
            });
        },
    },
    created: function() {
        this.$http.get('/getProductCrossSelling/' + this.propId)
        .then(function(response) {
            this.rows = response.data;
        });
        this.$http.get('/getCategories')
        .then(function(response) {
            this.rows_add = response.data;
        });
    },
};
</script>
