<template>
    <div class="wrap-group-table">
        <h2>Товары</h2>
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
                <a v-on:click="deleteFromGroup()">Удалить</a>
            </div>
            <div slot="emptystate">
                <div class="loading-table">
                    <span>Не добавлено ни одного товара</span>
                    <img src="/svg/empty-search.svg" alt="Search">
                </div>
            </div>
        </vue-good-table>
    </div>
</template>
<script>
export default {
    name: 'group-block-added',
    props: {
        propId: String,
    },
    data() {
        return {
            columns: [{
                label: 'Наименование',
                field: 'name',
                type: 'string',
            },{
                label: 'Артикул',
                field: 'sku',
                type: 'string',
            },
        ],
            rows: [],
        };
    },
    methods: {
        deleteFromGroup() {
            var id = [];
            this.$children["0"].selectedRows.forEach(function(product) {
                id.push(product.id);
            });
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteFromGroup', { group_id: this.propId, products: id}, {emulateJSON:true})
            .then(function() {
                this.$http.get('/getGroupData/' + this.propId)
                .then(function(response) {
                    this.rows = response.data;
                });
            });
        }
    },
    created: function() {
        this.$http.get('/getGroupData/' + this.propId)
        .then(function(response) {
            this.rows = response.data;
        });
    },
};
</script>
