<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end jobcardsecondarydailyAdd">Add New JobCard
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="jobcardsecondarydaily_data" class="table table-bordered table-striped jobcardsecondarydaily_data" cellspacing="0" width="100%">
                        <thead class="dataheader_jobcardsecondarydaily table-dark">
                            <tr>
                                <td>WorkShop</td>
                                <td>Date</td>
                                <td>Item Name</td>
                                <td>Part Number</td>
                                <td>Unit</td>
                                <td>Quantity</td>
                                <td>Unit price</td>
                                <td>Total Money</td>
                                <td>Work Wages</td>
                                <td>Total</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_jobcardsecondarydaily">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card jobcardsecondarydailyaction" id="jobcardsecondarydailyaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end jobcardsecondarydailyClose">close
                    </button>
                    <h4 style="color: black;" id="card_jobcardsecondarydailytitle" class="card_jobcardsecondarydailytitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="Jcm2_ID" id="Jcm2_ID" class="form-control Jcm2_ID" hidden>
                                        <input type="text" name="Jcm2_FK" id="Jcm2_FK" class="form-control Jcm2_FK" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> WorkShop :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_WorkShopBrowser" class="form-control Jcm2_WorkShop" id="Jcm2_WorkShop" placeholder="Type to search...">
                                        <datalist id="Jcm2_WorkShopBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_Jcm2_WorkShop" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-auto col-form-label"> Date :
                                    </label>
                                    <div class="col-sm-auto">
                                        <input type="date" name="Jcm2_Date" id="Jcm2_Date" class="form-control Jcm2_Date" autocomplete="off">
                                        <span id="error_Jcm2_Date" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label"> Item Name :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_ItemNameBrowser" class="form-control Jcm2_ItemName" id="Jcm2_ItemName" placeholder="Type to search...">
                                        <datalist id="Jcm2_ItemNameBrowser">

                                        </datalist>
                                        <span id="error_Jcm2_ItemName" class="text-danger"></span>
                                    </div>


                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Part Number :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_PartNumberBrowser" class="form-control Jcm2_PartNumber" id="Jcm2_PartNumber" placeholder="Type to search...">
                                        <datalist id="Jcm2_PartNumberBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_PartNumber" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label"> Unit :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_UnitBrowser" class="form-control Jcm2_Unit" id="Jcm2_Unit" placeholder="Type to search...">
                                        <datalist id="Jcm2_UnitBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_Unit" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label">QY :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_Quantity" id="Jcm2_Quantity" class="form-control Jcm2_Quantity" autocomplete="off">
                                        <span id="error_Jcm2_Quantity" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Unit Price :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_UnitPrice" id="Jcm2_UnitPrice" class="form-control Jcm2_UnitPrice" autocomplete="off">
                                        <span id="error_Jcm2_UnitPrice" class="text-danger"></span>
                                    </div>


                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label">Item_Total :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_MoneyTotal" id="Jcm2_MoneyTotal" class="form-control Jcm2_MoneyTotal" autocomplete="off">
                                        <span id="error_Jcm2_MoneyTotal" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">WH :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_WH" id="Jcm2_WH" class="form-control Jcm2_WH" autocomplete="off">
                                        <span id="error_Jcm2_WH" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">CH :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_CH" id="Jcm2_CH" class="form-control Jcm2_CH" autocomplete="off">
                                        <span id="error_Jcm2_CH" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Total :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_Jc2Total" id="Jcm2_Jc2Total" class="form-control Jcm2_Jc2Total" autocomplete="off">
                                        <span id="error_Jcm2_Jc2Total" class="text-danger"></span>
                                    </div>


                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label">Side :
                                    </label>
                                    <div class="col-sm-2">
                                        <select name="Jcm2_Side" id="Jcm2_Side" class="col-sm-11 col-form-label form-select Jcm2_Side">
                                        </select>
                                        <span id="error_Jcm2_Side" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Number :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Jcm2_Number" id="Jcm2_Number" class="form-control Jcm2_Number" autocomplete="off">
                                        <span id="error_Jcm2_Number" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Brand :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Jcm2_BrandBrowser" class="form-control Jcm2_Brand" id="Jcm2_Brand" placeholder="Type to search...">
                                        <datalist id="Jcm2_BrandBrowser">
                                        </datalist>
                                        <span id="error_Jcm2_Brand" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Condition :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Condition" id="Jcm2_Condition" name="Jcm2_Condition" rows="3"></textarea>

                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Description :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Description" id="Jcm2_Description" name="Jcm2_Description" rows="3"></textarea>

                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Workers :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Worker" id="Jcm2_Worker" name="Jcm2_Worker" rows="3"></textarea>

                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Notes :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Jcm2_Notes" id="Jcm2_Notes" name="Jcm2_Notes" rows="3"></textarea>

                                    </div>
                                </div>






                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>

</div>



<?= $this->endSection() ?>

<?= $this->section('scripts') ?>


<script>
    jobcardsecondarydaily_fetch();
    jobcardsecondarydaily_filldata();
    $("#jobcardsecondarydailyaction").hide();
    $(document).on('click', '.jobcardsecondarydailyAdd', function() {
        var displaycard = document.getElementById("jobcardsecondarydailyaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_jobcardsecondarydailytitle").innerText = "Add New Item";
            displaycard.style.display = "block";
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_jobcardsecondarydailytitle").innerText = "";
            jobcardsecondarydaily_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_jobcardsecondarydailytitle").innerText = "Add New Item";

        }
    });
    $(document).on('click', '.jobcardsecondarydailyClose', function() {
        var displaycard = document.getElementById("jobcardsecondarydailyaction");
        jobcardsecondarydaily_cleardata();
        document.getElementById("card_jobcardsecondarydailytitle").innerText = "";
        displaycard.style.display = "none";


    });

    $(document).on('click', '.jobcardsecondarydailySave', function() {

        var Jcm2_ID = document.getElementById("Jcm2_ID").value;

        if (Jcm2_ID == '') {

            jobcardsecondarydaily_checkdata();

            if (error_Jcm2_WorkShop != '' || error_Jcm2_Date != '' || error_Jcm2_ItemName != '' || error_Jcm2_PartNumber != '' ||
                error_Jcm2_Unit != '' || error_Jcm2_Quantity != '' || error_Jcm2_UnitPrice != '' || error_Jcm2_MoneyTotal != '' ||
                error_Jcm2_WH != '' || error_Jcm2_CH != '' || error_Jcm2_Jc2Total != '' | error_Jcm2_Side != '' ||
                error_Jcm2_Number != '' || error_Jcm2_Brand != '' || error_Jcm2_Worker != '' ) {
                return false;
            } else {

                jobcardsecondarydaily_insertdata();
                jobcardsecondarydaily_cleardata();
            }
        } else {
            jobcardsecondarydaily_update();
            jobcardsecondarydaily_cleardata();
        }

    });

    $(document).on('click', '.jobcardsecondarydailyDelete', function() {
        var tabledata = $('#jobcardsecondarydaily_data').DataTable();
        var jobcardsecondarydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardsecondarydailyvalue = jobcardsecondarydaily[Object.keys(jobcardsecondarydaily)[0]];

        $.ajax({
            type: "POST",
            url: "<?= base_url('jobcardsecondarydaily-delete') ?>",
            data: {
                'getid': jobcardsecondarydailyvalue,
            },

            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#jobcardsecondarydaily_data').DataTable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.jobcardsecondarydailyEdit', function() {
        var tabledata = $('#jobcardsecondarydaily_data').DataTable();
        var jobcardsecondarydaily = tabledata.row($(this).closest('tr')).data();
        var jobcardsecondarydailyvalue = jobcardsecondarydaily[Object.keys(jobcardsecondarydaily)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('jobcardsecondarydaily-edit') ?>",
            data: {
                'getid': jobcardsecondarydailyvalue,
            },

            success: function(response) {

                $.each(response, function(key, value) {

                    $('#Jcm2_ID').val(value['Jcm2_ID']);
                    $('#Jcm2_FK').val(value['Jcm2_FK']);
                    $('#Jcm2_Date').val(value['Jcm2_Date']);
                    $('#Jcm2_ItemName').val(value['Jcm2_ItemName']);
                    $('#Jcm2_PartNumber').val(value['Jcm2_PartNumber']);
                    $('#Jcm2_Unit').val(value['Jcm2_Unit']);
                    var unitprice = number_format(value['Jcm2_UnitPrice'], 2, '.', ',');
                    $('#Jcm2_UnitPrice').val(unitprice);
                    var quantity = number_format(value['Jcm2_Quantity'], 2, '.', ',');
                    $('#Jcm2_Quantity').val(quantity);
                    var unitprice = number_format(value['Jcm2_UnitPrice'], 2, '.', ',');
                    var moneytotal = number_format(value['Jcm2_MoneyTotal'], 2, '.', ',');
                    $('#Jcm2_MoneyTotal').val(moneytotal);
                    var wh = number_format(value['Jcm2_WH'], 2, '.', ',');
                    $('#Jcm2_WH').val(wh);
                    var ch = number_format(value['Jcm2_CH'], 2, '.', ',');
                    $('#Jcm2_CH').val(ch);
                    var jc2total = number_format(value['Jcm2_Jc2Total'], 2, '.', ',');
                    $('#Jcm2_Jc2Total').val(jc2total);    

                    $('#Jcm2_Side').val(value['Jcm2_Side']);
                    $('#Jcm2_Number').val(value['Jcm2_Number']);
                    $('#Jcm2_Brand').val(value['Jcm2_Brand']);
                    $('#Jcm2_Condition').val(value['Jcm2_Condition']);
                    $('#Jcm2_Description').val(value['Jcm2_Description']);
                    $('#Jcm2_Worker').val(value['Jcm2_Worker']);
                    $('#Jcm2_Notes').val(value['Jcm2_Notes']);
                   

                    var displaycard = document.getElementById("jobcardsecondarydailyaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_jobcardsecondarydailytitle").innerText = "jobcard Data Edit";
                        displaycard.style.display = "block";
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_jobcardsecondarydailytitle').innerText = "";
                        document.getElementById('card_jobcardsecondarydailytitle').innerText = "jobcard Data Edit";
                        displaycard.style.display = "block";

                    }

                });

            }
        });
    });

    $(document).ready(function() {
        $('#Jcm2_Quantity').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_WH').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_CH').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_UnitPrice').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_MoneyTotal').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_Jc2Total').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
        $('#Jcm2_Number').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });




    });




    function jobcardsecondarydaily_cleardata() {
        $('#Jcm2_ID').val('');
        $('#Jcm2_WorkShop').val('');
        $('#Jcm2_Date').val('');
        $('#Jcm2_ItemName').val('');
        $('#Jcm2_PartNumber').val('');
        $('#Jcm2_Unit').val('');
        $('#Jcm2_Quantity').val('');
        $('#Jcm2_UnitPrice').val('');
        $('#Jcm2_MoneyTotal').val('');
        $('#Jcm2_WH').val('');
        $('#Jcm2_CH').val('');
        $('#Jcm2_Jc2Total').val('');
        $('#Jcm2_Side').val('');
        $('#Jcm2_Number').val('');
        $('#Jcm2_Brand').val('');
        $('#Jcm2_Condition').val('');
        $('#Jcm2_Description').val('');
        $('#Jcm2_Worker').val('');
        $('#Jcm2_Notes').val('');

    }

    function jobcardsecondarydaily_checkdata() {
        if ($.trim($('.Jcm2_WorkShop').val()).length == 0) {
            error_Jcm2_WorkShop = "plz, input the JobCard WorkShop";
            $('#error_Jcm2_WorkShop').text(error_Jcm2_WorkShop);
        } else {
            error_Jcm2_WorkShop = "";
            $('#error_Jcm2_WorkShop').text(error_Jcm2_WorkShop);
        }
        if ($.trim($('.Jcm2_Date').val()).length == 0) {
            error_Jcm2_Date = "plz, input the Date";
            $('#error_Jcm2_Date').text(error_Jcm2_Date);
        } else {
            error_Jcm2_Date = "";
            $('#error_Jcm2_Date').text(error_Jcm2_Date);
        }
        if ($.trim($('.Jcm2_ItemName').val()).length == 0) {
            error_Jcm2_ItemName = "plz, input the Item Name";
            $('#error_Jcm2_ItemName').text(error_Jcm2_ItemName);
        } else {
            error_Jcm2_ItemName = "";
            $('#error_Jcm2_ItemName').text(error_Jcm2_ItemName);
        }
        if ($.trim($('.Jcm2_PartNumber').val()).length == 0) {
            error_Jcm2_PartNumber = "plz, input the PartNumber";
            $('#error_Jcm2_PartNumber').text(error_Jcm2_PartNumber);
        } else {
            error_Jcm2_PartNumber = "";
            $('#error_Jcm2_PartNumber').text(error_Jcm2_PartNumber);
        }
        if ($.trim($('.Jcm2_Unit').val()).length == 0) {
            error_Jcm2_Unit = "plz, input the Unit";
            $('#error_Jcm2_Unit').text(error_Jcm2_Unit);
        } else {
            error_Jcm2_Unit = "";
            $('#error_Jcm2_Unit').text(error_Jcm2_Unit);
        }
        if ($.trim($('.Jcm2_Quantity').val()).length == 0) {
            error_Jcm2_Quantity = "plz, input the Quantity";
            $('#error_Jcm2_Quantity').text(error_Jcm2_Quantity);
        } else {
            error_Jcm2_Quantity = "";
            $('#error_Jcm2_Quantity').text(error_Jcm2_Quantity);
        }
        if ($.trim($('.Jcm2_UnitPrice').val()).length == 0) {
            error_Jcm2_UnitPrice = "plz, input the Unit Price";
            $('#error_Jcm2_UnitPrice').text(error_Jcm2_UnitPrice);
        } else {
            error_Jcm2_UnitPrice = "";
            $('#error_Jcm2_UnitPrice').text(error_Jcm2_UnitPrice);
        }
        if ($.trim($('.Jcm2_MoneyTotal').val()).length == 0) {
            error_Jcm2_MoneyTotal = "plz, input the MoneyTotal";
            $('#error_Jcm2_MoneyTotal').text(error_Jcm2_MoneyTotal);
        } else {
            error_Jcm2_MoneyTotal = "";
            $('#error_Jcm2_MoneyTotal').text(error_Jcm2_MoneyTotal);
        }
        if ($.trim($('.Jcm2_WH').val()).length == 0) {
            error_Jcm2_WH = "plz, input the Work Hour";
            $('#error_Jcm2_WH').text(error_Jcm2_WH);
        } else {
            error_Jcm2_WH = "";
            $('#error_Jcm2_WH').text(error_Jcm2_WH);
        }
        if ($.trim($('.Jcm2_CH').val()).length == 0) {
            error_Jcm2_CH = "plz, input the CH";
            $('#error_Jcm2_CH').text(error_Jcm2_CH);
        } else {
            error_Jcm2_CH = "";
            $('#error_Jcm2_CH').text(error_Jcm2_CH);
        }
        if ($.trim($('.Jcm2_Jc2Total').val()).length == 0) {
            error_Jcm2_Jc2Total = "plz, input the Work Total";
            $('#error_Jcm2_Jc2Total').text(error_Jcm2_Jc2Total);
        } else {
            error_Jcm2_Jc2Total = "";
            $('#error_Jcm2_Jc2Total').text(error_Jcm2_Jc2Total);
        }
        if ($.trim($('.Jcm2_Side').val()).length == 0) {
            error_Jcm2_Side = "plz, input the Side";
            $('#error_Jcm2_Side').text(error_Jcm2_Side);
        } else {
            error_Jcm2_Side = "";
            $('#error_Jcm2_Side').text(error_Jcm2_Side);
        }
        if ($.trim($('.Jcm2_Number').val()).length == 0) {
            error_Jcm2_Number = "plz, input the Number";
            $('#error_Jcm2_Number').text(error_Jcm2_Number);
        } else {
            error_Jcm2_Number = "";
            $('#error_Jcm2_Number').text(error_Jcm2_Number);
        }
        if ($.trim($('.Jcm2_Brand').val()).length == 0) {
            error_Jcm2_Brand = "plz, input the Brand";
            $('#error_Jcm2_Brand').text(error_Jcm2_Brand);
        } else {
            error_Jcm2_Brand = "";
            $('#error_Jcm2_Brand').text(error_Jcm2_Brand);
        }
        if ($.trim($('.Jcm2_Worker').val()).length == 0) {
            error_Jcm2_Worker = "plz, input the Worker";
            $('#error_Jcm2_Worker').text(error_Jcm2_Worker);
        } else {
            error_Jcm2_Worker = "";
            $('#error_Jcm2_Worker').text(error_Jcm2_Worker);
        }
       

    }

    function jobcardsecondarydaily_insertdata() {
        var data = {
            'Jcm2_FK': $('.Jcm2_FK').val(),
            'Jcm2_WorkShop': $('.Jcm2_WorkShop').val(),
            'Jcm2_Date': $('.Jcm2_Date').val(),
            'Jcm2_ItemName': $('.Jcm2_ItemName').val(),
            'Jcm2_PartNumber': $('.Jcm2_PartNumber').val(),
            'Jcm2_Unit': $('.Jcm2_Unit').val(),
            'Jcm2_Quantity': $('.Jcm2_Quantity').val(),
            'Jcm2_UnitPrice': $('.Jcm2_UnitPrice').val(),
            'Jcm2_MoneyTotal': $('.Jcm2_MoneyTotal').val(),
            'Jcm2_WH': $('.Jcm2_WH').val(),
            'Jcm2_CH': $('.Jcm2_CH').val(),
            'Jcm2_Jc2Total': $('.Jcm2_Jc2Total').val(),
            'Jcm2_Side': $('.Jcm2_Side').val(),
            'Jcm2_Number': $('.Jcm2_Number').val(),
            'Jcm2_Brand': $('.Jcm2_Brand').val(),
            'Jcm2_Condition': $('.Jcm2_Condition').val(),
            'Jcm2_Description': $('.Jcm2_Description').val(),
            'Jcm2_Worker': $('.Jcm2_Worker').val(),
            'Jcm2_Notes': $('.Jcm2_Notes').val(),



        };
        console.log(data);

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('jobcardsecondarydaily-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);

                var tabldata = $('#jobcardsecondarydaily_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }

    function jobcardsecondarydaily_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('jobcardsecondarydaily-filldata') ?>",
                success: function(response) {

                    $('#Jcm2_Side').append('<option selected>' + "Select Side" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#Jcm2_Side').append('<option value="' + valueOfElement.Si_Name + '">' + valueOfElement.Si_Name + '</option>');
                    });
                    // $('#Jcm2_WorkPlace').append('<option selected>' + "Select WorkPlace" + '</option>');
                    // $.each(response.getworkplace, function(indexInArray, valueOfElement) {
                    //     $('#Jcm2_WorkPlace').append('<option value="' + valueOfElement.Wsp_Name + '">' + valueOfElement.Wsp_Name + '</option>');
                    // });
                    // $('#Jcm2_TimeIn').append('<option selected>' + "Select Group" + '</option>');
                    // $.each(response.getgroupsales, function(indexInArray, valueOfElement) {
                    //     $('#Jcm2_TimeIn').append('<option value="' + valueOfElement.Gs_Name + '">' + valueOfElement.Gs_Name + '</option>');
                    // });

                    // $.each(response.getcompany, function(indexInArray, valueOfElement) {
                    //     $('#Jcm2_DateInbrowser').append('<option value="' + valueOfElement.Co_Name + '">');
                    // });

                    // $.each(response.getcity, function(indexInArray, valueOfElement) {
                    //     $('#Jcm2_citybrowser').append('<option value="' + valueOfElement.Ci_Name + '">');
                    // });

                }
            });

        });
    }

    function jobcardsecondarydaily_fetch() {

        $(document).ready(function() {

            var tabledata = $('#jobcardsecondarydaily_data').DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,

                "order": [],
                "ajax": {
                    type: "GET",
                    data:{'getid':$('#Jcm2_FK')},
                    url: "<?php echo base_url('jobcardsecondarydaily-fetch') ?>",


                },

                "columns": [{
                        "data": "Jcm2_WorkShop"
                    },
                    {
                        "data": "Jcm2_Date"
                    },
                    {
                        "data": "Jcm2_ItemName"
                    },
                    {
                        "data": "Jcm2_PartNumber"
                    },
                    {
                        "data": "Jcm2_Unit"
                    },
                    {
                        "data": "Jcm2_Quantity",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_UnitPrice",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_MoneyTotal",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_CH",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": "Jcm2_Jc2Total",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 jobcardsecondarydailyEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 jobcardsecondarydailyDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 jobcardsecondarydailyDisplay"><i class="bi bi-info"></i></button>' : data;
                        }
                    }



                ],
                "columnDefs": [{
                    "targets": [0, 10],
                    "orderable": false,
                }],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ]


            });




        });

    }

    function jobcardsecondarydaily_update() {
        var data = {
            'Jcm2_FK': $('.Jcm2_FK').val(),
            'Jcm2_WorkShop': $('.Jcm2_WorkShop').val(),
            'Jcm2_Date': $('.Jcm2_Date').val(),
            'Jcm2_ItemName': $('.Jcm2_ItemName').val(),
            'Jcm2_PartNumber': $('.Jcm2_PartNumber').val(),
            'Jcm2_Unit': $('.Jcm2_Unit').val(),
            'Jcm2_Quantity': $('.Jcm2_Quantity').val(),
            'Jcm2_UnitPrice': $('.Jcm2_UnitPrice').val(),
            'Jcm2_MoneyTotal': $('.Jcm2_MoneyTotal').val(),
            'Jcm2_WH': $('.Jcm2_WH').val(),
            'Jcm2_CH': $('.Jcm2_CH').val(),
            'Jcm2_Jc2Total': $('.Jcm2_Jc2Total').val(),
            'Jcm2_Side': $('.Jcm2_Side').val(),
            'Jcm2_Number': $('.Jcm2_Number').val(),
            'Jcm2_Brand': $('.Jcm2_Brand').val(),
            'Jcm2_Condition': $('.Jcm2_Condition').val(),
            'Jcm2_Description': $('.Jcm2_Description').val(),
            'Jcm2_Worker': $('.Jcm2_Worker').val(),
            'Jcm2_Notes': $('.Jcm2_Notes').val(),


        };     
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('jobcardsecondarydaily-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#jobcardsecondarydaily_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        decimals = decimals || 0;
        number = parseFloat(number);

        if (!decPoint || !thousandsSep) {
            decPoint = '.';
            thousandsSep = ',';
        }

        var roundedNumber = Math.round(Math.abs(number) * ('1e' + decimals)) + '';
        var numbersString = decimals ? roundedNumber.slice(0, decimals * -1) : roundedNumber;
        var decimalsString = decimals ? roundedNumber.slice(decimals * -1) : '';
        var formattedNumber = "";

        while (numbersString.length > 3) {
            formattedNumber += thousandsSep + numbersString.slice(-3)
            numbersString = numbersString.slice(0, -3);
        }

        return (number < 0 ? '-' : '') + numbersString + formattedNumber + (decimalsString ? (decPoint + decimalsString) : '');
    }
</script>


<?= $this->endSection() ?>