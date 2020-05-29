const apiUrl = $('#api_url').val();
let formAdd = $('#formAdd');

var dataTable = $('#dataTable').DataTable({
  processing: true,
  serverSide: true,
  ajax: {
    "data": function (d) {
      var start = d.start;
      var length = d.length;
      var search = d.search.value;

      d.offset = start;
      d.limit = length;
      d.search = search;

      return d;
    },
    "url": apiUrl + '/business_trip',
    "type": "GET",
    "dataFilter": function(data) {
      var json = jQuery.parseJSON(data);

      json.recordsTotal = json.meta.total;
      json.recordsFiltered = json.meta.total;

      return JSON.stringify(json);
    }
  },
  sDom: '<"row view-filter"<"col-sm-12"<"float-right"l><"float-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
  columnDefs: [
    {"targets": [0], "data": "id"},
    {"targets": [1], "data": "destination_type_id"},
    {"targets": [2], "data": "purpose"},
    {"targets": [3], "data": "date_start"},
    {"targets": [4], "data": "date_end"},
    {"targets": [5], "data": "description"},
    {
      "targets": [6],
      "data": null,
      "render": function(row) {
        return `<button onclick="edit(${row.id})" type="button" class="btn btn-primary mb-1"><i class="simple-icon-note"></i> Edit</button>&nbsp;<button onclick="destroy(${row.id})" type="button" class="btn btn-danger mb-1"><i class="simple-icon-trash"></i> Delete</button>`
      }
    }
  ],
  language: {
    paginate: {
      previous: "<i class='simple-icon-array-left'></i>",
      next: "<i class='simple-icon-arrow-right'></i>"
    },
    search: "_INPUT_",
    searchPlaceHolder: "Search...",
    lengthMenu: '<select class="form-control"><option>10</option><option>50</option><option>100</option></select>'
  },
  "searching": true,
  "ordering": false,
  "scrollY": false,
  "scrollX": false
});

  // submit form
  async function formSubmit(e){
    e.preventDefault();
    Swal.fire({
      title: 'Are you sure?',
      text: "Are you sure to process this data!",
      icon: 'info',
      showCancelButton: true,
      confirmButtonColor: '#922c88',
      cancelButtonColor: '#c43d4b',
      confirmButtonText: 'Yes'
    }).then((result) => {
      if (result.value) {
        try{
          showLoader('#list');
          var type = $(formAdd).attr('data-type');
          if (type === 'POST') {
            ajaxSendForm(apiUrl + '/business_trip', 'POST', formAdd);
          } else if (type === 'PUT') {
            ajaxSendForm($(formAdd).attr('action'), 'PUT', formAdd);
          } else {
            return false;
          }
          dataTable.ajax.reload();
        } catch (err) {
          errorAJAX(err);
        } finally {
          removeLoader('#list');
          zToast('Data saved');
          showList();
        }
      }
    })
  }

  // empty form
  async function blank(){
    $(formAdd).find('select[name=destination_type_id]').val('');
    $(formAdd).find('input[name=purpose]').val('');
    $(formAdd).find('input[name=date_start]').val('');
    $(formAdd).find('input[name=date_end]').val('');
    $(formAdd).find('textarea[name=description]').val('');
  }

  // list kind of leave
  async function renderSelectDestinationType(){
    var req = await ajaxRequest(apiUrl + '/config/destination_type');
    var data = req.data;
    var optHtml = '<option value="">- Choose Destination Type -</option>';
  
    for (var i = 0; i < data.length; i++) {
        var row = data[i];
        optHtml += `<option value="${row.id}">${row.title}</option>`;
    }
    $('#destinationTypeId').html(optHtml);
  }

  async function renderDetail(id){
    try{
      showLoader('#form');
      var req = await ajaxRequest(apiUrl + '/business_trip/' + id);
      var data = req.data;
      $(formAdd).find('select[name=destination_type_id]').val(data.destination_type_id);
      $(formAdd).find('input[name=purpose]').val(data.purpose);
      $(formAdd).find('input[name=date_start]').val(data.date_start);
      $(formAdd).find('input[name=date_end]').val(data.date_end);
      $(formAdd).find('textarea[name=description]').val(data.description)
    } catch(err) {
      errorAJAX(err);
    } finally {
      removeLoader('#form');
    }
  }

  async function edit(id) {
    $('.text-danger').html('');
    $('.is-invalid').removeClass('is-invalid');
    showForm();
    $(formAdd).attr('data-type', 'PUT');
    $(formAdd).attr('action', apiUrl + '/business_trip/' + id);
    await renderDetail(id);
  }

  // list
  async function showList()
  {
    $('#form').hide();
    $('#list').show();
  }

  // form
  async function showForm()
  {
    $('#list').hide();
    $('#form').show();
  }

  // btn create
  $('.btn-act-create').click(function(){
    blank();
    $(formAdd).attr('data-type', 'POST');
    showForm();
  });

  // btn close
  $('.btn-act-close').click(function(e){
    e.preventDefault();
    showList();
  });

  // destroy data
  async function destroy(id) {
    let url = `${apiUrl}/business_trip/${id}`;
    zDelete(url);
  }

  $(window).on('load', async function(){
    $('.text-danger').html('');
    $('.is-invalid').removeClass('is-invalid');
    showList();
    renderSelectDestinationType();
  })