<template>
    <div class="brands">
        <div v-show="progress" class="update-message">
            <img src="/svg/loading_dashboard.svg" alt="Загрузка">
        </div>
        <div v-show="error" class="error-message">
            {{ errorMessage }}
        </div>
        <div v-show="success" class="success-message">
            <img src="/svg/success_dashboard.svg" alt="Успешно">
        </div>
        <h1>Бренды</h1>
        <div class="data-left">
            <draggable :list="brands" class="dragArea brands-list" @change="change">
                <ul v-for="brand in brands" class="sort-block">
                    <li><a class="expand-blocks"></a><a class="sort-url" :href="'/dashboard/brands/' + brand.url">{{ brand.name }}</a></li>
                </ul>
            </draggable>
        </div>
        <div class="data-right">
            <form v-on:submit.prevent="createBrand()" class="add-brand">
                <input type="text" name="name" v-model="dataform.brandName" placeholder="Название бренда" required>
                <input type="text" name="url" v-model="dataform.brandUrl" placeholder="Url" required>
                <button><i class="fas fa-plus-square"></i><span>Добавить</span></button>
            </form>
            <div class="brands-list">
                <div v-for="brand in brands" class="brand-block">
                    <div class="img-wrap">
                        <img v-if="brand.image" onerror="this.src='/svg/empty_brand.svg'" :src="brand.image" :alt="brand.name">
                        <img v-else src="/svg/empty_brand.svg" :alt="brand.name">
                    </div>
                    <div class="name">{{ brand.name }}</div>
                    <div class="btn-wrap">
                        <a :href="'/dashboard/brands/' + brand.url"><i class="fas fa-pen-square"></i><span>Редактировать</span></a>
                        <button v-on:click="deleteBrand(brand.id)"><i class="fas fa-trash"></i><span>Удалить</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'brands',
    props: {
        propId: String,
    },
    components: {
        draggable: VueDraggable
    },
    beforeMount() {
        this.$http.get('/getBrands')
        .then(function(response) {
            this.brands = response.data.brands;
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
            allCatDescription: '',
            brands: [],
    	};
    },
    methods: {
        change() {
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/changeSortBrands', { brands: this.brands })
            .then(function() {
                this.$http.get('/getBrands')
                .then(function(response) {
                    this.brands = response.data.brands;
                });
            });
        },
        createBrand() {
            this.success = false;
            this.error = false;
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/addBrand', { name: this.dataform.brandName, url: this.dataform.brandUrl })
            .then(function(response) {
                this.progress = false;
                if (response.data.success) {
                    this.success = true;
                    this.successMessage = response.data.message;
                    this.dataform.brandName = '';
                    this.dataform.brandUrl = '';
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                    this.$http.get('/getBrands')
                    .then(function(response) {
                        this.brands = response.data.brands;
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
        deleteBrand(id) {
            this.success = false;
            this.error = false;
            this.progress = true;
            Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
            this.$http.post('/deleteBrand', { brand_id: id })
            .then(function(response) {
                this.progress = false;
                if (response.data.success) {
                    this.success = true;
                    this.successMessage = response.data.message;
                    setTimeout(() =>{
                        this.success = false;
                    }, 3000);
                    this.$http.get('/getBrands')
                    .then(function(response) {
                        this.brands = response.data.brands;
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
    },
};
</script>
