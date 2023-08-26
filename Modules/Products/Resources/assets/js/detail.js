$(document).ready(function () {
    if ($('.first_tab').length > 0) {
      $(".first_tab").champ();
    }
  });

  setSaveDetail = function setSave() {
    event.preventDefault();
    tinyMCE.triggerSave();
    var frm_data = new FormData($('#product_detail_frm')[0]);
    $.ajax({
      url: "/admin/product/detail/save",
      type: "POST",
      contentType: false,
      data: frm_data,
      processData: false,
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      beforeSend: function beforeSend(xhr) {
        if ($("#product_detail_frm").valid()) {
          return $("#product_detail_frm").valid();
        } else {
          mwz_noti('error', resp.msg);
          return $("#product_detail_frm").valid();
        }
      },
      success: function success(resp) {
        if (resp.success) {
          mwz_noti('success', resp.msg);
          window.location.href = '/admin/product/detail/';
        } else {
          mwz_noti('error', resp.msg);
          document.getElementById(resp.focus).focus();
        }
      }
    });
  };