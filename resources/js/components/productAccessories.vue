<template>
    <div class="product-groups-wrap">
        <div class="on-off">
            <span>Аксессуары:</span>
            <input class="tgl tgl-flat" id="accessories-btn" type="checkbox">
            <label class="tgl-btn" for="accessories-btn"></label>
        </div>
        <div class="product-accessories">
            <h2>Аксессуары</h2>
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
            <h2>Добавить товары в аксессуары</h2>
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
            <h2>Добавить группы в аксессуары</h2>
            <vue-good-table
                :columns="columns_add_groups"
                :rows="rows_add_groups"
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
                    <a v-on:click="addGroupConnection()">Добавить</a>
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
    name: 'product-accessories',
    props: {
        propId: String,
    },
    data() {
        return {
            columns: [{
                label: 'Наименование',
                field: 'name',
                type: 'string',
                html: true,
            },{
                label: 'Тип',
                field: 'type',
                type: 'string',
                html: true,
            },
        ],
            rows: [],
            columns_add: [{
                label: 'Наименование',
                field: 'name',
                type: 'string',
                html: true,
            },{
                label: 'Артикул',
                field: 'skuName',
                type: 'string',
                html: true,
            },
        ],
            rows_add: [],
            columns_add_groups: [{
                label: 'Название группы',
                field: 'name',
                type: 'string',
                html: true,
            },
        ],
            rows_add_groups: [],
        };
    },
    methods: {
        deleteConnection() {
            var items = [];
            this.$children["0"].selectedRows.forEach(function(toSend) {
                var that = [toSend.id, toSend.type];
                items.push(that);
            });
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteConnection', { product_id: this.propId, items: items, type: '1'}, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getProductAccessories/' + this.propId)
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
            this.$http.post('/addProductToProductConnection', { product_id: this.propId, products: id, type_id: '1'}, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getProductAccessories/' + this.propId)
                .then(function(response) {
                    this.rows = response.data;
                });
            });
        },
        addGroupConnection() {
            var id = [];
            this.$children["2"].selectedRows.forEach(function(group) {
                id.push(group.id);
            });
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addGroupToProductConnection', { product_id: this.propId, groups: id, type_id: '1'}, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getProductAccessories/' + this.propId)
                .then(function(response) {
                    this.rows = response.data;
                });
            });
        }
    },
    created: function() {
        this.$http.get('/getProductAccessories/' + this.propId)
        .then(function(response) {
            this.rows = response.data;
        });
        this.$http.get('/getDataOld')
        .then(function(response) {
            this.rows_add = response.data;
        });
        this.$http.get('/getAllGroups')
        .then(function(response) {
            this.rows_add_groups = response.data;
        });
    },
};
</script>
