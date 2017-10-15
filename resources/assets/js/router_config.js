/**
 This file created by mainul
 On 10/7/17  at 11:10 PM
 */
// router config
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);
import Login from './components/auth/login.vue'
import Layout from './components/Example.vue'

var router = new VueRouter({
    saveScrollPosition: true,
    history: true,
    base: '/admin/',
    routes:[
        {
            '/login': {
                component: Login
            },
            '/': {
                component: Layout,
                subRoutes: {
                    '/index': {
                        component: Index
                    }
                }
            },
            '*': {
                component: NotFound
            }
        }
    ]
});
let Index = {
    template: '<h1> Index</h1>'
};
let NotFound = {
    template: '<h1> NotFound</h1>'
};

router.map({

});

export default router