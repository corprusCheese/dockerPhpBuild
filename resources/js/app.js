require('./bootstrap');

import App from "./apps/App.vue";
import Vue from "vue";
import Vuelidate from 'vuelidate'

Vue.use(Vuelidate);
Vue.config.productionTip = false;
Vue.use(BootstrapVue);

new Vue({
    render: h => h(App),
}).$mount('#app')
