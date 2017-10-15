<template>
    <div id="YG_App">
        <h1>Hello App!</h1>
        <router-view></router-view>
    </div>
</template>

<script>
    import store from './vuex/store'
    export default {
        store,
        vuex: {
            getters: {
                auth: ({ auth }) => auth.auth,
                route: ({ route }) => route
            }
        },
        created () {
            if (!this.auth && this.route.path !== '/user/login') {
                store.dispatch('router/ROUTE_CHANGED', {path: '/user/login'})
            }
        }
    }
</script>