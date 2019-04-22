export default transport => ({
	async loadUserData() {
		return transport.get('/user/loadUserData');
	},

	async getUser() {
		const response = await transport.get('/auth/get_user');

		return response.data;
	},

	async login(login, password, remember) {
		const result = await transport.post('/auth/login', {
			login,
			pass: password,
			remember,
		});

		return result.data;
	},

	async logout() {
		return transport.get('/auth/logout');
	},

	async register(email, phone, password, passwordConfirm) {
		return transport.post('/auth/register', {
			email,
			phone,
			pass: password,
			passConfirm: passwordConfirm,
		});
	},

	async resendActivationCode(email) {
		return transport.post('/auth/reset_activate_code', {
			email,
		});
	},

	async findByEmail(email) {
		return transport.post('/auth/check_email', { email });
	},

	async resetPassword(email) {
		return transport.post('/auth/reset_password', { email });
	},

	async updatePassword(oldPassword, newPassword, newPasswordConfirm) {
		return transport.post('/auth/change_password', { oldPassword, newPassword, newPasswordConfirm });
	},

	async isUserRegistered(email) {
		return transport.post('/auth/check_is_registered', { email });
	},
});
