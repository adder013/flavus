<template>
    <div class="product-main-info">
        <h1 class="product-name"><a :href="'/' + info.url" target="_blank">{{ info.name }}</a></h1>
        <div v-show="progress" id="global-message">
            Идет обновление...
        </div>
        <div class="product-head">
            <div class="left-info">
                <div class="block-img">
                    <img v-if="info.image" id="main-img" v-on:error="this.src='/img/placeholder.jpg'" :src="info.image" :alt="info.name">
                    <img v-else id="main-img" src="/img/placeholder.jpg" :alt="info.name">
                </div>
                <div class="product-id-block"><i class="fas fa-sitemap"></i> <span>id: {{ info.id }}</span></div>
                <div class="stickers">
                    <select v-on:change="stickerChanged()" v-model="info.stickerSelected">
                        <option value="0" :selected="info.noStickers">Нет Стикера</option>
                        <option v-for="sticker in info.stickers" v-bind:value="sticker.id" v-html="sticker.text" :selected="sticker.selected"></option>
                    </select>
                </div>
            </div>
            <div class="major-info">
                <div class="flex-width">
                    <form v-for="sku in info.sku" class="sku">
                        <span>Артикул</span>
                        <input type="text" v-model="sku.sku" placeholder="Артикул">
                        <span>Наименование артикула</span>
                        <input type="text" v-model="sku.sku_name" placeholder="Наименование">
                        <span>Код товара</span>
                        <input type="text" v-model="sku.sku_code" placeholder="Код товара">
                        <div class="price-sku">
                            <div class="half">
                                <span>Старая цена</span>
                                <input type="number" v-model="sku.old_price" placeholder="Старая цена">
                            </div>
                            <div class="half">
                                <span>Цена</span>
                                <input type="number" v-model="sku.price" placeholder="Цена">
                            </div>
                        </div>
                        <div class="price-sku">
                            <div class="half">
                                <button v-on:click.prevent="updateSku(sku.id, sku.sku, sku.sku_name, sku.sku_code, sku.old_price, sku.price)" type="submit"><i class="fas fa-paper-plane"></i> Обновить</button>
                            </div>
                            <div class="half">
                                <button v-if="info.deletableSku" v-on:click.prevent="deleteSku(sku.id)"type="submit"><i class="fas fa-eraser"></i> Удалить</button>
                            </div>
                        </div>
                    </form>
                    <button v-on:click.prevent="addSku()" class="add-sku"><i class="fas fa-paw"></i> Добавить артикул</button>
                </div>
            </div>
        </div>
        <vue-tags-input
            v-model="tag"
            :tags="tags"
            :placeholder="'Добавить тег'"
            :autocomplete-items="filteredItems"
            @tags-changed="update">
        </vue-tags-input>
        <div class="product-main-options">
            <form v-on:submit.prevent="updateMainInfo()" method="POST">
                <div class="input-wrap">
                    <div class="name">Название:</div>
                    <input type="text" v-model="info.name">
                </div>
                <div class="input-wrap">
                    <div class="name">URL:</div>
                    <input type="text" v-model="info.url">
                </div>
                <div class="blocks-num">
                    <div class="block-input-number">
                        <div class="name">На складе, шт:</div>
                        <input type="number" v-model="info.in_stock">
                    </div>
                    <div class="block-input-number">
                        <div class="name">Производится, дн:</div>
                        <input type="text" v-model="info.production">
                    </div>
                    <div class="block-input-number">
                        <div class="name">Доставка:</div>
                        <input type="text" v-model="info.delivery">
                    </div>
                </div>
                <div class="blocks-num">
                    <div class="block-select">
                        <div class="name">Категория:</div>
                        <select v-model="info.categorySelected">
                            <option v-for="category in info.allCategories" v-bind:value="category.name[0]" v-html="category.name[0]" :selected="category.selected[0]"></option>
                        </select>
                    </div>
                    <div class="block-select">
                        <div class="name">Бренд:</div>
                        <select v-model="info.brandSelected">
                            <option v-for="brand in info.allBrands" v-bind:value="brand.name[0]" v-html="brand.name[0]" :selected="brand.selected[0]"></option>
                        </select>
                    </div>
                </div>
                <div class="textarea-wrap">
                    <div class="name">Краткое описание:</div>
                    <textarea v-model="info.short_description"></textarea>
                </div>
                <div class="textarea-wrap">
                    <div class="name">Описание:</div>
                    <textarea v-model="info.description"></textarea>
                </div>
                <div class="input-wrap">
                    <div class="name">Meta Title:</div>
                    <input type="text" v-model="info.metaTitle">
                </div>
                <div class="textarea-wrap">
                    <div class="name">Meta Description:</div>
                    <textarea v-model="info.metaDescription"></textarea>
                </div>
                <div class="btn-sub-wrap">
                    <button type="submit"><i class="fas fa-hdd"></i> Обновить</button>
                </div>
            </form>
        </div>
        <!--
        <div class="uploaded-images">
            <div class="upd-img" v-for="image in images">
                <div class="img-wrap">
                    <img :src="'/' + image" alt="Item_img">
                </div>
                <div class="wrap-img-btn">
                    <button @click="makeMain(image)"><i class="fas fa-images"></i></button>
                    <button @click="deleteImg(image)"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneImageOptions" v-on:vdropzone-success="refresh()"></vue-dropzone>
        <div class="uploaded-files">
            <div class="upd-files" v-for="file in files">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm160-14.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path></svg> {{ file }}
                <div class="wrap-file-btn">
                    <button @click="deleteFile(file)"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
        <vue-dropzone ref="myVueDropzone" id="dropzone-files" :options="dropzoneFileOptions" v-on:vdropzone-success="refresh()"></vue-dropzone>
        -->
    </div>
</template>

<script>
    export default {
        name: 'product-main-info',
        components: {
            vueDropzone: vue2Dropzone
        },
        props: {
            propId: String,
        },
        beforeCreate() {
            this.$http.get('/autocompleteTags')
            .then(function(response) {
                this.autocompleteItems = response.data;
            });
        },
        data() {
            return {
                progress: false,
                images: {},
                files: {},
                info: {},
                dropzoneImageOptions: {
                    url: '/uploadImg',
                    thumbnailWidth: 150,
                    dictDefaultMessage: 'Загрузить изображения',
                    dictCancelUpload: 'Отменить',
                    dictRemoveFile: 'Очистить',
                    maxFilesize: 10.0,
                    addRemoveLinks: true,
                    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
                    headers: { "X-CSRF-Token": document.head.querySelector('meta[name="csrf-token"]').content },
                    params: { id: this.propId },
                },
                dropzoneFileOptions: {
                    url: '/uploadFile',
                    thumbnailWidth: 150,
                    dictDefaultMessage: 'Загрузить документы',
                    dictCancelUpload: 'Отменить',
                    dictRemoveFile: 'Очистить',
                    maxFilesize: 30.0,
                    addRemoveLinks: true,
                    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg,.doc,.docx,.xls,.xlsx,.pdf",
                    headers: { "X-CSRF-Token": document.head.querySelector('meta[name="csrf-token"]').content },
                    params: { id: this.propId },
                },
                tag: '',
                tags: [],
                autocompleteItems: [],
            }
        },
        computed: {
            filteredItems() {
                return this.autocompleteItems.filter(i => new RegExp(this.tag, 'i').test(i.text));
            },
        },
        methods: {
            stickerChanged() {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/updateSticker', { id: this.propId, sticker_id: this.info.stickerSelected }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductInfo/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                        this.progress = false;
                    });
                });
            },
            updateMainInfo() {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/updateProduct', { id: this.propId, name: this.info.name, url: this.info.url, name: this.info.name, in_stock: this.info.in_stock, production: this.info.production, delivery: this.info.delivery, category_selected: this.info.categorySelected, brand_selected: this.info.brandSelected, description: this.info.description, short_description: this.info.short_description, meta_title: this.info.metaTitle, meta_description: this.info.metaDescription }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductInfo/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                        this.progress = false;
                    });
                });
            },
            update(newTags) {
                this.tags = newTags;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/AddTag', { id: this.propId, tags: this.tags }, {emulateJSON:true})
                .then();
            },
            addSku() {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/addSku', { id: this.propId }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductInfo/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                    });
                });
            },
            updateSku(id, sku, skuName, skuCode, oldPrice, price) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/updateSku', { sku: id, sku_sku: sku, sku_name: skuName, sku_code: skuCode, old_price: oldPrice, price: price }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductInfo/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                        this.progress = false;
                    });
                });
            },
            deleteSku(id) {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteSku', { id: id }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductInfo/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                    });
                });
            },
            makeMain(img) {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/makeMainImg', {id: this.propId, name: img }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductImages/' + this.propId)
                    .then(function(response) {
                        this.images = response.data;
                    });
                    this.$http.get('/getProductInfo/' + this.propId)
                    .then(function(response) {
                        this.info = response.data;
                        document.getElementById('main-img').src = this.info.image;
                    });
                });
            },
            deleteImg(img) {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteImg', {id: this.propId, name: img }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductImages/' + this.propId)
                    .then(function(response) {
                        this.images = response.data;
                    });
                });
            },
            deleteFile(file) {
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/deleteFile', {id: this.propId, name: file }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/getProductFiles/' + this.propId)
                    .then(function(response) {
                        this.files = response.data;
                    });
                });
            },
            refresh() {
                this.$http.get('/getProductImages/' + this.propId)
                .then(function(response) {
                    this.images = response.data;
                });
                this.$http.get('/getProductFiles/' + this.propId)
                .then(function(response) {
                    this.files = response.data;
                });
            }
        },
        created() {
            this.$http.get('/getProductImages/' + this.propId)
            .then(function(response) {
                this.images = response.data;
                var bLazy = new Blazy();
            });
            this.$http.get('/getProductFiles/' + this.propId)
            .then(function(response) {
                this.files = response.data;
            });
            this.$http.get('/getProductInfo/' + this.propId)
            .then(function(response) {
                this.info = response.data;
            });
            this.$http.get('/getProductTags/' + this.propId)
            .then(function(response) {
                this.tags = response.data;
            });
        }
    }
</script>
