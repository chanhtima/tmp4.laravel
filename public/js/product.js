/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./Resources/assets/js/app.js":
/*!************************************!*\
  !*** ./Resources/assets/js/app.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  // init for product
  initDatatable();
  if ($(".select2multiple").length > 0) {
    $(".select2multiple").select2({
      multiple: true,
      maximumSelectionLength: 4
    });
  }
  // search_category_brand
  $("#tags").keyup(function () {
    var _token = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
      url: "/admin/product/list/search_category_brand",
      type: "POST",
      data: {
        s: $(this).val(),
        _token: _token
      },
      success: function success(resp) {
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

          $("#tags").autocomplete({
            minLength: 0,
            source: resp.res,
            focus: function focus(event, ui) {
              $("#tags").val(ui.item.label);
              return false;
            },
            select: function select(event, ui) {
              $("#tags").val(ui.item.label);
              $("#project-id").val(ui.item.value);
              $("#project-description").html(ui.item.desc);
              return false;
            }
          }).data("ui-autocomplete")._renderItem = function (ul, item) {
            return $("<li>").append("<a>" + item.label + "<br>" + item.desc + "</a>").appendTo(ul);
          };
        }
      }
    });
  });
});

// =========================  product =========================== //

initDatatable = function initDatatable() {
  if ($("#product-datatable").length > 0) {
    oTable = $("#product-datatable").DataTable({
      processing: true,
      serverSide: true,
      stateSave: true,
      rowReorder: {
        dataSrc: "sort"
      },
      columnDefs: [{
        orderable: true,
        className: "reorder",
        targets: 0
      }, {
        orderable: false,
        targets: "_all"
      }],
      ajax: {
        url: "/admin/product/list/datatable_ajax"
      },
      columns: [{
        data: "sort",
        orderable: true,
        searchable: false
      }, {
        data: "images",
        orderable: false
      }, {
        data: "name_th",
        orderable: true
      }, {
        data: "updated_at",
        orderable: true
      }, {
        data: "action",
        orderable: false,
        searchable: false
      }],
      language: $_LANG.datatable
    });
    oTable.on("row-reorder", function (e, diff, edit) {
      var moving = {};
      $.each(diff, function (key, row) {
        console.log(key + ": " + row + "position" + row.newPosition);
        var rowData = oTable.row(row.node).data();
        moving[rowData.id] = row.newData;
      });
      var sort_json = JSON.stringify(moving);
      var _token = $('meta[name="csrf-token"]').attr("content");
      $.ajax({
        url: "/admin/product/list/set_re_order",
        type: "POST",
        data: {
          sort_json: sort_json,
          _token: _token
        },
        success: function success(resp) {
          if (resp.success) {
            setReloadDataTable();
          } else {
            mwz_noti("error", resp.msg);
          }
        }
      });
    });
  }
};
setReloadDataTable = function setReloadDataTable() {
  $("#product-datatable").DataTable().ajax.reload(null, false);
};
setSort = function setSort(id, old_val, new_val) {
  if (new_val == "") {
    $(".input-sort-" + id).val(old_val);
  }
  if (old_val == new_val || new_val == "") {
    return false;
  }
  event.preventDefault();
  var _token = $('meta[name="csrf-token"]').attr("content");
  $.ajax({
    url: "/admin/product/list/set_sort",
    type: "POST",
    data: {
      id: id,
      old_val: old_val,
      new_val: new_val,
      _token: _token
    },
    success: function success(resp) {
      if (resp.success) {
        mwz_noti("success", resp.msg);
        window.location.reload();
      } else {
        mwz_noti("error", resp.msg);
        setReloadDataTable();
      }
    }
  });
};
setUpdateStatus = function setUpdateStatus(id, status) {
  event.preventDefault();
  var _token = $('meta[name="csrf-token"]').attr("content");
  $.ajax({
    url: "/admin/product/list/set_status",
    type: "POST",
    data: {
      id: id,
      status: status,
      _token: _token
    },
    success: function success(resp) {
      if (resp.success) {
        mwz_noti("success", resp.msg);
        setReloadDataTable();
      } else {
        mwz_noti("error", resp.msg);
        setReloadDataTable();
      }
    }
  });
};
setUpdateMenuFooter = function setUpdateMenuFooter(id, status) {
  event.preventDefault();
  var _token = $('meta[name="csrf-token"]').attr("content");
  $.ajax({
    url: "/admin/product/category/set_status_menu_footer",
    type: "POST",
    data: {
      id: id,
      status: status,
      _token: _token
    },
    success: function success(resp) {
      if (resp.success) {
        mwz_noti("success", resp.msg);
        setReloadDataTable();
      } else {
        mwz_noti("error", resp.msg);
        setReloadDataTable();
      }
    }
  });
};
setDelete = function setDelete(id) {
  bootbox.confirm({
    message: $_LANG.confirm["delete"],
    buttons: {
      confirm: {
        label: $_LANG.confirm.ok,
        className: "btn-success"
      },
      cancel: {
        label: $_LANG.confirm.cancel,
        className: "btn-danger"
      }
    },
    callback: function callback(result) {
      if (result) {
        event.preventDefault();
        var _token = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
          url: "/admin/product/list/set_delete",
          type: "POST",
          data: {
            id: id,
            status: status,
            _token: _token
          },
          success: function success(resp) {
            if (resp.success) {
              mwz_noti("success", resp.msg);
              setReloadDataTable();
            } else {
              mwz_noti("error", resp.msg);
              setReloadDataTable();
            }
          }
        });
      }
    }
  });
};
setSave = function setSave() {
  event.preventDefault();
  tinyMCE.triggerSave();
  var frm_data = new FormData($("#product_frm")[0]);
  $.ajax({
    url: "/admin/product/list/save",
    type: "POST",
    contentType: false,
    data: frm_data,
    processData: false,
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    },
    beforeSend: function beforeSend(xhr) {
      var rules = {
        name_en: {
          required: true,
          maxlength: 500
        },
        name_th: {
          required: true,
          maxlength: 500
        }
      };
      var messages = $_LANG.validate.message;
      mwz_frm_validate($("#product_frm"), rules, messages);
      var check_valid = $("#product_frm").valid();
      if (check_valid) {
        return check_valid;
      } else {
        mwz_noti("error", $_LANG.validate.error);
        return check_valid;
      }
    },
    success: function success(resp) {
      if (resp.success) {
        console.log(resp);
        mwz_noti("success", resp.msg);
        window.location.href = "/admin/product/list/";
        $("#product_id").val(resp.id);
        // mwz_multi_upload_process(MULTI_UPLOAD['image_multi'], resp);
      } else {
        mwz_noti("error", resp.msg);
      }
    }
  });
};

/***/ }),

/***/ "./Resources/assets/sass/app.scss":
/*!****************************************!*\
  !*** ./Resources/assets/sass/app.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************************!*\
  !*** multi ./Resources/assets/js/app.js ./Resources/assets/sass/app.scss ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\wynnseger.mwz\Modules\Products\Resources\assets\js\app.js */"./Resources/assets/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\wynnseger.mwz\Modules\Products\Resources\assets\sass\app.scss */"./Resources/assets/sass/app.scss");


/***/ })

/******/ });