<template>
    <span>{{ field.value }}</span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],

    mounted() {
        try {
            let jsonData = JSON.parse(this.field.value);
            this.field.value = jsonData.length + ' form fields';
        } catch (err) {
            this.field.value = 'no form fields';
        }
    },

}
</script>
