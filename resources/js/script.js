$(document).ready(function () {
  $('#klant-dropdown').select2({
    selectOnClose: true,
    templateSelection: (data) => {
      $(data.element).attr('data-custom-attribute', data.customValue);
      $.ajax({
        url: `/verrichting/${data.id}`,
        data: data.id,
        accept: 'application/json',
        success: (msg) => {
          $('#minuten').val(msg);
        },
      });
      return data.text;
    },
  });
});