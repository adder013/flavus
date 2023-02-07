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
        <h1>Товары</h1>
        <div class="data-left">
            <draggable :list="categories" class="dragArea categories-list" @change="change">
                <ul v-for="category in categories" class="sort-block">
                    <li><a v-if="category.child.length > 0" v-on:click="toggleSubs(category.id, $event)" class="expand-blocks"><i class="fas fa-caret-right"></i></a><a v-else v-on:click="toggleSubs(category.id)" class="expand-blocks"></a><a class="sort-url" :href="'/dashboard/category/' + category.url">{{ category.name }}</a></li>
                    <li :id="category.id">
                        <draggable :list="category.child" class="dragArea" @change="change">
                            <ul v-for="category_2 in category.child">
                                <li><a v-if="category_2.child.length > 0" v-on:click="toggleSubs(category_2.id, $event)" class="expand-blocks"><i class="fas fa-caret-right"></i></a><a v-else v-on:click="toggleSubs(category_2.id)" class="expand-blocks"></a><a class="sort-url" :href="'/dashboard/category/' + category.url + '/' + category_2.url">{{ category_2.name }}</a></li>
                                <li :id="category_2.id">
                                    <draggable :list="category_2.child" class="dragArea" @change="change">
                                        <ul v-for="category_3 in category_2.child">
                                            <li><a class="sort-url" :href="'/dashboard/category/' + category.url + '/' + category_2.url + '/' + category_3.url">{{ category_3.name }}</a></li>
                                        </ul>
                                    </draggable>
                                </li>
                            </ul>
                        </draggable>
                    </li>
                </ul>
            </draggable>
        </div>
        <div class="data-right">
            <form v-on:submit.prevent="createCategory()" class="add-category">
                <input type="text" name="name" v-model="dataform.categoryName" placeholder="Название категории" required>
                <input type="text" name="url" v-model="dataform.categoryUrl" placeholder="Url" required>
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </form>
            <form v-on:submit.prevent="updateCategory()" class="categories-description">
                <textarea name="content" v-model="allCatDescription" placeholder="Описание для категорий"></textarea>
                <button><i class="fas fa-hdd"></i><span>Обновить</span></button>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    name: 'categories',
    props: {
        propId: String,
    },
    components: {
        draggable: VueDraggable
    },
    data() {
        return {
            progress: false,
            error: false,
            errorMessage: String,
            success: false,
            successMessage: String,
            dataform: {},
            allCatDescription: '',
            categories: [],
    	};
    },
    methods: {
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
            this.$http.post('/changeSortCategories', { categories: this.categories, level: 0 })
            .then(function() {
                this.$http.get('/getProducts')
                .then(function(response) {
                    this.categories = response.data.categories;
                    this.allCatDescription = response.data.allCatDescription;
                });
            });
        },
        createCategory() {
            this.success = false;
            this.error = false;
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addCategory', { name: this.dataform.categoryName, url: this.dataform.categoryUrl }, { emulateJSON:true })
            .then(function(response) {
                this.progress = false;
                if (response.data.success) {
                    this.success = true;
                    this.successMessage = response.data.message;
                    this.dataform.categoryName = '';
                    this.dataform.categoryUrl = '';
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                    this.$http.get('/getProducts')
                    .then(function(response) {
                        this.categories = response.data.categories;
                        this.allCatDescription = response.data.allCatDescription;
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
        updateCategory() {
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/updateCategoriesDescription', { content: this.allCatDescription }, { emulateJSON:true })
            .then(function(response) {
                this.progress = false;
                if (response.data.success) {
                    this.success = true;
                    this.successMessage = response.data.message;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                } else {
                    this.error = true;
                    this.errorMessage = response.data.message;
                    setTimeout(() =>{
                        this.error = false;
                    }, 3000);
                }
            });
        },
    },
    created: function() {
        this.$http.get('/getProducts')
        .then(function(response) {
            this.categories = response.data.categories;
            this.allCatDescription = response.data.allCatDescription;
        });
    },
    mounted() {
  	},
};
</script>
