<template>
    <div class="main-footer d-print-none border-top-none">
	<div class="d-flex justify-content-between">
        &copy; {{new Date().getFullYear()}}
        <div class="d-flex brand-text text-bold">
            <span class="mr-2"></span>
            <a target="_blank" class="text-decoration-none text-muted" href="email">azeezmakhmudov@gmail.com</a>
        </div>
    </div>
</div>
</template>

<script>
    export default {

    }
</script>

<style lang="css" scoped>
    .main-footer {
        position: fixed;
        bottom: 0;
        left: 270px;
        right: 0;
    }
</style>