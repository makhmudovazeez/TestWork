<template>
    <tbody>
        <tr v-for="item in items" :key="item.id">
            <th>{{ item.id }}</th>
            <th>{{ item.name }}</th>
        </tr>
    </tbody>
</template>

<script>
    export default {
        props: {
            items: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>