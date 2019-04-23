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
        if ((typeof this.field.form_fields !== 'undefined') && (this.field.form_fields.length > 10) && (typeof this.field.user_answer !== 'undefined')) {
            let form_fields = [];
            let user_answer = {};
            try {
                form_fields = JSON.parse(this.field.form_fields);
                user_answer = JSON.parse(this.field.user_answer);
            } catch (err) { }
            registerFilledForm(form_fields, user_answer);
        }
        else {
            registerRenderForm(this.field.value);
        }
    },

}
</script>
