const apiUrl = $('#api_url').val();

var dataTable = $('#dataTable').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        "data": function(d){
            var start = d.start;
            var length = d.length;
            var search = d.search.value;

            d.offset = start;
            d.limit = length;
            d.search = search;

            return d;
        },
        "url": apiUrl + '/leave/kind_of_leave',
        "type": "GET",
        "dataFilter": function(data){
            var json = jQuery.parseJSON(data);

            json.recordsTotal = json.meta.total;
            json.recordsFiltered = json.meta.total;

            return JSON.stringify(json);
        }
    },
    sDom: '<"row view-filter"<"col-sm-12"<"float-right"l><"float-left"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>',
    columnDefs: [
        {"targets": [0], "data": "id"},
        {"targets": [1], "data": "code"},
        {"targets": [2], "data": "title"},
        {"targets": [3], "data": "amount"},
        {
            "targets": [4], 
            "data": null,
            "render": function(row){
                return `<button onclick="showModalEdit(${row.id})" type="button" class="btn btn-primary mb-1"><i class="simple-icon-note"></i> Edit</button>&nbsp;<button onclick="destroy(${row.id})" type="button" class="btn btn-danger mb-1"><i class="simple-icon-trash"></i> Delete</button>`
            }
        }
    ],
    language: {
        paginate: {
            previous: "<i class='simple-icon-arrow-left'></i>",
            next: "<i class='simple-icon-arrow-right'></i>"
          },
          search: "_INPUT_",
          searchPlaceholder: "Search...",
        lengthMenu: '<select class="form-control"><option>10</option><option>50</option><option>100</option></select>'
    },
    "searching": true,
    "ordering": false,
    "scrollY": false,
    "scrollX": false
});

function showModal(){
    $('.text-danger').html('');
    $('.is-invalid').removeClass('is-invalid');
    $('#modalAddNew').modal('show');
}

async function addNew(e){
    try{
        showLoader('#modalAddNew')
        e.preventDefault()
        await ajaxSendForm(apiUrl + '/leave/kind_of_leave', 'POST', '#formAddNew');
        $('#modalAddNew').modal('hide')
        blank();
        dataTable.ajax.reload();
    }catch(err){
        errorAJAX(err);
    }finally{
        removeLoader('#modalAddNew');
        zToast('Data Saved');
    }
}

async function blank(){
    $('#formAddNew').find('input[name=code]').val('');
    $('#formAddNew').find('input[name=title]').val('');
    $('#formAddNew').find('input[name=amount]').val('');
}

async function update(e){
    try{
        showLoader('#modalEdit')
        e.preventDefault()
        await ajaxSendForm($('#formEdit').attr('action'), 'PUT', '#formEdit');

        $('#modalEdit').modal('hide')
        dataTable.ajax.reload();
    }catch(err){
        errorAJAX(err);
    }finally{
        removeLoader('#modalEdit')
        zToast('Data Updated');
    }
}

async function renderDetail(id){
    try{
        showLoader('#modalEdit');
        var req = await ajaxRequest(apiUrl + '/leave/kind_of_leave/' + id);
        var data = req.data;

        $('#formEdit').find('input[name=code]').val(data.code)
        $('#formEdit').find('input[name=title]').val(data.title)
        $('#formEdit').find('input[name=amount]').val(data.amount)
    }catch(err){
        errorAJAX(err)
    }finally{
        removeLoader('#modalEdit');
    }
}

async function showModalEdit(id){
    $('.text-danger').html('');
    $('.is-invalid').removeClass('is-invalid');
    $('#modalEdit').modal('show');
    $('#formEdit').attr('action', apiUrl + '/leave/kind_of_leave/' + id);
    await renderDetail(id);
}

function destroy(id){
    let url = `${apiUrl}/leave/kind_of_leave/${id}`; 
    zDelete(url);
}
