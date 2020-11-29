require('./bootstrap');

import App from "./apps/App.vue";
import UserSearch from "./apps/UserSearch.vue";
import Game from "./apps/Game.vue";
import Profile from "./apps/Profile.vue";
import Vue from "vue";
import Vuelidate from 'vuelidate'

Vue.use(Vuelidate);
Vue.config.productionTip = false;
//Vue.use(BootstrapVue);

new Vue({
    render: h => h(App),
}).$mount('#app')

new Vue({
    render: h => h(UserSearch),
}).$mount('#userSearch')

new Vue({
    render: h => h(Game),
}).$mount('#game')

new Vue({
    render: h => h(Profile),
}).$mount('#profile')
