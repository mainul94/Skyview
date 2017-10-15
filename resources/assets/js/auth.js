/**
 This file created by mainul
 On 10/7/17  at 11:11 PM
 */
//auth.js
const AuthModule = {
    state: {
        auth: {
            islogedIn: false
        }
    },
    mutations: {
        login: (state, payload) =>{

        },
        logout: status => {

        }
    },
    getters: {
        islogedIn: state => {
            return state.auth.islogedIn
        }
    }
};