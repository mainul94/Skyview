<template>
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="#" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" v-model="user">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" v-model="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="remember" v-model="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="button" class="btn btn-primary btn-block btn-flat" @click="login">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
            </div>
            <!-- /.social-auth-links -->

            <a href="#">I forgot my password</a><br>
            <a href="#register" class="text-center">Register a new membership</a>

        </div>
        <!-- /.login-box-body -->
    </div>
</template>
<script>
    import store from '../../store'
    export default {
        data () {
            return {
                user: null,
                password: null,
                remember:0
            }
        },
        store,
        mounted() {
            console.log("Mounted")
        },
        methods: {
            login() {
                axios.post('/ajax-login', {
                    email: this.user,
                    password: this.password,
                    remember: this.remember
                })
                    .then(response => {
                        if (response.status === 200) {
                            localStorage.setItem('token', response.data.token);
                            this.$store.dispatch('bootinfo');
                            this.$router.replace(this.$route.query.redirect)
                        }
                    });
            }
        }
    }
</script>