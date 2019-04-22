
export default {
	state: {
		bg: '',
		completedSteps: [],
	},
	actions: {
	},
	mutations: {
		setBg(state, val) {
			state.bg = val;
		},
		addCompletedSteps(state, step) {
			if (state.completedSteps.indexOf(step) === -1) {
				state.completedSteps.push(step);
			}
		},
		removeCompletedSteps(state, step) {
			if (state.completedSteps.indexOf(step) !== -1) {
				state.completedSteps = state.completedSteps.filter(value => value !== step);
			}
		},
	},
	getters: {
		getBg(state) {
			return state.bg;
		},
		getCompletedSteps(state) {
			return state.completedSteps;
		},
	},
};
