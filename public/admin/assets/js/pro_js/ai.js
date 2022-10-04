ai_fetch();
ai_filldata();

ai_cartype_fetch();
ai_cartype_filldata();

ai_ItemPrice_fetch();

function ai_fetch() {
    $(document).ready(function() {
        var aistate = $('#Ai_Filter').val();
        var data = {
            'aistate': aistate,
        };

        var tabledata = $('#ai_data').DataTable({
            "responsive": true,
            // "processing": true,
            // "serverSide": true,
            "searching":false,
            "order": [],
            "ajax": {
                type: "GET",
                url: "ai-fetch",
                data:data,
                success: function(response) {
                    $('.dataheader_ai').html("");
                    $('.dataheader_ai').append(
                        '<tr><td>ID</td>'+
                        '<td>Car Number</td><td>Customers</td>' +
                        '<td>JobCardNumber</td>'+
                        '<td>Events </td></tr>'
                    );
                    $('.databody_ai').html("");
                    $.each(response, function(key, value) {
                        $('.databody_ai').append('<tr><td class="jobcardnumber">' +
                        value['Jcm_ID'] +
                        '</td><td>' + value['Jcm_CarNo'] +'</td>' +
                        '</td><td>' + value['Jcm_Customer'] +'</td>' +
                        '<td>' + value['Jcm_JcNumber'] +'</td><td>' +
                        '<a ' +
                        '" class="btn btn-success btn-sm m-1 jobcardmainlyEdit"><i class="bi bi-pen"></i>  Edit </a>' +    
                        '</td></tr>');
                    });
                }
            },
        });
    });
}

function ai_filldata()
{
    $.ajax({
        type: "GET",
        url: "ai-filldata",
        success: function (response) {
            $('#Ai_CustomerBrowser').empty();
            $.each(response.getcustomer, function(indexInArray, valueOfElement) {
                $('#Ai_CustomerBrowser').append('<option value="' + valueOfElement.Cu_Name + '">');
            });
        }
    });
}

$(document).on('change', '.Ai_Filter', function() {
    var tablerefresh = $('#ai_data').DataTable();
    tablerefresh.destroy();
    ai_fetch();
});

$(document).on('click','.jobcardmainlyEdit', function () {
    var table = $('#ai_data').DataTable();
    var jobcardnumber= $(this).closest('tr').find('.jobcardnumber').text();
    var data={
        'jobcardnumber':jobcardnumber
    };
    $.ajax({
        type: "GET",
        url: "ai-edit",
        data: data,
        success: function (response) {
           $.each(response.jobcardinfo, function (indx, value) { 
            $('#Ai_JcNumber').val(value.Jcm_JcNumber);
            $('#Ai_CarNo').val(value['Jcm_CarNo']);
            $('#Ai_Customer').val(value['Jcm_Customer']);
            $('#Ai_ID').val(value['Jcm_ID']);
           });
        }
    });
    $('#AiModel').modal('show');
});


$(document).on('click','.closemodal', function () {
    $('#AiModel').modal('toggle');
    var tabldata = $('#ai_data').DataTable();
    tabldata.ajax.reload();
});

$(document).on('click','.aiEditSave', function () {
    var data={
        'Jcm_ID':$('#Ai_ID').val(),
        'Jcm_Customer':$('#Ai_Customer').val(),
    };
    
    $.ajax({
        type: "POST",
        url: "ai-updatecustomer",
        data: data,
        success: function (response) {
            alertify.set('notifier', 'position', 'top-right');
            alertify.success(response.status);
            var tabldata = $('#ai_data').DataTable();
            tabldata.ajax.reload();
        }
    });
});


//Checking for Car Type....
function ai_cartype_fetch() {

    $(document).ready(function() {
        var aistate = $('#Ai_CarType_Filter').val();
        var data = {
            'aistate': aistate,
        };
        var tabledata = $('#Ai_CarType_data').DataTable({
            "responsive": true,
            // "processing": true,
            // "serverSide": true,
            "searching":false,
            "order": [],
            "ajax": {
                type: "GET",
                url: "ai-cartype-fetch",
                data:data,
                success: function(response) {
                    $('.dataheader_ai_cartype').html("");
                    $('.dataheader_ai_cartype').append(
                        '<tr><td>ID</td>'+
                        '<td>Car Number</td><td>CarType</td>' +
                        '<td>Model Name</td>'+
                        '<td>JobCardNumber</td>'+
                        '<td>Events </td></tr>'
                    );
                    $('.databody_ai_cartype').html("");
                    $.each(response, function(key, value) {
                        $('.databody_ai_cartype').append('<tr><td class="cartype_jobcarnumber">' +
                        value['Jcm_ID'] +
                        '</td><td>' + value['Jcm_CarNo'] +'</td>' +
                        '</td><td>' + value['Jcm_CarType'] +'</td>' +
                        '</td><td>' + value['Jcm_ModelName'] +'</td>' +
                        '<td>' + value['Jcm_JcNumber'] +'</td><td>' +
                        '<a ' +
                        '" class="btn btn-success btn-sm m-1 jobcardmainly_cartype_Edit"><i class="bi bi-pen"></i>  Edit </a>' +    
                        '</td></tr>');
                    });
                }
            },
        });
    });
}

function ai_cartype_filldata()
{
    $.ajax({
        type: "GET",
        url: "ai-cartype-filldata",
        success: function (response) {
            $('#Ai_CarType_CarTypeBrowser').empty();
            $.each(response.getcartype, function(indexInArray, valueOfElement) {
                $('#Ai_CarType_CarTypeBrowser').append('<option value="' + valueOfElement.Ct_Name + '">');
            });
            $('#Ai_CarType_ModelNameBrowser').empty();
            $.each(response.getcarname, function(indexInArray, valueOfElement) {
                $('#Ai_CarType_ModelNameBrowser').append('<option value="' + valueOfElement.Ci2_ModelName + '">');
            });
        }
    });
}

$(document).on('change', '.Ai_CarType_Filter', function() {
    var tablerefresh = $('#Ai_CarType_data').DataTable();
    tablerefresh.destroy();
    ai_cartype_fetch();
});

$(document).on('click','.jobcardmainly_cartype_Edit', function () {
    var table = $('#Ai_CarType_data').DataTable();
    var jobcardnumber= $(this).closest('tr').find('.cartype_jobcarnumber').text();
    var data={
        'jobcardnumber':jobcardnumber
    };

    $.ajax({
        type: "GET",
        url: "ai-cartype-edit",
        data: data,
        success: function (response) {
           $.each(response.cartype_jobcardinfo, function (indx, value) { 
            $('#Ai_CarType_JcNumber').val(value.Jcm_JcNumber);
            $('#Ai_CarType_CarNo').val(value['Jcm_CarNo']);
            $('#Ai_CarType_CarType').val(value['Jcm_CarType']);
            $('#Ai_CarType_ID').val(value['Jcm_ID']);
           });
        }
    });

    $('#Ai_CarType_Model').modal('show');
});

$(document).on('click','.CarType_closemodal', function () {
    $('#Ai_CarType_Model').modal('toggle');
    var tabldata = $('#Ai_CarType_data').DataTable();
    tabldata.ajax.reload();
});

$(document).on('click','.ai_cartype_Save', function () {
    var data={
        'Jcm_ID':$('#Ai_CarType_ID').val(),
        'Jcm_CarType':$('#Ai_CarType_CarType').val(),
        'Jcm_ModelName':$('#Ai_CarType_ModelName').val(),
    };
    
    $.ajax({
        type: "POST",
        url: "ai-cartype-updatecartype",
        data: data,
        success: function (response) {
            alertify.set('notifier', 'position', 'top-right');
            alertify.success(response.status);
            var tabldata = $('#Ai_CarType_data').DataTable();
            tabldata.ajax.reload();
        }
    });
});


//Checking for Item Price...
function ai_ItemPrice_fetch() {
    $(document).ready(function() {
        var aistate = $('#Ai_ItemPrice_Filter').val();
        var data = {
            'aistate': aistate,
        };

        var tabledata = $('#ai_ItemPrice_data').DataTable({
            "responsive": true,
            "searching":false,
            "order": [],
            "ajax": {
                type: "GET",
                url: "ai-itemprice-fetch",
                data:data,
                success: function(response) {
                    $('.dataheader_ai_ItemPrice').html("");
                    $('.dataheader_ai_ItemPrice').append(
                        '<tr>'+
                            '<td>ID</td>'+
                            '<td>Jobcard No</td>'+
                            '<td>Car No</td>'+
                            '<td>CarType</td>' +
                            '<td>Car Name</td>'+
                            '<td>Work Shop</td>'+
                            '<td>Item Name</td>'+
                            '<td>Part Number</td>'+
                            '<td>Unit Price</td>'+
                            '<td>Events</td>'+
                        '</tr>'
                    );
                    $('.databody_ai_ItemPrice').html("");
                    $.each(response, function(key, value) {
                        $('.databody_ai_ItemPrice').append(
                            '<tr>'+
                                '<td class="ItemPrice_ItemID">' +value['Jcm2_ID'] + '</td>' +
                                '<td class="JobcardNo">' + value['Jcm_JcNumber'] +'</td>' +
                                '<td>' + value['Jcm_CarNo'] +'</td>' +
                                '<td>' + value['Jcm_CarType'] +'</td>' +
                                '<td>' + value['Jcm_ModelName'] +'</td>' +
                                '<td>' + value['Jcm2_WorkShop'] +'</td>' +
                                '<td>' + value['Jcm2_ItemName'] +'</td>' +
                                '<td>' + value['Jcm2_PartNumber'] +'</td>' +
                                '<td>' + value['Jcm2_UnitPrice'] +'</td>' +
                                '<td> <a class="btn btn-success btn-sm m-1 jobcardmainly_ItemPrice_Edit"><i class="bi bi-pen"></i>  Edit </a> </td>' +    
                            '</tr>'
                        );
                    });
                }
            },
        });
    });
}

$(document).on('change', '.Ai_ItemPrice_Filter', function() {
    var tablerefresh = $('#ai_ItemPrice_data').DataTable();
    tablerefresh.destroy();
    ai_ItemPrice_fetch();
});

$(document).on('click','.jobcardmainly_ItemPrice_Edit', function () {
    var table = $('#ai_ItemPrice_data').DataTable();
    var Jcs2_Id= $(this).closest('tr').find('.ItemPrice_ItemID').text();
    var JobcardNo= $(this).closest('tr').find('.JobcardNo').text();
   
    var data={
        'Jcs2_Id':Jcs2_Id
    };

    $.ajax({
        type: "GET",
        url: "ai-itemprice-edit",
        data: data,
        success: function (response) {
           $.each(response.ItemPrice_GetItemData, function (indx, value) { 
                $('#Ai_ItemPrice_ID').val(value['Jcm2_ID']);
                $('#Ai_ItemPrice_JcNumber').val(JobcardNo);
                $('#Ai_ItemPrice_ItemName').val(value['Jcm2_ItemName']);
                $('#Ai_ItemPrice_PartNumber').val(value['Jcm2_PartNumber']);
                $('#Ai_ItemPrice_UnitPrice').val(value['Jcm2_UnitPrice']);
           });
        }
    });

    $('#AiModel_ItemPrice').modal('show');
});

$(document).on('click','.ItemPrice_closemodal', function () {
    $('#AiModel_ItemPrice').modal('toggle');
    var tabldata = $('#ai_ItemPrice_data').DataTable();
    tabldata.ajax.reload();
});

$(document).on('click','.ai_ItemPrice_EditSave', function () {
    var data={
        'Jcm2_ID':$('#Ai_ItemPrice_ID').val(),
        'Jcm2_UnitPrice':$('#Ai_ItemPrice_UnitPrice').val(),
    };
    
    $.ajax({
        type: "POST",
        url: "ai-itemprice-update",
        data: data,
        success: function (response) {
            alertify.set('notifier', 'position', 'top-right');
            alertify.success(response.status);
            var tabldata = $('#ai_ItemPrice_data').DataTable();
            tabldata.ajax.reload();
        }
    });
});