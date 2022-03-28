<template>
    <div class="main-sidebar sidebar-dark-primary">
        <div class="container pt-3">


            <div class="logo">
                <img src="@/assets/logo.png" alt="">
            </div>


            <div class="mt-5">
                <ul class="nav-links">
                    <router-link class="nav-item text-muted" :to="'users'">
                        <i class="fas fa-users"></i>
                        Users
                    </router-link>
                </ul>
            </div>



        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="css" scoped>
    .main-sidebar{
        position: fixed;
        bottom: 0;
        top: 0;
        left: 0;
        width: 270px;
    }
    .logo img {
        max-width: 100px;
    }
    .sidebar-wrapper {
        padding-top: 20px;
    }
</style>