require('../bootstrap');

import 'babel-polyfill'
import Vue from 'vue'
import Vuetify from 'vuetify'
import ru from './locale/ru.ts'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueAuth from '@websanova/vue-auth'
import VueMask from 'v-mask'
import store from './store'
import router from './routes.js'

import App from './views/Index.vue'

Vue.use(VueAxios, axios)
Vue.use(Vuetify, {
    theme: {
        primary: '#FFC107',
    },
    lang: {
        locales: { ru },
        current: 'ru'
    }
})
Vue.use(VueMask)
Vue.router = router

Vue.use(VueAuth, {
   auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
   http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
   router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
   refreshData: { enabled: true }
});

App.router = Vue.router

const app = new Vue({
    router: router,
    store: store,
    components: {
        App
    },
}).$mount('#app')
