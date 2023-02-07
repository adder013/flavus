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
        <h1>{{ brand.name }}</h1>
        <div class="data-left">
            <div class="brands-list">
                <div class="block-img">
                    <img v-if="brand.image" onerror="this.src='/img/placeholder.jpg'" :src="brand.image" :alt="brand.name">
                    <img v-else src="/img/placeholder.jpg" :alt="brand.name">
                </div>
                <button type="button" v-on:click="selectImage()"><i class="fas fa-images"></i><span>Изменить изображение</span></button>
                <div class="on-off">
                    <span>Отображать на сайте</span>
                    <input v-on:click="updateBrand()" id="enable-brand" class="tgl tgl-flat" type="checkbox" v-model="brand.active" :disabled="progress">
                    <label class="tgl-btn" for="enable-brand"></label>
                </div>
                <div class="on-off">
                    <span>Включить фильтрацию</span>
                    <input v-on:click="updateBrand()" id="enable-filter" class="tgl tgl-flat" type="checkbox" v-model="brand.filter" :disabled="progress">
                    <label class="tgl-btn" for="enable-filter"></label>
                </div>
                <button v-on:click="updateBrand()" type="button"><i class="fas fa-hdd"></i><span>Обновить бренд</span></button>
                <button v-on:click="deleteBrand()" type="button"><i class="fas fa-trash"></i><span>Удалить бренд</span></button>
            </div>
        </div>
        <div class="data-right">
            <form v-on:submit.prevent="updateBrand()" class="edit-brand">
                <div class="block-input">
                    <div class="name">Название:</div>
                    <input type="text" v-model="brand.name" placeholder="Название" required>
                </div>
                <div class="block-input">
                    <div class="name">URL:</div>
                    <input type="text" v-model="brand.url" placeholder="URL" required>
                </div>
                <div class="block-textarea">
                    <div class="body">Краткое описание:</div>
                    <textarea v-model="brand.info" placeholder="Краткое описание"></textarea>
                </div>
                <div class="block-input">
                    <div class="name">Заголовок H1:</div>
                    <input type="text" v-model="brand.header" placeholder="Заголовок H1">
                </div>
                <div class="block-textarea">
                    <div class="body">Полное описание:</div>
                    <textarea v-model="brand.body" placeholder="Полное описание"></textarea>
                </div>
                <div class="block-input">
                    <div class="name">Meta Title:</div>
                    <input type="text" v-model="brand.metaTitle" placeholder="Meta Title">
                </div>
                <div class="block-textarea">
                    <div class="body">Meta Description:</div>
                    <textarea v-model="brand.metaDescription" placeholder="Описание"></textarea>
                </div>
				<div class="block-tags">
					<div class="tag">
						<div class="body">Теги</div>
						<div v-for="tag in tags" class="block-wrap">
							<div class="props-block">
								<form>
									<input class="checkbox" type="checkbox" v-model="tag.connected">
									<label :for="tag.name">{{ tag.name }}</label>
								</form>
							</div>
						</div>
					</div>
					<div class="tag">
						<div class="body">Отрасли</div>
						<div v-for="industry in industries" class="block-wrap">
							<div class="props-block">
								<form>
									<input class="checkbox" type="checkbox" v-model="industry.connected">
									<label :for="industry.name">{{ industry.name }}</label>
								</form>
							</div>
						</div>
					</div>
				</div>
            </form>
        </div>
    </div>
</template>
<script>
export default {
    name: 'brand',
    props: {
        brandId: {
            type: Number,
            require: true
        },
    },
    components: {
        draggable: VueDraggable
    },
    beforeMount() {
        this.$http.get('/getBrands?id=' + this.brandId)
        .then(function(response) {
            this.brand = response.data.brand;
            this.brand.active = (this.brand.active == 1) ? true : false;
            this.brand.filter = (this.brand.filter == 1) ? true : false;
		});
		this.$http.get('/getBrandsTags?brand_id=' + this.brandId)
		.then(function(response) {
			this.tags = response.data.brands_tags;
		});
		this.$http.get('/getBrandsIndustries?brand_id=' + this.brandId)
		.then(function(response) {
			this.industries = response.data.brands_industries;
		});
    },
    data() {
        return {
            progress: false,
            error: false,
            errorMessage: String,
            success: false,
            successMessage: String,
			brand: [],
			tags: [],
			industries: [],
    	};
    },
    methods: {
        deleteBrand() {
            if (this.progress == false) {
                this.success = false;
                this.error = false;
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteBrand', { brand_id: this.brandId })
                .then(function(response) {
                    this.progress = false;
                    if (response.data.success) {
                        this.success = true;
                        this.successMessage = response.data.message;
                        setTimeout(() => {
                            this.success = false;
                            window.location.href = '/dashboard/brands';
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
        updateBrand() {
            setTimeout(() => {
                if (this.progress == false) {
                    this.success = false;
                    this.error = false;
                    this.progress = true;
                    this.brand.active = this.brand.active ? 1 : 0;
                    this.brand.filter = this.brand.filter ? 1 : 0;
					Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                    this.$http.post('/updateBrand', { brand: this.brand, tags: this.tags, industries: this.industries, redirect: window.location.href })
                    .then(function(response) {
                        this.progress = false;
                        if (response.data.success) {
                            this.success = true;
                            this.successMessage = response.data.message;
                            setTimeout(() => {
                                this.success = false;
                            }, 3000);
                            if (response.data.redirect == false) {
                                this.$http.get('/getBrands?id=' + this.brandId)
                                .then(function(response) {
                                    this.brand = response.data.brand;
                                    this.brand.active = (this.brand.active == 1) ? true : false;
                                    this.brand.filter = (this.brand.filter == 1) ? true : false;
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
                this.$http.post('/updateBrandImage', { path: path, id: this.brandId })
                .then(function(response) {
                    this.$http.get('/getBrands?id=' + this.brandId)
                    .then(function(response) {
                        this.brand = response.data.brand;
                        this.brand.active = (this.brand.active == 1) ? true : false;
                        this.brand.filter = (this.brand.filter == 1) ? true : false;
                    });
                });
            });
		}
    },
};
</script>
