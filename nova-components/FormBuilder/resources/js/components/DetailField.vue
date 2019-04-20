<template>
    <div class="w-1/4 py-4">
        <h4 class="font-normal text-80">{{ field.name }}</h4>
        <div id="render-container"></div>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    mounted() {
        registerRenderForm(this.field.value);
    },

}
</script>
