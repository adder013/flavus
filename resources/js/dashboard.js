require('./bootstrap');

window.Vue = require('vue');
window.VueResource = require('vue-resource');
window.VueGoodTable = require('vue-good-table');
window.vue2Dropzone = require('vue2-dropzone');
window.VueTagsInput = require('@johmun/vue-tags-input');
window.VueDraggable = require('vuedraggable');
window.CKEditor = require('@ckeditor/ckeditor5-vue2');

Vue.component('products', require('./components/products.vue').default);
Vue.component('products-table', require('./components/productsTable.vue').default);
Vue.component('products-table-draggable', require('./components/productsTableDraggable.vue').default);
Vue.component('brand-products-table-draggable', require('./components/brandProductsTableDraggable.vue').default);
Vue.component('categories', require('./components/categories.vue').default);
Vue.component('category', require('./components/category.vue').default);
Vue.component('brands', require('./components/brands.vue').default);
Vue.component('brand', require('./components/brand.vue').default);
Vue.component('products-categories', require('./components/categoryProducts.vue').default);
Vue.component('product-properties', require('./components/productProperties.vue').default);
Vue.component('properties-edit', require('./components/propertiesEdit.vue').default);
Vue.component('product-main-info', require('./components/productMainInfo.vue').default);
Vue.component('product-edit', require('./components/productEdit.vue').default);
Vue.component('product-accessories', require('./components/productAccessories.vue').default);
Vue.component('product-cross-selling', require('./components/productCrossSelling.vue').default);
Vue.component('product-up-selling', require('./components/productUpSelling.vue').default);
Vue.component('properties', require('./components/properties.vue').default);
Vue.component('group-block', require('./components/groupBlock.vue').default);
Vue.component('group-block-added', require('./components/groupBlockAdded.vue').default);
Vue.component('tags', require('./components/tags.vue').default);
Vue.component('calc-options', require('./components/calcOptions.vue').default);
Vue.component('module-menu', require('./components/moduleMenu.vue').default);
Vue.component('module-slider', require('./components/moduleSlider.vue').default);
Vue.component('specials', require('./components/specials.vue').default);
Vue.component('specials-connections', require('./components/specialsConnections.vue').default);
Vue.component('delivery', require('./components/delivery.vue').default);
Vue.component('module-news', require('./components/moduleNews.vue').default);
Vue.component('index-data', require('./components/index-data.vue').default);
Vue.component('product-tabs', require('./components/productTabs.vue').default);
Vue.component('users', require('./components/users.vue').default);
Vue.component('module-home-brands', require('./components/moduleHomeBrands.vue').default);
Vue.component('module-seo', require('./components/moduleSEO.vue').default);
Vue.component('module-redirect', require('./components/moduleRedirect.vue').default);
Vue.component('module-robots', require('./components/moduleRobots.vue').default);
Vue.component('module-metrics', require('./components/moduleMetrics.vue').default);
Vue.component('module-lockers', require('./components/moduleLockers.vue').default);
Vue.component('module-locker', require('./components/moduleLocker.vue').default);
Vue.component('module-brands-tags', require('./components/moduleBrandsTags.vue').default);
Vue.component('module-faq', require('./components/moduleFaq.vue').default);
Vue.component('module-wysiwyg', require('./components/moduleWysiwyg.vue').default);
Vue.component('module-supply', require('./components/moduleSupply.vue').default);

import Dashboard from './views/Dashboard.vue'
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)
Vue.use(CKEditor)

const app = new Vue({
    el: '#app',
    components: {
        Dashboard,
    }
});
