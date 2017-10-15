import Vue from 'vue'
import VueRouter from 'vue-router'
import login from './components/auth/login.vue'
import Vuex from 'vuex'
import { sync } from 'vuex-router-sync'
import store from "./store";
Vue.use(VueRouter);
Vue.use(Vuex);
require('./bootstrap');

let Dashboard = {
    template: '<h1>Dashboard {{ $route.params.model }}</h1>'
};

let ModelList = {
    template: '<h1>module List</h1>'
};

let ModelView = {
    template: require('./components/passport/PersonalAccessTokens.vue')
};

let ModelEdit = {
    template: require('./components/passport/PersonalAccessTokens.vue')
};

const router = new VueRouter({
    data: ()=>{
        return {
            store
        }
    },
    mode:'history',
    base: '/admin/',
    routes: [
        {
            path: '/login',
            meta: {
                requiresAuth: false
            },
            watch: {
                '$route': 'store'
            },
            component: login
        },
        {
            path: '/',
            component: Dashboard,
            meta: {
                requiresAuth: true
            },
            children: [
                { path: '/:model', name: 'model', component: ModelList },

                // UserProfile will be rendered inside User's <router-view>
                // when /user/:id is matched
                { path: '/:model/:slug', component: ModelView },

                // UserPosts will be rendered inside User's <router-view>
                // when /user/:id/edit is matched
                { path: '/:model/:slug/edit', component: ModelEdit }
            ]
        }
    ]
});
export default {
    store
}

sync(store, router);
router.beforeEach((to, from, next) => {
    // this route requires auth, check if logged in
    if (to.matched.some(record => record.meta.requiresAuth)) {
        // if not, redirect to login page.
        if (!localStorage.getItem('token')) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else {
        next() // make sure to always call next()!
    }
})


const app = new Vue({ router }).$mount('#app');