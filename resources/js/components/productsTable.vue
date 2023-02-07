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
            <table v-if="products.length == 0 && search == 0">
                <tbody>
                    <tr>
                        <td class="center">Идет загрузка таблицы...</td>
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
            <table v-if="products.length != 0">
                <thead>
                    <tr>
                        <th><input v-on:click="selectAllRows()" class="select-row" type="checkbox"></th>
                        <th>Наименование</th>
                        <th>Артикул</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr :id="product.id" v-for="product in products">
                        <td data-label="Выбор">
                            <input v-on:click="selectRow(product.id)" class="select-row" type="checkbox">
                        </td>
                        <td data-label="Наименование">
                            <a :href="'/dashboard/products/edit/' + product.id + '/' + product.url">{{ product.name }}</a>
                        </td>
                        <td data-label="Артикул">
                            <a :href="'/dashboard/products/edit/' + product.id + '/' + product.url">{{ product.skuName }}</a>
                        </td>
                        <td data-label="Удалить"><button v-on:click="deleteLine(product.id)"><i class="fas fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
            <div class="selected-actions">
                <div class="selected">1 - Всего выбрано</div>
                <a v-on:click="cleanSelected()" class="clean"><i class="fas fa-broom"></i><span>Очистить</span></a>
                <a v-on:click="deleteSelected()" class="delete"><i class="fas fa-trash"></i><span>Удалить</span></a>
            </div>
            <div v-if="products.length != 0" class="table-actions">
                <div class="perPage">
                    Товаров на странице:
                    <select v-on:change="perPageChange()" v-model="perPage">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="200">200</option>
                    </select>
                </div>
                <div class="table-nav">
                    <div v-if="currentPage != 1" v-on:click="previousPage()" class="nav-left">Назад</div>
                    <div v-if="perPage*currentPage < total" class="nav-list">{{ (perPage*currentPage) + 1 - perPage }} - {{ perPage*currentPage }} из {{ total }}</div>
                    <div v-else class="nav-list">{{ (perPage*currentPage) + 1 - perPage }} - {{ total }} из {{ total }}</div>
                    <div v-if="currentPage != Math.ceil(total/perPage)" v-on:click="nextPage()" class="nav-right">Вперед</div>
                </div>
            </div>
        </div>
        <div class="table-fix"></div>
    </div>
</template>
<script>
    export default {
        name: 'products-table-draggable',
        data() {
            return {
                progress: false,
                error: false,
                errorMessage: String,
                success: false,
                successMessage: String,
                query: '',
                changing: 0,
                products: [],
                total: 0,
                perPage: 10,
                currentPage: 1,
                selected: [],
                search: 0,
            }
        },
        methods: {
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
                            this.$http.get('/searchTableProducts?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                            .then(function(response) {
                                this.perPage = parseInt(response.data.info.perPage);
                                this.currentPage = parseInt(response.data.info.currentPage);
                                this.total = parseInt(response.data.info.total);
                                this.products = response.data.items.data;
                            });
                        } else {
                            this.search = 0;
                            this.$http.get('/getTableData')
                            .then(function(response) {
                                this.perPage = response.data.perPage;
                                this.total = response.data.total;
                                this.$http.get('/getData?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                                .then(function(response) {
                                    if (this.perPage == this.total) {
                                        this.products = response.data;
                                    } else {
                                        this.products = response.data.data;
                                    }
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
                            this.$http.get('/searchTableProducts?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                            .then(function(response) {
                                this.perPage = parseInt(response.data.info.perPage);
                                this.currentPage = parseInt(response.data.info.currentPage);
                                this.total = parseInt(response.data.info.total);
                                this.products = response.data.items.data;
                            });
                        } else {
                            this.search = 0;
                            this.$http.get('/getTableData')
                            .then(function(response) {
                                this.perPage = response.data.perPage;
                                this.total = response.data.total;
                                this.$http.get('/getData?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                                .then(function(response) {
                                    if (this.perPage == this.total) {
                                        this.products = response.data;
                                    } else {
                                        this.products = response.data.data;
                                    }
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
            perPageChange() {
                if (this.changing == 0) {
                    this.changing = 1;
                    if (this.perPage*this.currentPage > this.total) {
                        this.currentPage = 1;
                    }
                    this.$http.get('/getData?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                    .then(function(response) {
                        this.changing = 0;
                        if (this.perPage == this.total) {
                            this.products = response.data;
                        } else {
                            this.products = response.data.data;
                        }
                    });
                }
            },
            previousPage() {
                this.selected = [];
                document.getElementsByClassName('selected-actions')[0].style.display = 'none';
                var selectRows = document.getElementsByClassName('select-row');
                for (var i = 0; i < selectRows.length; i++) {
                    selectRows[i].checked = false;
                }
                if (this.query.length == 0) {
                    if (this.changing == 0) {
                        this.currentPage -= 1;
                        this.changing = 1;
                        this.$http.get('/getData?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            if (this.perPage == this.total) {
                                this.products = response.data;
                            } else {
                                this.products = response.data.data;
                            }
                        });
                    }
                } else {
                    if (this.changing == 0) {
                        this.currentPage -= 1;
                        this.changing = 1;
                        this.$http.get('/searchTableProducts?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            this.perPage = parseInt(response.data.info.perPage);
                            this.currentPage = parseInt(response.data.info.currentPage);
                            this.total = parseInt(response.data.info.total);
                            this.products = response.data.items.data;
                        });
                    }
                }
            },
            nextPage() {
                this.selected = [];
                document.getElementsByClassName('selected-actions')[0].style.display = 'none';
                var selectRows = document.getElementsByClassName('select-row');
                for (var i = 0; i < selectRows.length; i++) {
                    selectRows[i].checked = false;
                }
                if (this.query.length == 0) {
                    if (this.changing == 0) {
                        this.currentPage += 1;
                        this.changing = 1;
                        this.$http.get('/getData?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            if (this.perPage == this.total) {
                                this.products = response.data;
                            } else {
                                this.products = response.data.data;
                            }
                        });
                    }
                } else {
                    if (this.changing == 0) {
                        this.currentPage += 1;
                        this.changing = 1;
                        this.$http.get('/searchTableProducts?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            this.perPage = parseInt(response.data.info.perPage);
                            this.currentPage = parseInt(response.data.info.currentPage);
                            this.total = parseInt(response.data.info.total);
                            this.products = response.data.items.data;
                        });
                    }
                }
            },
            searchQuery() {
                if (this.query.length > 1) {
                    this.search = 1;
                    this.$http.get('/searchTableProducts?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                    .then(function(response) {
                        this.perPage = parseInt(response.data.info.perPage);
                        this.currentPage = parseInt(response.data.info.currentPage);
                        this.total = parseInt(response.data.info.total);
                        this.products = response.data.items.data;
                    });
                } else {
                    this.search = 0;
                    this.$http.get('/getTableData')
                    .then(function(response) {
                        this.perPage = response.data.perPage;
                        this.currentPage = response.data.currentPage;
                        this.total = response.data.total;
                        this.$http.get('/getData?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                        .then(function(response) {
                            if (this.perPage == this.total) {
                                this.products = response.data;
                            } else {
                                this.products = response.data.data;
                            }
                        });
                    });
                }
            }
        },
        created: function() {
            this.$http.get('/getTableData')
            .then(function(response) {
                this.perPage = response.data.perPage;
                this.currentPage = response.data.currentPage;
                this.total = response.data.total;
                this.$http.get('/getData?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                .then(function(response) {
                    if (this.perPage == this.total) {
                        this.products = response.data;
                    } else {
                        this.products = response.data.data;
                    }
                });
            });
        },
    }
</script>
