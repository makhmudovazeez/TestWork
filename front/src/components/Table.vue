<template>
    <div>
        <table class="table table-bordered table-striped">
            <Thead :titles="titles" />
            <Tbody :items="items"/>
        </table>
    </div>
</template>

<script>
import Tbody from './Tbody.vue'
import Thead from './Thead.vue'
    export default {
        components: { Tbody, Thead },
        props: {
            items: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                titles: [
                    {title: 'id'},
                    {title: 'name'}
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>