<template>
    <div>
        <div class="container">
            <form @submit.prevent="submit()">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" 
                    name="email" 
                    id="email" 
                    class="form-control" 
                    required
                    v-model="form.email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" 
                    name="password" 
                    id="password" 
                    class="form-control" 
                    required 
                    autocomplete="on"
                    v-model="form.password">
                </div>

                <btn-button class="btn-primary" type="submit">
                    Login
                </btn-button>

            </form>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex'
    export default {
        name: 'login',
        data(){
            return {
                form: {
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            ...mapActions({
                login : 'auth/login'
            }),
            async submit(){
                await this.login(this.form).then(() => {
                    this.$router.replace({
                        name: 'main'
                    })
                })
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>