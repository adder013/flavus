<template>
    <vue-good-table
        @on-cell-click="onCellClick"
        :columns="columns"
        :rows="rows"
        :pagination-options="{
            enabled: true,
            nextLabel: 'Далее',
            prevLabel: 'Назад',
            rowsPerPageLabel: 'Товаров на странице',
            ofLabel: 'из',
            allLabel: 'Все',
        }"
        :select-options="{
            enabled: true,
            selectOnCheckboxOnly: true,
            selectionText: '- всего выбрано',
            clearSelectionText: '(очистить)',
            selectionInfoClass: 'row-clear',
        }"
        :search-options="{
            enabled: true,
            placeholder: 'Поиск',
        }">
        <div slot="selected-row-actions">
            <a @click="deleteData()">Удалить</a>
        </div>
        <div slot="emptystate">
            <div class="loading-table">
                <img src="/svg/product-search.svg" alt="Search">
            </div>
        </div>
    </vue-good-table>
</template>
<script>
export default {
    name: 'products-categories',
    created: function() {
        this.$http.get('/getDataCategory/' + this.propCategory)
        .then(function(response) {
            this.rows = response.data;
        });
    },
    props: {
        propCategory: String,
    },
    data() {
        return {
            columns: [{
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
            rows: [],
        };
    },
    methods: {
        onCellClick(params) {
            var redirectUrl = '/dashboard/products/edit/' + params.row.id + '/' + params.row.url;
            var lowerUrl = redirectUrl.toLowerCase();
            window.location = lowerUrl;
        },
        deleteData() {
            //this.rows = this.$children["0"].selectedRows;
            //console.log(this);
            var id = [];
            this.$children["0"].selectedRows.forEach(function(product) {
                id.push(product.id);
            });
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteData', {product: id}, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getDataCategory/' + this.propCategory)
                .then(function(response) {
                    this.rows = response.data;
                });
            });
        }
    },
    mounted() {
  	},
};
</script>
