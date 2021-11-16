$(document).ready(function () {
  $(document).on('input', '.number-separator', function (e) {
    if (/^[0-9.,]+$/.test($(this).val())) {
      $(this).val(
        parseFloat($(this).val().replace(/[^,\d]/g, '')).toString()
      );
    } else {
      $(this).val(
        $(this)
          .val()
          .substring(0, $(this).val().length - 1)
      );
    }
  });
});
