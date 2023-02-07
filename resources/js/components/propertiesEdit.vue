<template>
    <vue-good-table
        @on-cell-click="onCellClick"
        :columns="columns"
        :rows="rows"
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
                    label: 'Значение',
                    field: 'value',
                    type: 'string',
                    sortable: false,
                    html: true,
                }, {
                    label: '',
                    field: 'editButton',
                    type: 'string',
                    sortable: false,
                    html: true,
                }, {
                    label: 'Url',
                    field: 'url',
                    type: 'string',
                    sortable: false,
                    html: true,
                }, {
                    label: '',
                    field: 'editButton2',
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
                    if (this.rows[params.rowIndex]['value'] != null) {
                        if (this.rows[params.rowIndex]['value'].includes('input') == true) {
                            this.rows[params.rowIndex]['value'] = tmp[params.rowIndex];
                        } else {
                            tmp[params.rowIndex] = this.rows[params.rowIndex]['value'];
                            this.rows[params.rowIndex]['value'] = '<form action="/updateProperty" method="POST"><input type="hidden" name="_token" value="' + document.head.querySelector('meta[name="csrf-token"]').content + '"><input type="hidden" name="id" value="' + params.row.id + '"><input type="hidden" name="optionId" value="' + this.propId + '"><input class="change-ajax-input" type="text" name="value" value="' + params.row.value + '" placeholder="' + params.row.value + '" autocomplete="off"></form>';
                        }
                    } else {
                        tmp[params.rowIndex] = this.rows[params.rowIndex]['value'];
                        this.rows[params.rowIndex]['value'] = '<form action="/updateProperty" method="POST"><input type="hidden" name="_token" value="' + document.head.querySelector('meta[name="csrf-token"]').content + '"><input type="hidden" name="id" value="' + params.row.id + '"><input type="hidden" name="optionId" value="' + this.propId + '"><input class="change-ajax-input" type="text" name="value" value="' + params.row.value + '" placeholder="' + params.row.value + '" autocomplete="off"></form>';
                    }
                }
                if (params.column.field == 'editButton2') {
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
                    if (this.rows[params.rowIndex]['url'] != null) {
                        if (this.rows[params.rowIndex]['url'].includes('input') == true) {
                            this.rows[params.rowIndex]['url'] = tmp[params.rowIndex];
                        } else {
                            tmp[params.rowIndex] = this.rows[params.rowIndex]['value'];
                            this.rows[params.rowIndex]['url'] = '<form action="/updateProperty" method="POST"><input type="hidden" name="_token" value="' + document.head.querySelector('meta[name="csrf-token"]').content + '"><input type="hidden" name="id" value="' + params.row.id + '"><input type="hidden" name="optionId" value="' + this.propId + '"><input class="change-ajax-input" type="text" name="url" value="' + params.row.url + '" placeholder="' + params.row.url + '" autocomplete="off"></form>';
                        }
                    } else {
                        tmp[params.rowIndex] = this.rows[params.rowIndex]['value'];
                        this.rows[params.rowIndex]['url'] = '<form action="/updateProperty" method="POST"><input type="hidden" name="_token" value="' + document.head.querySelector('meta[name="csrf-token"]').content + '"><input type="hidden" name="id" value="' + params.row.id + '"><input type="hidden" name="optionId" value="' + this.propId + '"><input class="change-ajax-input" type="text" name="url" value="' + params.row.url + '" placeholder="' + params.row.url + '" autocomplete="off"></form>';
                    }
                }
            },
            deleteData() {
                var id = [];
                this.$children["0"].selectedRows.forEach(function(product) {
                    id.push(product.id);
                });
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteProp', {property: id}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProp/' + this.propId)
                    .then(function(response) {
                        this.rows = response.data;
                    });
                });
            }
        },
        created: function() {
            this.$http.get('/getProp/'+ this.propId)
            .then(function(response) {
                this.rows = response.data;
            });
        },
        mounted() {
        },
    };
</script>
