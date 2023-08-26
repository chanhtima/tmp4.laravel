$(document).ready(function () {
    // init for product category
    initCategoryDatatable();
  
    if ($(".select2multiple").length > 0) {
      $(".select2multiple").select2({
        multiple: true,
        maximumSelectionLength: 4,
      });
    }
    // search_category_brand
    $("#tags").keyup(function(){
      let _token = $('meta[name="csrf-token"]').attr("content");
      $.ajax({
        url: "/admin/product/list/search_category_brand",
        type: "POST",
        data: {
          s: $(this).val(),
          _token: _token,
        },
        
        success: function (resp) {
          if (resp.success) {
            // $( "#tags" ).autocomplete({
            //   source: resp.res,
            //   minLength: 1,
            // })
          //   .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
          //     return $( "<li>" )
          //     .append( "<a>" + item.label + "<br>" + item.desc + "</a>" )
          //     .appendTo( ul );
          //  };
  
          $( "#tags" ).autocomplete({
            minLength: 0,
            source: resp.res,
            focus: function( event, ui ) {
               $( "#tags" ).val( ui.item.label );
                  return false;
            },
            select: function( event, ui ) {
               $( "#tags" ).val( ui.item.label );
               $( "#project-id" ).val( ui.item.value );
               $( "#project-description" ).html( ui.item.desc );
               return false;
            }
         })
     
         .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
            return $( "<li>" )
            .append( "<a>" + item.label + "<br>" + item.desc + "</a>" )
            .appendTo( ul );
         };
  
          }
        },
        
      });
    })
   
  });
  // =========================  category =========================== //
  initCategoryDatatable = function () {
    if ($("#categroy-datatable").length > 0) {
      oTable = $("#categroy-datatable").DataTable({
        processing: true,
        serverSide: true,
        stateSave: true,
        rowReorder: {
          dataSrc: "sequence",
        },
        columnDefs: [
          { orderable: true, className: "reorder", targets: 0 },
          { orderable: false, targets: "_all" },
        ],
        ajax: {
          url: "/admin/product/category/datatable_ajax",
        },
        columns: [
          { data: "sequence", orderable: true, searchable: false },
          { data: "image", orderable: false },
          { data: "name_th", orderable: true },
          { data: "name_en", orderable: true },
          { data: "updated_at", orderable: true },
          { data: "action", orderable: false, searchable: false },
        ],
        language: $_LANG.datatable,
      });
  
      oTable.on("row-reorder", function (e, diff, edit) {
        var moving = {};
        $.each(diff, function (key, row) {
          console.log(key + ": " + row + "position" + row.newPosition);
          var rowData = oTable.row(row.node).data();
          moving[rowData.id] = row.newData;
        });
        var sort_json = JSON.stringify(moving);
  
        let _token = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
          url: "/admin/product/category/set_re_order",
          type: "POST",
          data: {
            sort_json: sort_json,
            _token: _token,
          },
          success: function (resp) {
            if (resp.success) {
              setReloadDataTable();
            } else {
              mwz_noti("error", resp.msg);
            }
          },
        });
      });
    }
  };
  
  
  
  
  setUpdateCategoryStatus = function (category_id, status) {
    event.preventDefault();
    let _token = $('meta[name="csrf-token"]').attr("content");
  
    $.ajax({
      url: "/admin/product/category/set_status",
      type: "POST",
      data: {
        category_id: category_id,
        status: status,
        _token: _token,
      },
      success: function (resp) {
        if (resp.success) {
          mwz_noti("success", resp.msg);
          setReloadDataTable();
        } else {
          mwz_noti("error", resp.msg);
          setReloadDataTable();
        }
      },
    });
  };
  
  setDeleteCategory = function (category_id) {
    bootbox.confirm({
      message: $_LANG.confirm.delete,
      buttons: {
        confirm: {
          label: $_LANG.confirm.ok,
          className: "btn-success",
        },
        cancel: {
          label: $_LANG.confirm.cancel,
          className: "btn-danger",
        },
      },
      callback: function (result) {
        if (result) {
          event.preventDefault();
          let _token = $('meta[name="csrf-token"]').attr("content");
  
          $.ajax({
            url: "/admin/product/category/set_delete",
            type: "POST",
            data: {
              category_id: category_id,
              status: status,
              _token: _token,
            },
            success: function (resp) {
              if (resp.success) {
                mwz_noti("success", resp.msg);
                setReloadDataTable();
              } else {
                mwz_noti("error", resp.msg);
                setReloadDataTable();
              }
            },
          });
        }
      },
    });
  };
  
  setSaveCategory = function (frm) {
    event.preventDefault();
    tinyMCE.triggerSave();
  
    var frm_data = new FormData($("#category_frm")[0]);
  
    $.ajax({
      url: "/admin/product/category/save",
      type: "POST",
      contentType: false,
      data: frm_data,
      processData: false,
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      beforeSend: function (xhr) {
        var rules = {
          name_en: {
            required: true,
            maxlength: 500,
          },
          name_th: {
            required: true,
            maxlength: 500,
          },
        };
  
        var messages = $_LANG.validate.message;
  
        mwz_frm_validate($("#category_frm"), rules, messages);
        var check_valid = $("#category_frm").valid();
  
        if (check_valid) {
          return check_valid;
        } else {
          mwz_noti("error", $_LANG.validate.error);
          return check_valid;
        }
      },
      success: function (resp) {
        if (resp.success) {
          mwz_noti("success", resp.msg);
          window.location.href = "/admin/product/category";
        } else {
          mwz_noti("error", resp.msg);
        }
      },
    });
  };
  
  multiFileUploadCallBack = function (file, resp) {
    console.log('image success');
    console.log(resp);
    if (resp.success) {
      mwz_noti("success", resp.msg);
      window.location.href = "/admin/product/list";
    } else {
      mwz_noti("error", resp.msg);
    }
  }
  
  DeleteImage = function (image_id) {
    var id = $("#product_id").val();
    console.log($(id));
    bootbox.confirm({
      message: $_LANG.confirm.delete_resource,
      buttons: {
        confirm: {
          label: $_LANG.confirm.ok,
          className: "btn-success",
        },
        cancel: {
          label: $_LANG.confirm.cancel,
          className: "btn-danger",
        },
      },
      callback: function (result) {
        if (result) {
          let _token = $('meta[name="csrf-token"]').attr("content");
          $.ajax({
            url: "/admin/product/list/delete_image",
            type: "POST",
            data: {
              id: id,
              image_id: image_id,
              _token: _token,
            },
            success: function (resp) {
              if (resp.success) {
                mwz_noti("success", resp.msg);
                window.location.href = "/admin/product/list/edit/" + id;
              } else {
                mwz_noti("error", resp.msg);
              }
            },
          });
        }
      },
    });
  };

  setReloadDataTable = function () {
    $("#categroy-datatable")
      .DataTable()
      .ajax.reload(null, false);
  };