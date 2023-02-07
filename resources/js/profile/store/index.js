import Vue from 'vue';
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        // ERROR MESSAGES
        alert: false,
        alertType: 'info',
        alertMessage: '',
        // STATUS
        sync: false,
        success: false,
        // STORE
        orders: [],
        // CURRENT PAGE
        ordersCurrentPage: 1,
    },
    mutations: {
        ALERT_ON(state, payload) {
            state.alert = true;
            state.alertType = payload[0];
            state.alertMessage = payload[1];
        },
        ALERT_OFF(state) {
            state.alert = false;
        },
    },
})

export default store
