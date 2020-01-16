import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import Navbar from './views/Navbar'
import Login from './views/Login'
import Footer from './views/Footer'
import Faq from './views/Faq'
import Sign_Up from './views/Sign_Up'
import Profile from  './views/Profile'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/nav',
            name: 'nav',
            component: Navbar,
        },
        {
            path: '/home',
            name: 'home',
            component: Home,
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/footer',
            name: 'footer',
            component: Footer,
        },
        {
            path: '/faq',
            name: 'faq',
            component: Faq,
        },
        {
            path: '/signin',
            name: 'signin',
            component: Sign_Up,
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile,
        },


    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});