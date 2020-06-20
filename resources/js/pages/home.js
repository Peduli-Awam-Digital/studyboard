import {selectAjax} from './../vendors/ajaxHelper';

(async function () {
	await selectAjax({
		selector: '.select2',
		url: '/api/login'
	})
}) ()