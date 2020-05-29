// action save
$( ".btn-act-submit" ).click(function(e) {
    e.preventDefault();
    zSave();
});

// date range
if ($().datepicker) {
    $(".input-daterange").datepicker({
      autoclose: true,
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