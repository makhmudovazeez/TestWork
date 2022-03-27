<template>
    <thead>
        <tr>
            <template v-for="item in titles">
                <th>{{ item.title }}</th>
            </template>
        </tr>
    </thead>
</template>

<script>
    export default {
        props: {
            titles: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>