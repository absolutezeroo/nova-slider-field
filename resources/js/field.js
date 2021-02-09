Nova.booting((Vue, router, store) => {
  Vue.component('index-slider-field', require('./components/IndexField'))
  Vue.component('detail-slider-field', require('./components/DetailField'))
  Vue.component('form-slider-field', require('./components/FormField'))
})
