var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
let allstore_pj_code = [];
let fix_label = { "": "", "dg": "図面：DG", "sh": "工程表：SH" };
let SelectedFiles = [];
let defaultPJCode;

$(document).ready(function() {
  InitialLoadData();

  //if pjcode is multiple
  if ($("#ipdSelectBox").length) {
    var appendDiv = "";
    $.each(allstore_pj_code, function(ind, item) {
      appendDiv += "<option value=''></option>";
      appendDiv += "<option value='" + item["a_pj_code"] + "'>" + item["a_pj_name"] + "</option>";
    });
    $("#ipdSelectBox option").remove();
    $("#ipdSelectBox").append(appendDiv);
    $("#ipdSelectBox").select2({
      placeholder: "選択してください。"
    });
  }

  // Use the selected pjcode as default in change name select section(if pjcode is multiple)
  $(document).on('change', '#ipdSelectBox', function() {
    defaultPJCode = $(this).val();
    console.log(defaultPJCode);
  });

  // Use this pjcode as default in change name select section
  defaultPJCode = $("#hidIPDCode").val();


  $(document).on('change', '.txtChangeSelect', function() {
    var rowIndex = $(this).closest('tr').index();
    var parentTblId = $(this).parent().parent().parent().attr("id");
    console.log($(this).parent().parent().parent());
    console.log(rowIndex);
    MakeNewFileName(rowIndex, parentTblId);
  });

  $(document).on('change', '.txtInput', function() {
    var rowIndex = $(this).closest('tr').index();
    var parentTblId = $(this).parent().parent().parent().attr("id");
    MakeNewFileName(rowIndex, parentTblId);
  });

  var numOfCompany = parseInt($('#hidNumOfCompany').val());
  console.log(typeof numOfCompany)
  for (var i = 1; i <= numOfCompany; i++) {
    $('#file' + i).change(function() {
      var login_email = $("#login_email").val() ? $("#login_email").val() : "";
      if (login_email.includes('@')) {
        login_email = login_email.split('@')[0];
      }

      SelectedFiles = $(this)[0].files;
      console.log($(this).parent().parent().parent().next().children('table').attr('id'));
      var tblId = $(this).parent().parent().parent().next().children('table').attr('id');
      console.log(SelectedFiles);
      CreateRenameTable(SelectedFiles, tblId, login_email);


      //alert(JSON.stringify(selectedFiles[0].name));
    });
  }

  for (var i = 1; i <= numOfCompany; i++) {
    $("input:checkbox[class='folder_flag" + i + "']").click(function() {
      var className = $(this).attr('class');
      // var labelSelectBoxClassName = $(this).parent().parent().parent().prev().children('table').children().find($('.txtChangeSelect').eq(1));
      // console.log(labelSelectBoxClassName)
      CheckboxSetting(className, this);
    });
  }

  //Upload image to box folder
  for (var i = 1; i <= numOfCompany; i++) {
    $("#btnBoxUpload" + i).on('click', function() {
      if (defaultPJCode) {
        var company_name = $(this).parent().parent().children('h3').html();
        console.log(company_name)
        var formId = $(this).prev().attr('id');
        var tblId = $(this).parent().parent().next().children('table').attr('id');
        var chkBoxId = $(this).parent().parent().next().next().children().find($('input:checkbox')).attr('class');
        if (!CheckFolderFlag(chkBoxId)) {
          alert('アップロードするフォルダを選択してください。')
        }
        else {
          var folder_flag = $('input:checkbox[class=' + chkBoxId + ']:checked').val();
          console.log(folder_flag)
          UploadFilesToBox(company_name, formId, tblId, folder_flag);
        }
      }
      else {
        alert("プロジェクト名を選択してください。")
      }
    })
  }


});

function CheckboxSetting(className, thisObj) {
  $("input:checkbox[class='" + className + "']").not(thisObj).prop('checked', false);

}

function CreateRenameTable(SelectedFiles, tblId, login_email) {
  var appendDiv = "";
  var index = 0;
  appendDiv += "<tr>";
  appendDiv += "<th class='td-wd-1'>元ファイル名</th>";
  appendDiv += "<th class='td-wd-0'></th>";
  appendDiv += "<th class='td-wd-3'>プロジェクトコード</th>";
  appendDiv += "<th class='td-wd-1'>登録者イニシャル</th>";
  appendDiv += "<th class='td-wd-1'>自由記述欄</th>";
  appendDiv += "<th class='td-wd-2'>ラベル選択</th>";
  appendDiv += "<th class='td-wd-0'></th>";
  appendDiv += "<th class='td-wd-3'>新ファイル名</th>";
  appendDiv += "</tr>";

  $.each(SelectedFiles, function(key, file) {
    index++;
    appendDiv += "<tr>";
    appendDiv += "<td class='td-wd-1'><input type='text' id= '" + tblId + "_txtOrgName" + index + "' class='form-control input-sm' value='" + file.name + "' disabled/></td>";
    appendDiv += "<td class='td-wd-0 txt-bold'>⇒</td>";
    appendDiv += "<td class='td-wd-3'><select id='" + tblId + "_cmb" + index + "' class='cmb form-control input-sm txtChangeSelect'>";
    appendDiv += "<option></option>";
    $.each(allstore_pj_code, function(ind, item) {
      console.log(item)
      var selected = (item["a_pj_code"] == defaultPJCode) ? "selected" : "";
      appendDiv += "<option value='" + item["a_pj_code"] + "'" + selected + ">" + item["a_pj_name"] + "</option>";
    });
    appendDiv += "</select></td>";
    appendDiv += "<td class='td-wd-1'><input type='text' id='" + tblId + "_txtLoginEmail" + index + "' class='form-control input-sm txtInput' value='" + login_email + "'/></td>";
    appendDiv += "<td class='td-wd-1'><input type='text' id='" + tblId + "_txtCustom" + index + "' class='form-control input-sm txtInput' value=''/></td>";
    appendDiv += "<td class='td-wd-2'><select id='" + tblId + "_cmbFix" + index + "' class='cmbFix form-control input-sm txtChangeSelect'>";
    $.each(fix_label, function(k, fix_str) {
      appendDiv += "<option value='" + k + "'>" + fix_str + "</option>";
    });
    appendDiv += "</select></td>";
    appendDiv += "<td class='td-wd-0 txt-bold'>＝</td>";
    appendDiv += "<td class='td-wd-3'><input type='text' id='" + tblId + "_txtNewFileName" + index + "' class='form-control input-sm' value=''/></td>";
    appendDiv += "</tr>";

  });
  $("#" + tblId + " tr").remove();
  $("#" + tblId).append(appendDiv);

  $(".cmb").select2();
  $(".cmbFix").select2();
}


function MakeNewFileName(rowIdx, parentTblId) {
  var oldFileName = $("#" + parentTblId + "_txtOrgName" + rowIdx).val();
  var extension = "";
  if (oldFileName != undefined && oldFileName.includes('.')) {
    var temp = oldFileName.split('.');
    var lastIndex = temp.length - 1;
    extension = "." + temp[lastIndex];
  }
  var pj_code = $("#" + parentTblId + "_cmb" + rowIdx).val();
  var creator = $("#" + parentTblId + "_txtLoginEmail" + rowIdx).val();
  var custom_text = $("#" + parentTblId + "_txtCustom" + rowIdx).val();
  var label = $("#" + parentTblId + "_cmbFix" + rowIdx).val();
  var newFileName = pj_code + "_" + creator + "_" + custom_text + "_" + label + extension;
  $("#" + parentTblId + "_txtNewFileName" + rowIdx).val(newFileName);
}


function InitialLoadData() {
  LoadAllstoreProjectCode();
  var isBoxLogin = CheckBoxLogin();
  if (isBoxLogin) {

  }
}

function LoadAllstoreProjectCode() {
  $.ajax({
    url: "/iPD/allstore/getData",
    type: 'post',
    async: false,
    data: { _token: CSRF_TOKEN },
    success: function(data) {
      if (data != "" && data.length > 0) {
        allstore_pj_code = data;
      }
      console.log(allstore_pj_code)

    },
    error: function(err) {

      console.log(err);
    }
  });
}

function UploadFilesToBox(company_name, formId, tblId, folder_flag) {
  var pj_code = defaultPJCode;
  var isBoxLogin = CheckBoxLogin();
  if (!isBoxLogin) return;

  var old_new_filename_pair = RenameSelectedFiles(tblId);
  console.log(old_new_filename_pair);

  var form = $("#" + formId); // $("#template-form").serialize();
  var form_data = new FormData(form[0]);
  form_data.append("old_new_file_pair", JSON.stringify(old_new_filename_pair));
  form_data.append("folder_flag", folder_flag);
  form_data.append("pj_code", pj_code);
  form_data.append("company_name", company_name);
  console.log(form_data);

  ShowLoading();

  $.ajax({
    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    url: "/iPD/estimate/boxUpload",
    type: 'post',
    enctype: 'multipart/form-data',
    processData: false, // Important!
    contentType: false,
    cache: false,
    data: form_data,
    success: function(data) {
      HideLoading();
      console.log("==========uploaded=======");
      console.log(data);
      if (data.includes("success")) {
        $("#" + formId + "_msg").html("アップロード完了しました。");
      }
      // else if (data.includes("401failed")) {
      //   $("#box_login_warning").html("BOX TOKEN の有効期限が切れたため、失敗しました。BOXに再ログインしてください。")
      // }
      // else if (data.includes("409failed")) {
      //   $("#box_login_warning").html("アップロードファイルが既にあります。失敗しました。");
      // }
    },
    error: function(err) {
      HideLoading();
      console.log(err);
      alert("データロードに失敗しました。\n管理者に問い合わせてください。");
    }
  });
}

function RenameSelectedFiles(tblId) {
  var old_new_file_pair = {};
  $("#" + tblId + " tr").each(function() {
    var rowIndex = $(this).index();
    if (rowIndex == 0) return; //skip th row
    var old_fileName = $("#" + tblId + "_txtOrgName" + rowIndex).val();
    var new_fileName = $("#" + tblId + "_txtNewFileName" + rowIndex).val();
    new_fileName = (new_fileName == undefined || new_fileName == "") ? old_fileName : new_fileName;
    old_new_file_pair[old_fileName] = new_fileName;
  });

  return old_new_file_pair;
}

function CheckBoxLogin() {
  var access_token = $("#access_token").val();

  if (access_token == undefined) {
    $("#box_login_warning").html("Boxにログインされていないため、処理できません。");
    return false;
  }
  return true;
}

function CheckFolderFlag(chkBoxId) {
  var isChecked = $("." + chkBoxId).is(":checked");
  if (isChecked) {
    return true;
  }
  return false;
}


//Unused function
// function LoadReportImageFromBox() {
//     $.ajax({
//       url: "../report/getReportImage",
//       type: 'post',
//       async: false,
//       data: { _token: CSRF_TOKEN, message: "get_all_item" },
//       success: function(data) {
//         if (data["report_images"] != "" && data["report_images"] != undefined) {
//           CreatTableBody(data["report_images"]);
//         }

//       },
//       error: function(err) {

//         if (err.responseText.includes("401 Unauthorized")) {
//           $("#box_login_warning").html("BOX TOKEN の有効期限が切れたため、処理できません。BOXに再ログインしてください。")
//           return;
//         }
//         console.log(err);
//       }
//     });
//   }

// function CreatTableBody(data) {
//     var row = "";
//     var count = 0;
//     $.each(data, function(key, value) {
//       count++;
//       row += "<tr>";
//       row += "<td width='10%'>" + count + "</td>";
//       row += "<td>" + value + "</td>";
//       row += "</tr>";
//     });
//     if (row != "") {
//       $("#tblUpload tbody tr").remove();
//       $("#tblUpload tbody").append(row);

//     }
//   }

// function DeleteFile(fileName) {
//     //alert();
//     $.ajax({
//       url: "../report/uploadImages",
//       type: 'post',
//       data: { _token: CSRF_TOKEN, message: "delete_image", fileName: fileName },
//       success: function(data) {
//         //alert(JSON.stringify(data));
//         if (data.includes("success")) {
//           location.reload();
//         }

//       },
//       error: function(err) {
//         console.log(err);
//       }
//     });

//   }

// function TextSearch() {
//     $('#txtSearch').keyup(function() {
//       var textboxValue = $('#txtSearch').val();
//       $("#tblUpload tbody tr").each(function() {
//         var fileName = $(this).find("td:eq(1)").html();
//         if (!fileName.includes(textboxValue)) {
//           $(this).hide();
//         }
//         else {
//           $(this).show();
//         }
//       });

//     });
//   }
