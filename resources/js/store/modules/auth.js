import API from '../../api/index';

export default {
	state: {
		authorized: false,
	},
	actions: {
		loadUserData({ commit }) {
			API.auth.loadUserData().then((response) => {
				console.log(response);
				commit('setAuthorized', response.data.authorized);
			});
		},
	},
	mutations: {
		setAuthorized(state, val) {
			state.authorized = val;
		},
	},
	getters: {
		getAuthorized(state) {
			return state.authorized;
		},
	},
};
