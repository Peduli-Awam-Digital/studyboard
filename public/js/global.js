// const apiUrl = $('#api_url').val();




// alert before Create
function zCreate(link)
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure to create new data!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#922c88',
        cancelButtonColor: '#c43d4b',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.value) {
          // link to target page
          window.location.href = link;
        }
      })
}

// alert before submit
function zSave()
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure to input this data!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#922c88',
        cancelButtonColor: '#c43d4b',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Success!',
            'Your data saved.',
            'success'
          )
        }
      })
}

// alert before export
function zExport()
{
    Swal.fire({
        title: 'Are you sure?',
        text: "Are you sure to export this data!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#922c88',
        cancelButtonColor: '#c43d4b',
        confirmButtonText: 'Yes'
      }).then((result) => {
        if (result.value) {
          Swal.fire(
            'Success!',
            'Your data exported.',
            'success'
          )
        }
      })
}

// Toogle Active Side Menu
$(".scroll ul li").click(function() {
  $("li").removeClass("active");
  $(this).addClass("active");
});