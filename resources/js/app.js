require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

let Login = require('./components/LoginComponent.vue');
let Dashboard = require('./components/DashboardComponent.vue');


const routes = [
    { path: '/login', component: Login },
    { path: '/dashboard', component: Dashboard }
]

const router = new VueRouter({
    routes 
})

const app = new Vue({
    el: '#app',
    router,
    components: {
        Login,Dashboard
    }
});
