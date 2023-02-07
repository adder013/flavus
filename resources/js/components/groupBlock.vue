<template>
    <div class="wrap-group-table">
        <h2>Добавить товары в группу</h2>
        <vue-good-table
            :columns="columns"
            :rows="rows"
            :pagination-options="{
                enabled: true,
                perPage: 100,
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
                trigger: 'enter'
            }">
            <div slot="selected-row-actions">
                <a v-on:click="addToGroup()">Добавить</a>
            </div>
            <div slot="emptystate">
                <div class="loading-table">
                    <img src="/svg/product-search.svg" alt="Search">
                </div>
            </div>
        </vue-good-table>
    </div>
</template>
<script>
export default {
    name: 'group-block',
    beforeCreate: function() {
        this.$http.get('/getDataOld')
        .then(function(response) {
            console.log(response.data);
            this.rows = response.data;
        });
    },
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
        addToGroup() {
            var id = [];
            this.$children["0"].selectedRows.forEach(function(product) {
                id.push(product.id);
            });
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addToGroup', {group_id: this.propId, products: id}, {emulateJSON:true})
            .then(function() {
                location.reload();
            });
        }
    },
};
</script>
