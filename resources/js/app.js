
require('./bootstrap');

import Vuetify from 'vuetify';

window.Vue = require('vue');
window.Vue.use(Vuetify);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('list-component',require('./components/ListComponent.vue').default);
Vue.component('contoh-vuetify',require('./components/ContohVuetify.vue').default);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify()
});
