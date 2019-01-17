Nova.booting((Vue, router, store) => {
    Vue.component('index-formatted-number-field', require('./components/IndexField'))
    Vue.component('detail-formatted-number-field', require('./components/DetailField'))
    Vue.component('form-formatted-number-field', require('./components/FormField'))
})
