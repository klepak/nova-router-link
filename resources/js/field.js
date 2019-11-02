Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-router-link', require('./components/IndexField'))
  Vue.component('detail-nova-router-link', require('./components/DetailField'))
})
