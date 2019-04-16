import './bootstrap';

import Vue from 'vue';
import Vuex from 'vuex';
import store from './store';

import Clients from './components/passport/Clients.vue';
import AuthorizedClients from './components/passport/AuthorizedClients.vue';
import PersonalAccessTokens from './components/passport/PersonalAccessTokens.vue';
import appConstructor from './components/app-constructor/appConstructor.vue';

window.Vue = Vue;

Vue.component('passport-clients', Clients);
Vue.component('passport-authorized-clients', AuthorizedClients);
Vue.component('passport-personal-access-tokens', PersonalAccessTokens);
Vue.component('app-constructor',	appConstructor);

Vue.use(Vuex);

new Vue({
	el: '#appDash',
	store,
	mounted() {
		this.$store.dispatch('getUserData');
	},
});
