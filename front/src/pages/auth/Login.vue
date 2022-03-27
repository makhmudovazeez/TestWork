<template>
    <div>
        <div class="container">
            <form @submit.prevent="login">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" 
                    name="email" 
                    id="email" 
                    class="form-control" 
                    required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" 
                    name="password" 
                    id="password" 
                    class="form-control" 
                    required 
                    autocomplete="on">
                </div>

                <btn-button class="btn-primary">
                    Login
                </btn-button>

            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'login',

    }
</script>

<style lang="scss" scoped>

</style>