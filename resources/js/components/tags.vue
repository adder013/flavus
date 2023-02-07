<template>
    <vue-good-table
        @on-cell-click="onCellClick"
        :columns="columns"
        :rows="rows"
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
var tmp = [];
    export default {
        name: 'properties-edit',
        props: {
            propId: String,
            propName: String,
        },
        data() {
            return {
                dataform: {},
                columns: [{
                    label: 'Тег',
                    field: 'name',
                    type: 'string',
                    sortable: false,
                    html: true,
                }, {
                    label: '',
                    field: 'editButton',
                    type: 'string',
                    sortable: false,
                    html: true,
                }],
                rows: [],
            };
        },
        methods: {
            onCellClick(params) {
                if (params.column.field == 'editButton') {
                    // IE Polyfill
                    if (!String.prototype.includes) {
                        String.prototype.includes = function(search, start) {
                            'use strict';
                            if (typeof start !== 'number') {
                                start = 0;
                            }
                            if (start + search.length > this.length) {
                                return false;
                            } else {
                                return this.indexOf(search, start) !== -1;
                            }
                        };
                    }
                    if (this.rows[params.rowIndex]['name'].includes('input') == true) {
                        this.rows[params.rowIndex]['name'] = tmp[params.rowIndex];
                    } else {
                        tmp[params.rowIndex] = this.rows[params.rowIndex]['name'];
                        this.rows[params.rowIndex]['name'] = '<form action="/updateTag" method="POST"><input type="hidden" name="_token" value="' + document.head.querySelector('meta[name="csrf-token"]').content + '"><input type="hidden" name="id" value="' + params.row.id + '"><input class="change-ajax-input" type="text" name="name" value="' + params.row.name + '" placeholder="' + params.row.name + '" autocomplete="off"></form>';
                    }
                }
            },
            deleteData() {
                var id = [];
                this.$children["0"].selectedRows.forEach(function(product) {
                    id.push(product.id);
                });
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteTags', {tags: id}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getTags')
                    .then(function(response) {
                        this.rows = response.data;
                    });
                });
            }
        },
        created: function() {
            this.$http.get('/getTags')
            .then(function(response) {
                this.rows = response.data;
            });
        },
        mounted() {
        },
    };
</script>
