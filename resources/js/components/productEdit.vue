<template>
    <div class="product-props">
        <h2>Характеристики товара</h2>
        <div v-show="progress" class="update-message">
            Идет обновление...
        </div>
        <div class="properties-enabled">
            <div v-if="property.status" v-for="property in properties" class="block-wrap">
                <div class="props-block">
                    <form>
                        <input v-on:click="onDelete(property.id, property.optionSelected)" class="tgl tgl-flat" :id="property.id" type="checkbox" checked>
                        <label class="tgl-btn" :for="property.id"></label>
                        <div class="prop-name">{{ property.name }}:</div>
                        <select @change="changedValue(property.id, property.optionSelected, property.optionOriginal)" v-model="property.optionSelected">
                            <option v-for="value in property.values" v-bind:value="value.name" v-bind:selected="value.selected">{{ value.name }}</option>
                        </select>
                    </form>
                </div>
            </div>
            <div v-if="property.status" v-for="property in propertiesMultiple" class="block-wrap">
                <div class="props-block">
                    <form>
                        <input v-on:click="onMultipleDelete(property.id)" class="tgl tgl-flat" :id="property.id" type="checkbox" checked>
                        <label class="tgl-btn" :for="property.id"></label>
                        <div class="prop-name">{{ property.name }}:</div>
                        <label @change="changedMultipleValue(property.id, property.optionSelected)" v-for="value in property.values" ><input type="checkbox" v-bind:value="value.name" v-model="property.optionSelected" v-bind:checked="value.checked">{{ value.name }}</label>
                    </form>
                </div>
            </div>
            <div v-if="property.status" v-for="property in propertiesText" class="block-wrap">
                <div class="props-block">
                    <form>
                        <input v-on:click="onMultipleDelete(property.id)" class="tgl tgl-flat" :id="property.id" type="checkbox" checked>
                        <label class="tgl-btn" :for="property.id"></label>
                        <div class="prop-name">{{ property.name }}:</div>
                        <div class="prop-text" v-for="value in property.values">
                            <input v-if="value.checked" v-model="value.name" type="text" placeholder="Значение">
                            <button v-if="value.checked" v-on:click.prevent="onUpdateText(property.id, value.name)" type="submit"><svg aria-hidden="true" data-prefix="fas" data-icon="pen-nib" class="svg-inline--fa fa-pen-nib fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M136.6 138.79a64.003 64.003 0 0 0-43.31 41.35L0 460l14.69 14.69L164.8 324.58c-2.99-6.26-4.8-13.18-4.8-20.58 0-26.51 21.49-48 48-48s48 21.49 48 48-21.49 48-48 48c-7.4 0-14.32-1.81-20.58-4.8L37.31 497.31 52 512l279.86-93.29a64.003 64.003 0 0 0 41.35-43.31L416 224 288 96l-151.4 42.79zm361.34-64.62l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.75 18.75-49.15 0-67.91z"></path></svg></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <label for="more-prop">Больше характеристик</label>
        <input id="more-prop" type="checkbox" class="more-properties">
        <div class="properties-disabled">
            <div v-if="property.status != 1" v-for="property in properties" class="block-wrap">
                <div class="props-block-disabled">
                    <form>
                        <input v-on:click="onAdd(property.id)" class="tgl tgl-flat" :id="property.id" type="checkbox">
                        <label class="tgl-btn" :for="property.id"></label>
                        <div class="prop-name">{{ property.name }}:</div>
                        <select disabled>
                            <option v-for="value in property.values" v-bind:value="value.name">{{ value.name }}</option>
                        </select>
                    </form>
                </div>
            </div>
            <div v-if="property.status != 1" v-for="property in propertiesMultiple" class="block-wrap">
                <div class="props-block-disabled">
                    <form>
                        <input v-on:click="onAdd(property.id)" class="tgl tgl-flat" :id="property.id" type="checkbox">
                        <label class="tgl-btn" :for="property.id"></label>
                        <div class="prop-name">{{ property.name }}:</div>
                        <label @change="changedMultipleValue(property.id, property.optionSelected)" v-for="value in property.values" ><input type="checkbox" v-bind:value="value.name" v-model="property.optionSelected" disabled>{{ value.name }}</label>
                    </form>
                </div>
            </div>
            <div v-if="property.status != 1" v-for="property in propertiesText" class="block-wrap">
                <div class="props-block-disabled">
                    <form>
                        <input v-on:click="onAdd(property.id)" class="tgl tgl-flat" :id="property.id" type="checkbox">
                        <label class="tgl-btn" :for="property.id"></label>
                        <div class="prop-name">{{ property.name }}:</div>
                        <div class="prop-text">
                            <input type="text" placeholder="Значение" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'product-edit',
        props: {
            propId: String,
        },
        data() {
            return {
                progress: false,
                properties: {},
                propertiesMultiple: {},
                propertiesText: {},
            }
        },
        methods: {
            changedValue(name, value, prevId) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/vueChangeProp', {product_id: this.propId, option_id: name, option_value: value, last_id: prevId }, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/vueProductsEdit/' + this.propId)
                    .then(function(response) {
                        this.progress = false;
                        this.properties = response.data.options;
                        this.propertiesMultiple = response.data.multiple_options;
                        this.propertiesText = response.data.text_options;
                    });
                });
            },
            changedMultipleValue(name, value) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/vueChangeMultipleProp', {product_id: this.propId, option_id: name, option_value: value}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/vueProductsEdit/' + this.propId)
                    .then(function(response) {
                        this.progress = false;
                        this.properties = response.data.options;
                        this.propertiesMultiple = response.data.multiple_options;
                        this.propertiesText = response.data.text_options;
                    });
                });
            },
            onUpdateText(name, value) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/vueChangeTextProp', {product_id: this.propId, option_id: name, option_value: value}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/vueProductsEdit/' + this.propId)
                    .then(function(response) {
                        this.progress = false;
                        this.properties = response.data.options;
                        this.propertiesMultiple = response.data.multiple_options;
                        this.propertiesText = response.data.text_options;
                    });
                });
            },
            onDelete(optId, toDelete) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/vueDeleteProp', {product_id: this.propId, option_val: toDelete, prop_id: optId}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/vueProductsEdit/' + this.propId)
                    .then(function(response) {
                        this.progress = false;
                        this.properties = response.data.options;
                        this.propertiesMultiple = response.data.multiple_options;
                        this.propertiesText = response.data.text_options;
                    });
                });
            },
            onMultipleDelete(optId) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/vueMultipleDeleteProp', {product_id: this.propId, prop_id: optId}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/vueProductsEdit/' + this.propId)
                    .then(function(response) {
                        this.progress = false;
                        this.properties = response.data.options;
                        this.propertiesMultiple = response.data.multiple_options;
                        this.propertiesText = response.data.text_options;
                    });
                });
            },
            onAdd(toAdd) {
                this.progress = true;
                Vue.http.headers.common['X-CSRF-TOKEN'] = document.head.querySelector('meta[name="csrf-token"]').content;
                this.$http.post('/vueAddProductOption', {product_id: this.propId, option_id: toAdd}, {emulateJSON:true})
                .then(function() {
                    this.$http.get('/vueProductsEdit/' + this.propId)
                    .then(function(response) {
                        this.progress = false;
                        this.properties = response.data.options;
                        this.propertiesMultiple = response.data.multiple_options;
                        this.propertiesText = response.data.text_options;
                    });
                });
            },
        },
        created: function() {
            this.$http.get('/vueProductsEdit/' + this.propId)
            .then(function(response) {
                this.properties = response.data.options;
                this.propertiesMultiple = response.data.multiple_options;
                this.propertiesText = response.data.text_options;
            });
        },
        mounted() {

        }
    }
</script>
