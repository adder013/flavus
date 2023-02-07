<template>
    <div class="all-categories">
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <h1>{{ currentCategory.name }}</h1>
        <div class="breadcrumb">
            <div class="breadcrumb-btn">
                <a href="/dashboard/products">Товары</a>
            </div>
            <div v-for="url in path" class="breadcrumb-btn">
                <a :href="url.url">{{ url.name }}</a>
            </div>
        </div>
        <div class="data-left">
            <div class="categories-list" v-for="category in categories">
                <div class="block-img">
                    <img v-if="currentCategory.image" onerror="this.src='/img/placeholder.jpg'" :src="currentCategory.image" :alt="currentCategory.name">
                    <img v-else src="/img/placeholder.jpg" :alt="currentCategory.name">
                </div>
                <button type="button" v-on:click="selectImage()"><i class="fas fa-images"></i><span>Изменить изображение</span></button>
                <div class="on-off">
                    <span>Отображать на сайте</span>
                    <input v-on:click="updateCategory()" id="enable-category" class="tgl tgl-flat" type="checkbox" v-model="currentCategory.active" :disabled="progress">
                    <label class="tgl-btn" for="enable-category"></label>
                </div>
                <div class="on-off">
                    <span>Отображать в меню</span>
                    <input v-on:click="updateCategory()" id="enable-menu" class="tgl tgl-flat" type="checkbox" v-model="currentCategory.show_menu" :disabled="progress">
                    <label class="tgl-btn" for="enable-menu"></label>
                </div>
                <div class="on-off">
                    <span>Отображать содержимое</span>
                    <input v-on:click="updateCategory()" id="enable-content" class="tgl tgl-flat" type="checkbox" v-model="currentCategory.show_content" :disabled="progress">
                    <label class="tgl-btn" for="enable-content"></label>
                </div>
                <div class="on-off">
                    <span>Включить фильтрацию</span>
                    <input v-on:click="updateCategory()" id="enable-filter" class="tgl tgl-flat" type="checkbox" v-model="currentCategory.filter" :disabled="progress">
                    <label class="tgl-btn" for="enable-filter"></label>
                </div>
                <draggable :list="category.child" class="dragArea" @change="change">
                    <ul v-for="category_2 in category.child" class="sort-block">
                        <li><a v-if="category_2.child.length > 0" v-on:click="toggleSubs(category_2.id, $event)" class="expand-blocks"><i class="fas fa-caret-right"></i></a><a v-else v-on:click="toggleSubs(category_2.id)" class="expand-blocks"></a><a class="sort-url" :href="category.path + category_2.url">{{ category_2.name }}</a></li>
                        <li :id="category_2.id">
                            <draggable :list="category_2.child" class="dragArea" @change="change">
                                <ul v-for="category_3 in category_2.child">
                                    <li><a class="expand-blocks"></a><a class="sort-url" :href="category.path + category_2.url + '/' + category_3.url">{{ category_3.name }}</a></li>
                                </ul>
                            </draggable>
                        </li>
                    </ul>
                </draggable>
                <button v-on:click="updateCategory()" type="button"><i class="fas fa-hdd"></i><span>Обновить категорию</span></button>
                <button v-on:click="deleteCategory()" type="button"><i class="fas fa-trash"></i><span>Удалить категорию</span></button>
            </div>
        </div>
        <div class="data-right">
            <form v-on:submit.prevent="createSubCategory()" class="add-category">
                <input type="text" name="name" v-model="dataform.categoryName" placeholder="Название подкатегории" required>
                <input type="text" name="url" v-model="dataform.categoryUrl" placeholder="Url" required>
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </form>
            <form v-on:submit.prevent="updateCategory()" class="edit-category">
                <div class="block-input">
                    <div class="name">Название:</div>
                    <input type="text" v-model="currentCategory.name" placeholder="Название" required>
                </div>
                <div class="block-input">
                    <div class="name">URL:</div>
                    <input type="text" v-model="currentCategory.url" placeholder="URL" required>
                </div>
                <div class="block-textarea">
                    <div class="body">Описание:</div>
                    <textarea v-model="currentCategory.body" placeholder="Описание"></textarea>
                </div>
                <div class="block-input">
                    <div class="name">Meta Title:</div>
                    <input type="text" v-model="currentCategory.meta_title" placeholder="Meta Title">
                </div>
                <div class="block-input">
                    <div class="name">Дополнительный текст для Meta Title:</div>
                    <input type="text" v-model="currentCategory.moreinfo" placeholder="Дополнительный текст для Meta Title">
                </div>
                <div class="block-textarea">
                    <div class="body">Meta Description:</div>
                    <textarea v-model="currentCategory.meta_description" placeholder="Описание"></textarea>
                </div>
            </form>
        </div>
        <div class="filters">
            <div class="enabled-options">
                <button type="button" v-on:click="currentCategory.filter = (currentCategory.filter == 1) ? 0 : 1;updateCategory()" class="active-filters" v-bind:class="{ on: currentCategory.filter }"></button>
                <h3>Активные характеристики</h3>
                <div v-if="currentCategory.filter_price == 1" class="option">
                    <input v-on:click="filterChangeInStock()" type="checkbox" v-model="currentCategory.filter_price">
                    <span class="name">Цена</span>
                </div>
                <div v-if="currentCategory.filter_instock == 1" class="option">
                    <input v-on:click="filterChangeInStock()" type="checkbox" v-model="currentCategory.filter_instock">
                    <span class="name">Наличие</span>
                </div>
                <draggable :list="options" @change="changeFilters()">
                    <div v-for="option in options" v-if="option.status" class="option">
                        <input v-on:click="filterChangeStatus(option)" type="checkbox" v-model="option.status">
                        <span class="name">{{ option.name }}</span>
                        <i class="fas fa-bars"></i>
                    </div>
                </draggable>
            </div>
            <div class="disabled-options">
                <h3>Доступные характеристики</h3>
                <div class="hidden-options">
                    <div v-if="currentCategory.filter_price == 0" class="option">
                        <input v-on:click="filterChangeInStock()" type="checkbox" v-model="currentCategory.filter_price">
                        <span class="name">Цена</span>
                    </div>
                    <div v-if="currentCategory.filter_instock == 0" class="option">
                        <input v-on:click="filterChangeInStock()" type="checkbox" v-model="currentCategory.filter_instock">
                        <span class="name">Наличие</span>
                    </div>
                    <div v-for="option in options" v-if="option.status == 0" class="option">
                        <input v-on:click="filterChangeStatus(option)" type="checkbox" v-model="option.status">
                        <span class="name">{{ option.name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'category',
    props: {
        categoryId: {
            type: Number,
            require: true
        },
    },
    components: {
        draggable: VueDraggable
    },
    beforeMount() {
        this.$http.get('/getCategory?id=' + this.categoryId)
        .then(function(response) {
            this.path = response.data.path;
            this.currentCategory = response.data.category;
            this.currentCategory.active = (this.currentCategory.active == 1) ? true : false;
            this.currentCategory.show_content = (this.currentCategory.show_content == 1) ? true : false;
            this.currentCategory.show_menu = (this.currentCategory.show_menu == 1) ? true : false;
            this.currentCategory.filter = (this.currentCategory.filter == 1) ? true : false;
            this.currentCategory.filter_instock = (this.currentCategory.filter_instock == 1) ? true : false;
            this.currentCategory.filter_price = (this.currentCategory.filter_price == 1) ? true : false;
        });
        this.$http.get('/getProducts?id=' + this.categoryId)
        .then(function(response) {
            this.categories = response.data.categories;
        });
        this.$http.get('/getFiltersForCategory?id=' + this.categoryId)
        .then(function(response) {
            this.options = response.data.options;
        });
    },
    data() {
        return {
            progress: false,
            error: false,
            errorMessage: String,
            success: false,
            successMessage: String,
            dataform: {},
            currentCategory: {},
            categories: [],
            options: [],
            path: [],
    	};
    },
    methods: {
        deleteCategory() {
            if (this.progress == false) {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteCategory', { id: this.categoryId })
                .then(function(response) {
                    this.progress = false;
                    if (response.data.success) {
                        this.success = true;
                        this.successMessage = response.data.message;
                        setTimeout(() => {
                            this.success = false;
                            window.location.href = '/dashboard/products';
                        }, 1000);
                    } else {
                        this.error = true;
                        this.errorMessage = response.data.message;
                        setTimeout(() => {
                            this.error = false;
                        }, 3000);
                    }
                });
            }
        },
        updateCategory() {
            setTimeout(() => {
                if (this.progress == false) {
                    this.success = false;
                    this.error = false;
                    this.progress = true;
                    this.currentCategory.active = this.currentCategory.active ? 1 : 0;
                    this.currentCategory.show_content = this.currentCategory.show_content ? 1 : 0;
                    this.currentCategory.show_menu = this.currentCategory.show_menu ? 1 : 0;
                    Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                    this.$http.post('/updateCategory', { category: this.currentCategory, redirect: window.location.href })
                    .then(function(response) {
                        this.progress = false;
                        if (response.data.success) {
                            this.success = true;
                            this.successMessage = response.data.message;
                            setTimeout(() => {
                                this.success = false;
                            }, 3000);
                            if (response.data.redirect == false) {
                                this.$http.get('/getCategory?id=' + this.categoryId)
                                .then(function(response) {
                                    this.currentCategory = response.data.category;
                                    this.currentCategory.active = (this.currentCategory.active == 1) ? true : false;
                                    this.currentCategory.show_content = (this.currentCategory.show_content == 1) ? true : false;
                                    this.currentCategory.show_menu = (this.currentCategory.show_menu == 1) ? true : false;
                                    this.currentCategory.filter = (this.currentCategory.filter == 1) ? true : false;
                                    this.currentCategory.filter_instock = (this.currentCategory.filter_instock == 1) ? true : false;
                                    this.currentCategory.filter_price = (this.currentCategory.filter_price == 1) ? true : false;
                                });
                            } else {
                                window.location.href = response.data.path;
                            }
                        } else {
                            this.error = true;
                            this.errorMessage = response.data.message;
                            setTimeout(() => {
                                this.error = false;
                            }, 3000);
                        }
                    });
                }
            }, 100);
        },
        selectImage() {
            var lfm = function(options, cb) {
                var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                window.SetUrl = cb;
            }
            lfm({type: 'image', prefix: ''}, (url, path) => {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/updateCategoryImage', { path: path, id: this.categoryId })
                .then(function(response) {
                    this.$http.get('/getCategory?id=' + this.categoryId)
                    .then(function(response) {
                        this.currentCategory = response.data.category;
                        this.currentCategory.active = (this.currentCategory.active == 1) ? true : false;
                        this.currentCategory.show_content = (this.currentCategory.show_content == 1) ? true : false;
                        this.currentCategory.show_menu = (this.currentCategory.show_menu == 1) ? true : false;
                        this.currentCategory.filter = (this.currentCategory.filter == 1) ? true : false;
                        this.currentCategory.filter_instock = (this.currentCategory.filter_instock == 1) ? true : false;
                        this.currentCategory.filter_price = (this.currentCategory.filter_price == 1) ? true : false;
                    });
                });
            });
        },
        toggleSubs(id, event) {
            event.currentTarget.innerHTML = '<i class="fas fa-caret-down"></i>';
            var subCategories = document.getElementById(id).firstChild.childNodes;
            for (var i = 0; i < subCategories.length; i++) {
                if (subCategories[i].style.display == 'none' || subCategories[i].style.display == '') {
                    subCategories[i].style.display = 'block';
                    event.currentTarget.innerHTML = '<i class="fas fa-caret-down"></i>';
                } else {
                    subCategories[i].style.display = 'none';
                    event.currentTarget.innerHTML = '<i class="fas fa-caret-right"></i>';
                }
            }
        },
        change() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeSortCategories', { categories: this.categories, level: 1 })
            .then(function() {
                this.$http.get('/getProducts?id=' + this.categoryId)
                .then(function(response) {
                    this.categories = response.data.categories;
                });
            });
        },
        changeFilters() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeSortFilterOptions', {  filters: this.options, category_id: this.categoryId })
            .then(function() {
                this.$http.get('/getFiltersForCategory?id=' + this.categoryId)
                .then(function(response) {
                    this.options = response.data.options;
                });
            });
        },
        createSubCategory() {
            this.success = false;
            this.error = false;
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addCategory', { parent_id: this.currentCategory.id, depth: this.currentCategory.depth, name: this.dataform.categoryName, url: this.dataform.categoryUrl }, { emulateJSON:true })
            .then(function(response) {
                this.progress = false;
                if (response.data.success) {
                    this.success = true;
                    this.successMessage = response.data.message;
                    this.dataform.categoryName = '';
                    this.dataform.categoryUrl = '';
                    setTimeout(() => {
                        this.success = false;
                    }, 3000);
                    this.$http.get('/getProducts?id=' + this.categoryId)
                    .then(function(response) {
                        this.categories = response.data.categories;
                    });
                } else {
                    this.error = true;
                    this.errorMessage = response.data.message;
                    setTimeout(() => {
                        this.error = false;
                    }, 3000);
                }
            });
        },
        filterChangeStatus(option) {
            this.success = false;
            this.error = false;
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeFilterOption', { category_id: this.categoryId, option_id: option.id, option_status: option.status })
            .then(function(response) {
                this.progress = false;
                if (response.data.success) {
                    this.success = true;
                    this.successMessage = response.data.message;
                    setTimeout(() => {
                        this.success = false;
                    }, 3000);
                } else {
                    this.error = true;
                    this.errorMessage = response.data.message;
                    setTimeout(() => {
                        this.error = false;
                    }, 3000);
                }
            });
        },
        filterChangeInStock() {
            setTimeout(() => {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/changeCategoryFilter', { category_id: this.currentCategory.id, filter_instock: this.currentCategory.filter_instock, filter_price: this.currentCategory.filter_price})
                .then(function(response) {
                    this.progress = false;
                    if (response.data.success) {
                        this.success = true;
                        this.successMessage = response.data.message;
                        setTimeout(() => {
                            this.success = false;
                        }, 3000);
                    } else {
                        this.error = true;
                        this.errorMessage = response.data.message;
                        setTimeout(() => {
                            this.error = false;
                        }, 3000);
                    }
                });
            }, 100);
        },
    },
};
</script>
