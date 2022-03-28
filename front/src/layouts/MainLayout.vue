<template>
    <div class="hold-transitioin sidebar-mini layout-fixed">
        <div class="wrapper">
            <Navbar/>
            <Sidebar/>
            <div class="content-wrapper">
                <div class="content">
                    <router-view></router-view>
        
                </div>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>
import Footer from '@/layouts/components/Footer'
import Navbar from '@/layouts/components/Navbar'
import Sidebar from '@/layouts/components/Sidebar'
    export default {
        components: {
            Footer, Navbar ,Sidebar
        }
    }
</script>

<style lang="scss" scoped>

</style>