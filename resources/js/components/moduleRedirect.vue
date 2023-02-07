<template>
    <div class="module-redirect-wrap">
        <h1>Редиректы</h1>
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <form v-on:submit.prevent="addRedirect" class="add-redirect">
            <select v-model="dataform.code" required>
                <option value="0" selected disabled>- Код ответа -</option>
                <option value="301">301</option>
                <option value="302">302</option>
                <option value="307">307</option>
                <option value="308">308</option>
            </select>
            <input type="text" name="from" v-model="dataform.from" placeholder="Откуда" autocomplete="off" required>
            <input type="text" name="to" v-model="dataform.to" placeholder="Куда" autocomplete="off" required>
            <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
        </form>
        <div class="table-wrap">
            <div class="search">
                <input v-on:keyup="searchQuery()" v-model="query" type="text" autocomplete="off" autocorrect="off" placeholder="Поиск...">
            </div>
            <table v-if="redirects.length == 0 && search == 0">
                <tbody>
                    <tr>
                        <td class="center">Идет загрузка таблицы...</td>
                    </tr>
                </tbody>
            </table>
            <table v-if="redirects.length == 0 && search == 1">
                <tbody>
                    <tr>
                        <td class="center">По данному запросу ничего не найдено</td>
                    </tr>
                </tbody>
            </table>
            <table v-if="redirects.length != 0">
                <thead>
                    <tr>
                        <th><input v-on:click="selectAllRows()" class="select-row" type="checkbox"></th>
                        <th>Код ответа</th>
                        <th>Откуда</th>
                        <th>Куда</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr :id="redirect.id" v-for="redirect in redirects">
                        <td data-label="Выбор">
                            <input v-on:click="selectRow(redirect.id)" class="select-row" type="checkbox">
                        </td>
                        <td data-label="Код ответа">
                            <select v-model="redirect.status_code" disabled>
                                <option value="301" :selected="redirect.status_code">301</option>
                                <option value="302" :selected="redirect.status_code">302</option>
                                <option value="307" :selected="redirect.status_code">307</option>
                                <option value="308" :selected="redirect.status_code">308</option>
                            </select>
                        </td>
                        <td data-label="Откуда">
                            <input type="text" v-model="redirect.from" disabled>
                        </td>
                        <td data-label="Куда">
                            <input type="text" v-model="redirect.to" disabled>
                        </td>
                        <td data-label="Редактировать"><button v-on:click="editLine(redirect.id, redirect.status_code, redirect.from, redirect.to, redirect.disabled)"><i class="fas fa-pen-nib"></i></button></td>
                        <td data-label="Удалить"><button v-on:click="deleteLine(redirect.id)"><i class="fas fa-trash"></i></button></td>
                    </tr>
                </tbody>
            </table>
            <div class="selected-actions">
                <div class="selected">1 - Всего выбрано</div>
                <a v-on:click="cleanSelected()" class="clean"><i class="fas fa-broom"></i><span>Очистить</span></a>
                <a v-on:click="deleteSelected()" class="delete"><i class="fas fa-trash"></i><span>Удалить</span></a>
            </div>
            <div v-if="redirects.length != 0" class="table-actions">
                <div class="perPage">
                    Редиректов на странице:
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
        name: 'module-redirect',
        data() {
            return {
                progress: false,
                error: false,
                errorMessage: String,
                success: false,
                successMessage: String,
                query: '',
                changing: 0,
                redirects: [],
                dataform: { code: 0 },
                total: 0,
                perPage: 10,
                currentPage: 1,
                selected: [],
                search: 0,
            }
        },
        methods: {
            addRedirect() {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/addRedirect', { code: this.dataform.code, from: this.dataform.from, to: this.dataform.to }, { emulateJSON:true })
                .then(function(response) {
                    this.progress = false;
                    if (response.data.success) {
                        this.success = true;
                        this.successMessage = this.dataform.code + ' редирект успешно добавлен';
                        this.dataform = {};
                        this.dataform.code = 0;
                        setTimeout(() =>{
                            this.success = false;
                        }, 3000);
                        this.$http.get('/getRedirectsData')
                        .then(function(response) {
                            this.perPage = response.data.perPage;
                            this.currentPage = response.data.currentPage;
                            this.total = response.data.total;
                            this.$http.get('/getRedirects?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                            .then(function(response) {
                                if (this.perPage == this.total) {
                                    this.redirects = response.data;
                                } else {
                                    this.redirects = response.data.data;
                                }
                            });
                        });
                    } else {
                        this.error = true;
                        this.errorMessage = response.data.message;
                        setTimeout(() =>{
                            this.error = false;
                        }, 3000);
                    }
                });
            },
            editLine(id, code, from, to, disabled) {
                if (document.getElementById(id).querySelector('td:nth-child(2) select').disabled == true) {
                    document.getElementById(id).querySelector('td:nth-child(2) select').disabled = false;
                    document.getElementById(id).querySelector('td:nth-child(3) input').disabled = false;
                    document.getElementById(id).querySelector('td:nth-child(4) input').disabled = false;
                } else {
                    document.getElementById(id).querySelector('td:nth-child(2) select').disabled = true;
                    document.getElementById(id).querySelector('td:nth-child(3) input').disabled = true;
                    document.getElementById(id).querySelector('td:nth-child(4) input').disabled = true;
                    this.success = false;
                    this.error = false;
                    this.progress = true;
                    Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                    this.$http.post('/updateRedirects', { id: id, code: code, from: from, to: to }, { emulateJSON:true })
                    .then(function(response) {
                        this.progress = false;
                        if (response.data.success) {
                            this.success = true;
                            this.successMessage = 'Успешно обновлено!';
                            setTimeout(() =>{
                                this.success = false;
                            }, 3000);
                        } else {
                            this.error = true;
                            this.errorMessage = 'Произошла неизвестная ошибка';
                            setTimeout(() =>{
                                this.error = false;
                            }, 3000);
                        }
                    });
                }
            },
            deleteLine(id) {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteRedirect', { id: id }, { emulateJSON:true })
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
                            this.$http.get('/searchRedirects?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                            .then(function(response) {
                                this.perPage = parseInt(response.data.info.perPage);
                                this.currentPage = parseInt(response.data.info.currentPage);
                                this.total = parseInt(response.data.info.total);
                                this.redirects = response.data.items.data;
                            });
                        } else {
                            this.search = 0;
                            this.$http.get('/getRedirectsData')
                            .then(function(response) {
                                this.perPage = response.data.perPage;
                                this.currentPage = response.data.currentPage;
                                this.total = response.data.total;
                                this.$http.get('/getRedirects?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                                .then(function(response) {
                                    if (this.perPage == this.total) {
                                        this.redirects = response.data;
                                    } else {
                                        this.redirects = response.data.data;
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
                this.$http.post('/deleteRedirects', { id: this.selected }, { emulateJSON:true })
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
                            this.$http.get('/searchRedirects?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                            .then(function(response) {
                                this.perPage = parseInt(response.data.info.perPage);
                                this.currentPage = parseInt(response.data.info.currentPage);
                                this.total = parseInt(response.data.info.total);
                                this.redirects = response.data.items.data;
                            });
                        } else {
                            this.search = 0;
                            this.$http.get('/getRedirects?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                            .then(function(response) {
                                if (this.perPage == this.total) {
                                    this.redirects = response.data;
                                } else {
                                    this.redirects = response.data.data;
                                }
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
                    for (var i = 0; i < this.redirects.length; i++) {
                        this.selected.push(this.redirects[i].id);
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
                    this.$http.get('/getRedirects?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                    .then(function(response) {
                        this.changing = 0;
                        if (this.perPage == this.total) {
                            this.redirects = response.data;
                        } else {
                            this.redirects = response.data.data;
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
                var codeSelect = document.querySelectorAll('tbody td:nth-child(2) select');
                for (var i = 0; i < codeSelect.length; i++) {
                    codeSelect[i].disabled = true;
                }
                var inputFrom = document.querySelectorAll('tbody td:nth-child(3) input');
                for (var i = 0; i < inputFrom.length; i++) {
                    inputFrom[i].disabled = true;
                }
                var inputTo = document.querySelectorAll('tbody td:nth-child(4) input');
                for (var i = 0; i < inputTo.length; i++) {
                    inputTo[i].disabled = true;
                }
                if (this.query.length == 0) {
                    if (this.changing == 0) {
                        this.currentPage -= 1;
                        this.changing = 1;
                        this.$http.get('/getRedirects?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            if (this.perPage == this.total) {
                                this.redirects = response.data;
                            } else {
                                this.redirects = response.data.data;
                            }
                        });
                    }
                } else {
                    if (this.changing == 0) {
                        this.currentPage -= 1;
                        this.changing = 1;
                        this.$http.get('/searchRedirects?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            this.perPage = parseInt(response.data.info.perPage);
                            this.currentPage = parseInt(response.data.info.currentPage);
                            this.total = parseInt(response.data.info.total);
                            this.redirects = response.data.items.data;
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
                var codeSelect = document.querySelectorAll('td:nth-child(2) select');
                for (var i = 0; i < codeSelect.length; i++) {
                    codeSelect[i].disabled = true;
                }
                var inputFrom = document.querySelectorAll('td:nth-child(3) input');
                for (var i = 0; i < inputFrom.length; i++) {
                    inputFrom[i].disabled = true;
                }
                var inputTo = document.querySelectorAll('td:nth-child(4) input');
                for (var i = 0; i < inputTo.length; i++) {
                    inputTo[i].disabled = true;
                }
                if (this.query.length == 0) {
                    if (this.changing == 0) {
                        this.currentPage += 1;
                        this.changing = 1;
                        this.$http.get('/getRedirects?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            if (this.perPage == this.total) {
                                this.redirects = response.data;
                            } else {
                                this.redirects = response.data.data;
                            }
                        });
                    }
                } else {
                    if (this.changing == 0) {
                        this.currentPage += 1;
                        this.changing = 1;
                        this.$http.get('/searchRedirects?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                        .then(function(response) {
                            this.changing = 0;
                            this.perPage = parseInt(response.data.info.perPage);
                            this.currentPage = parseInt(response.data.info.currentPage);
                            this.total = parseInt(response.data.info.total);
                            this.redirects = response.data.items.data;
                        });
                    }
                }
            },
            searchQuery() {
                if (this.query.length > 1) {
                    this.search = 1;
                    this.$http.get('/searchRedirects?query=' + this.query + '&currentPage=' + this.currentPage +'&perPage=' + this.perPage)
                    .then(function(response) {
                        this.perPage = parseInt(response.data.info.perPage);
                        this.currentPage = parseInt(response.data.info.currentPage);
                        this.total = parseInt(response.data.info.total);
                        this.redirects = response.data.items.data;
                    });
                } else {
                    this.search = 0;
                }
            }
        },
        created: function() {
            this.$http.get('/getRedirectsData')
            .then(function(response) {
                this.perPage = response.data.perPage;
                this.currentPage = response.data.currentPage;
                this.total = response.data.total;
                this.$http.get('/getRedirects?currentPage=' + this.currentPage + '&perPage=' + this.perPage)
                .then(function(response) {
                    if (this.perPage == this.total) {
                        this.redirects = response.data;
                    } else {
                        this.redirects = response.data.data;
                    }
                });
            });
        },
    }
</script>
