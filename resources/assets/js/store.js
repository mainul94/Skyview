/**
 This file created by mainul
 On 10/7/17  at 11:12 PM
 */
// store.js
import Vue from 'vue'
import Vuex from 'vuex'
Vue.use(Vuex);
Vue.config.debug = true;

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    state: {
        auth: !!localStorage.getItem('token')
    },
    getters: {
        islogedIn: state => {
            return state.auth
        }
    },
    actions: {
        bootinfo: context => {
            console.log('called')
            axios.get('hidden/bootinfo')
                .then(respond=>{
                    context.state.bootinfo = respond.data
                    console.log(context.state)
                });

        }
    },
    strict: debug
});