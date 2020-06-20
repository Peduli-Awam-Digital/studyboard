import { ajaxRequest, errorAJAX } from './../vendors/ajaxHelper';

window.login = async (event) => {
	try {
		event.preventDefault();
		await ajaxRequest(`${apiUrl}/api/auth/login`);
	} catch (err) {
		errorAJAX(err);
	}
}