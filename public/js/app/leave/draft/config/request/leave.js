const apiUrl = $('#api_url').val();
// action save
// $( ".btn-act-submit" ).click(function(e) {
//     e.preventDefault();
//     Swal.fire({
//       title: 'Are you sure?',
//       text: "Are you sure to input this data!",
//       icon: 'info',
//       showCancelButton: true,
//       confirmButtonColor: '#922c88',
//       cancelButtonColor: '#c43d4b',
//       confirmButtonText: 'Yes'
//     }).then((result) => {
//       if (result.value) {
//         Swal.fire(
//           'Success!',
//           'Your data saved.',
//           'success'
//         )
//       }
//     })
// });

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

// add new request leave
async function addNew(e){
  try{
      e.preventDefault()
      await ajaxSendForm(apiUrl + '/leave/leave', 'POST', '#formAddNew');
  }catch(err){
      errorAJAX(err);
  }finally{
      // finally
      console.log("success")
  }
}

// list kind of leave
async function renderSelectKindOfLeave(){
  var req = await ajaxRequest(apiUrl + '/leave/kind_of_leave');
  var data = req.data;
  var optHtml = '<option value="">- Choose Kind of Leave -</option>';

  for (var i = 0; i < data.length; i++) {
      var row = data[i];
      optHtml += `<option value="${row.id}">${row.title}</option>`;
  }

  $('.kind-of-leave-id').html(optHtml);
}

$(window).on('load', async function(){
  $('.text-danger').html('');
  $('.is-invalid').removeClass('is-invalid');
  renderSelectKindOfLeave();
})