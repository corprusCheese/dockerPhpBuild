import Game from "./apps/Game.vue";
import Vue from "vue";
import Vuelidate from 'vuelidate'
import BootstrapVue from "bootstrap-vue"

Vue.use(Vuelidate);
Vue.config.productionTip = false;
Vue.use(BootstrapVue);

new Vue({
    render: h => h(Game),
}).$mount('#game')
