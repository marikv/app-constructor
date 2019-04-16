import axios from 'axios';

import AuthAPI from './auth';

const transport = axios.create({
	baseURL: '/',
});

export default {
	async checkPath(path) {
		try {
			await transport.head(path);
			return true;
		} catch (e) {
			return false;
		}
	},

	async getPath(path) {
		try {
			await transport.get(path);
			return true;
		} catch (e) {
			return false;
		}
	},

	auth: AuthAPI(transport),
};
