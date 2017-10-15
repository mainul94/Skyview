/**
 This file created by mainul
 On 10/7/17  at 11:12 PM
 */
//main.js -> the entry
import VueResource from 'vuex'
import sync from 'vuex'
import router from './router_config'
import auth from './auth'
import store from './store'
import App from './App.vue'

Vue.use(VueResource);
sync(store, router);

router.start(App, '#app');