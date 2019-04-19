<template>

<div>
    <default-field :field="field" :errors="errors">
        <template slot="field">
            <textarea
                    :id="field.name"
                    type="text"
                    class="w-full form-control form-input form-input-bordered frm-data"
                    style="display: none"
                    :class="errorClasses"
                    v-model="value"
            />
        </template>
    </default-field>

    <div id="build-wrap"></div>

</div>

</template>

<script>
    import { FormField } from 'laravel-nova'

    export default {
        mixins: [FormField],

        props: ['resourceName', 'resourceId', 'field'],

        mounted() {
            registerFormBuilder();
            Nova.$on('frm-fieldAdded', value => {
                this.value = value
            })
        },

        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setCustomValue(cv) {
                this.value = cv
            },

            setInitialValue() {
                this.value = this.field.value || ''
            },
        },
    }
</script>