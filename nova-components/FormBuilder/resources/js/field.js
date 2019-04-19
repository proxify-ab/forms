Nova.booting((Vue, router, store) => {
    Vue.component('index-form-builder', require('./components/IndexField'))
    Vue.component('detail-form-builder', require('./components/DetailField'))
    Vue.component('form-form-builder', require('./components/FormField'))
})
