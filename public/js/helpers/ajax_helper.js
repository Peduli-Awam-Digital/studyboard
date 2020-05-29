$.ajaxSetup({
	beforeSend: function (xhr) {
		if ($.cookie('token')) {
			xhr.setRequestHeader('Authorization', 'Bearer ' + $.cookie('token'));
		}
	}
});

function ajaxRequest(endpoint, methodAjax, dataSend){
	return new Promise((resolve, reject) => {
		$.ajax({
			url : endpoint,
			method : methodAjax,
			data : dataSend
		})
		.done((data) => {
			resolve(data);
		})
		.fail((xhr, status, error) => {
			reject({
				xhr : xhr,
				status : xhr.status,
				error : error,
				responseJSON: xhr.responseJSON
			});
		})
	})
}

function ajaxSendForm(endpoint, methodAjax, selector, xhr){
    return new Promise((resolve, reject) => {

    	if (methodAjax == 'PUT' || methodAjax == 'put') {
    		var paramAjax = {
		        url : endpoint,
		        method : methodAjax,
		        data : $(selector).serialize(),
		        dataType : 'json',
		        processData : false,
		        xhr: xhr
		    }
    	} else {
    		var paramAjax = {
		        url : endpoint,
		        method : methodAjax,
		        data : new FormData($(selector)[0]),
		        contentType : false,
		        processData : false,
		        xhr: xhr
		    }
    	}
    	 		
      	$.ajax(paramAjax)
      	.done((data) => {
        	resolve(data);
      	})
      	.fail((xhr, status, error) => {
        	reject({
				xhr : xhr,
				status : xhr.status,
				error : error,
				responseJSON : xhr.responseJSON
			});
      	})
    })
}

/*
 * paramObject example = 
 *	{
 *		selector: '#select', 
 *		url: '/api/list', 
 *		placeholder: 'Choose one', 
 *		minInput: 1,
 *		searchField: 'name',
 *		limit: 10,
 *		render: function(row){
 *			return `${row.name}`
 *		}
 *	}
 */
async function selectAjax(paramObject){

	var limit = paramObject.limit ? paramObject.limit : 10;

    $(paramObject.selector).select2({
        ajax: {
            url: paramObject.url,
            dataType: 'json',
            data: function (params) {

                var query = {
                    //search: params.term,
                    offset: (params.page * 10 - 10) || 0,
                    limit: limit,
                }

                if (paramObject.searchField) {
                	query[paramObject.searchField] = params.term;
                } else {
                	query['search'] = params.term;
                }

                return query;
            },
            processResults: function (results, params) {
                var data = results.data;
                var item = [];

                for (var i = 0; i < data.length; i++) {
                    item.push({
                        id: data[i].id,
                        text: paramObject.render(data[i]),
                        data: data[i]
                    });
                }

                var offset = (params.page * 10 - 10) || 0;

                if (results.meta.total <= limit) {
                    var more = false;
                } else {
                    var more = offset < results.meta.total;
                }

                return {
                    results: item,
                    pagination: {
                        more: more
                    }
                }
            }
        },
        placeholder: paramObject.placeholder ? paramObject.placeholder : 'Select Type',
        minimumInputLength: paramObject.minInput ? paramObject.minInput : 0
    });
}

$(document).on('click', '.loadAjax', async function(e) {

	e.preventDefault();

	var indx = $('.loadAjax').index(this);
	var loadAjaxHref = $('.loadAjax').eq(indx).attr('href');
	var loadAjaxResult = await ajaxRequest(loadAjaxHref);

	window.history.pushState('','null', loadAjaxHref);

	$('#ajaxWrapper').html(loadAjaxResult);
});

function showLoader(target) {
	$(target).append('<div class="wrapperCustomLoader1" style="margin:auto; top: 0px; bottom: 0px; left: 0px; right: 0px; width: 100%; height: 100%; position: absolute; z-index: 1000"><div style="position: absolute; width: 100%; height: 100%; background-color: white; opacity: 50%; z-index: 1001;"></div><div class="loaderCustom1">Loading...</div></div>');
}

function removeLoader(target) {
	$(target).find('.wrapperCustomLoader1').remove();
}

function validationError(dataObject){
	var identifierString = '.iferror-';
	var identifierMessage = '.ifmessage-';
	var instance = this;

	Object.keys(dataObject).forEach(function(key){
		var label = key;
		var message = '';

		for (var i = 0; i < dataObject[key].length; i++) {
			message += dataObject[key][i] + '<br>';			
		}

		//var message = dataObject[key];
		var classSelector = identifierString + label;
		var classErrorMessage = identifierMessage + label;
		var selectorError = instance.$(classSelector);
		var selectorMessage = instance.$(classErrorMessage);

		selectorError.addClass('is-invalid');
		selectorMessage.html(message);

		selectorError.change(function(){
			selectorError.removeClass('is-invalid');
			selectorMessage.html('');
		})

	})
}

function errorAJAX(err)
{
	if (! err.responseJSON) {
		console.log(err);
		var error_id = '';
	} else {
		var error_id = err.responseJSON.error;
	}

	var status = err.status;

	if (status == 400) {
		if (error_id == 'FORM_VALIDATION_ERROR') {
        	validationError(err.responseJSON.data);
		}

		if (error_id == 'GENERAL_MESSAGE') {
			var gMessageHtml = '';

			for (var i = 0; i < err.responseJSON.data.length; i++) {
				gMessageHtml += err.responseJSON.data[i] + "<br>";
			}

			customToast(gMessageHtml, 'warning');
		}
  	}

  	if (status == 401) {
  		if (error_id == 'UNAUTHENTICATED') {
    		document.location = '/';
  		}

  		if (error_id == 'UNAUTHENTICATED_WITH_NEXT') {
        	window.location = err.responseJSON.redirect;
  		}
  	}

  	if (status == 500) {
  		customToast('Terjadi kesalahan', 'warning');
  	}

  	if (status == 422) {
  		
  	}
}

function customToast(message, typeMessage){
	if (! typeMessage) {
		typeMessage = 'success';
	}

	$.notify({message: message}, {type: typeMessage, z_index: 1100});
}

// ZR

const Toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 3000,
	timerProgressBar: true,
	onOpen: (toast) => {
	  toast.addEventListener('mouseenter', Swal.stopTimer)
	  toast.addEventListener('mouseleave', Swal.resumeTimer)
	}
  })
  
function zToast(title,icon){
	if (! icon) {
		icon = 'success';
	}

	Toast.fire({
		icon: icon,
		title: title
	})
}

// alert before delete action
function zDelete(url)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#922c88',
        cancelButtonColor: '#c43d4b',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          ajaxRequest(url, 'DELETE');
          dataTable.ajax.reload()
          zToast('Success Delete!');
        }
      })
}

// date range
if ($().datepicker) {
	$(".input-daterange").datepicker({
	  autoclose: true,
	  format: 'yyyy-mm-dd',
	  templates: {
		leftArrow: '<i class="simple-icon-arrow-left"></i>',
		rightArrow: '<i class="simple-icon-arrow-right"></i>'
	  }
	});
  }
  
  // select2
  if ($().select2) {
	$(".select2-single").select2({
	  theme: "bootstrap",
	});
  }

  