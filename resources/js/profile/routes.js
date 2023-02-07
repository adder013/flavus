import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'

import Register from './views/Register.vue'
import Login from './views/Login.vue'
import User from './views/User.vue'
import Orders from './views/Orders.vue'

Vue.use(VueRouter)
Vue.use(VueAxios, axios)

axios.defaults.baseURL = '/api';

const router = new VueRouter({
    mode: 'history',
    base: '/profile',
    linkActiveClass: 'active',
    root:  '/profile',
    routes: [{
        path: '/register',
        name: 'register',
        component: Register,
    },{
        path: '/login',
        name: 'login',
        component: Login,
    },{
        path: '/',
        name: 'user',
        component: User,
    },{
        path: '/orders',
        name: 'orders',
        component: Orders,
    }]
});
export default router
