<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <!-- JobCard Mainly -->
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header text-white" style="background-color: #343A40;">

                    <button class="btn btn-primary btn-sm m-1 float-end orderoneAdd">Add New Order
                    </button>

                    <h4 style="color: white;"><?= $title ?> </h4>

                </div>
                <div class="card-body">
                    <div class="ms-12 row pt-1 pb-3">
                        <label for="" class="col-sm-auto col-form-label">Filter :
                        </label>
                        <div class="col-sm-3">
                            <select name="Or_Filter" id="Or_Filter" class="col-sm-11 col-form-label form-select Or_Filter">
                                <option value="Inactive_Order_Today">Inactive Today</option>
                                <option value="Active_Order_Today">Active Today</option>
                                <option value="Inactive_Order_Yesterday">Inactive Yesterday</option>
                                <option value="Active_Order_Yesterday">Active Yesterday</option>
                                <option value="Inactive_Order_Month">Inactive Month</option>
                                <option value="Active_Order_Month">Active Month</option>
                                <option value="Inactive_Order_LastMonth">Inactive LastMonth</option>
                                <option value="Active_Order_LastMonth">Active LastMonth</option>
                                <option value="Order_Finish_Today">Finish Today</option>
                                <option value="Order_Finish_Yesterday">Finish Yesterday</option>
                                <option value="Order_Finish_Month">Finish This Month</option>
                                <option value="Order_Finish_LastMonth">Finish Last Month</option>

                            </select>
                        </div>

                    </div>
                    <!-- <script>
                    console.log($('#Or_Filter option:selected').text());
                </script> -->

                    <table id="orderone_data" class="table table-bordered table-striped orderone_data" cellspacing="0" width="100%">
                        <thead class="dataheader_orderone table-dark">
                            <tr>
                                <td>Order_No</td>
                                <td>JC_No</td>
                                <td>Car No</td>
                                <td>Car Type</td>
                                <td>Customer</td>
                                <td>Total</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_orderone">

                        </tbody>
                    </table>
                    <div class="col-md-12" id="buttonHolder"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card orderoneaction" id="orderoneaction">
                <div class="card-header text-white" style="background-color: #343A40;">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end orderoneClose">close
                    </button>
                    <h4 style="color: white;" id="card_orderonetitle" class="card_orderonetitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="Or_ID" id="Or_ID" class="form-control Or_ID" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> jobcard Number :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Or_JcNumber" id="Or_JcNumber" class="form-control Or_JcNumber" autocomplete="off">
                                        <span id="error_Or_JcNumber" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label"> Car No :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or_CarNoBrowser" class="form-control Or_CarNo" id="Or_CarNo" placeholder="Type to search...">
                                        <datalist id="Or_CarNoBrowser">

                                        </datalist>
                                        <span id="error_Or_CarNo" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label"> Car Type :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or_CarTypeBrowser" class="form-control Or_CarType" id="Or_CarType" placeholder="Type to search...">
                                        <datalist id="Or_CarTypeBrowser">

                                        </datalist>
                                        <span id="error_Or_CarType" class="text-danger"></span>
                                    </div>


                                </div>



                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Customer :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or_CustomerBrowser" class="form-control Or_Customer" id="Or_Customer" placeholder="Type to search...">
                                        <datalist id="Or_CustomerBrowser">

                                        </datalist>
                                        <span id="error_Or_Customer" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Date Out :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="date" name="Or_DateOut" id="Or_DateOut" class="form-control Or_DateOut" autocomplete="off">
                                        <span id="error_Or_DateOut" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Packing Date :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="date" name="Or_PackingDate" id="Or_PackingDate" class="form-control Or_PackingDate" autocomplete="off" disabled>
                                        <span id="error_Or_PackingDate" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> State Order :
                                    </label>
                                    <div class="col-sm-2">
                                        <select name="Or_State" id="Or_State" class="col-sm-11 col-form-label form-select Or_State">
                                        </select>
                                        <span id="error_Or_State" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label"> Working Place :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or_WorkPlaceBrowser" class="form-control Or_WorkPlace" id="Or_WorkPlace" placeholder="Type to search...">
                                        <datalist id="Or_WorkPlaceBrowser">

                                        </datalist>
                                        <span id="error_Or_WorkPlace" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label"> Order Total :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Or_Total" id="Or_Total" class="form-control Or_Total" autocomplete="off" disabled>
                                        <span id="error_Or_Total" class="text-danger"></span>
                                    </div>

                                </div>

                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <p class="mb-0" style="font-weight: bold;">Engineer_S :</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="Or_Engineer_S" id="Or_Engineer_S" class="form-check-input" autocomplete="off">
                                        <span id="error_Or_Engineer_S" class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="mb-0" style="font-weight: bold;">StockKeeper_S :</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="Or_StockKeeper_S" id="Or_StockKeeper_S" class="form-check-input" autocomplete="off" disabled>
                                        <span id="error_Or_StockKeeper_S" class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="mb-0" style="font-weight: bold;">Supervisor_S :</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="Or_Supervisor_S" id="Or_Supervisor_S" class="form-check-input" autocomplete="off">
                                        <span id="error_Or_Supervisor_S" class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="mb-0" style="font-weight: bold;">Order_Finish :</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="Or_Finish" id="Or_Finish" class="form-check-input" autocomplete="off">
                                        <span id="error_Or_Finish" class="text-danger"></span>
                                    </div>
                                    <div class="col-sm-auto">
                                        <p class="mb-0" style="font-weight: bold;">Order_AddToJc :</p>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="Or_AddToJc" id="Or_AddToJc" class="form-check-input" autocomplete="off" disabled>
                                        <span id="error_Or_AddToJc" class="text-danger"></span>
                                    </div>
                                </div>



                                <hr>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-auto col-form-label">Notes :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Or_Notes" id="Or_Notes" name="Or_Notes" rows="3"></textarea>

                                    </div>
                                </div>
                                <hr>

                                <div class="ms-12 row pt-6">
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary form-control orderoneSave">Save Data</button>

                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn text-white form-control orderoneItem" style="background-color: #343A40;" disabled> Items</button>

                                    </div>
                                    <div class="col-sm-2">
                                        <button class="btn bg-gradient-yellow text-black form-control orderoneorder" disabled> Add to Jobcard</button>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JobCard Secondary.... -->
        <div class="col-md-12 mt-2">
            <div class="card ordertwocard" id="ordertwocard">
                <div class="card-header " style="background-color: #343A40;">

                    <button class="btn btn-primary btn-sm m-1 float-end ordertwoAdd">Add New Item
                    </button>
                    <h4 style="color: white;">Order Items </h4>

                </div>
                <div class="card-body">

                    <table id="ordertwo_data" class="table table-bordered table-striped ordertwo_data" cellspacing="0" width="100%">
                        <thead class="dataheader_ordertwo table-dark">
                            <tr>
                                <td>Item Name</td>
                                <td>Part Number</td>
                                <td>State</td>
                                <td>Unit</td>
                                <td>Quantity</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_ordertwo">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card ordertwoaction" id="ordertwoaction">
                <div class="card-header" style="background-color: #343A40;">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end ordertwoClose">close
                    </button>
                    <h4 style="color: white;" id="card_ordertwotitle" class="card_ordertwotitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="Or2_ID" id="Or2_ID" class="form-control Or2_ID" hidden>
                                        <input type="text" name="Or2_FK" id="Or2_FK" class="form-control Or2_FK" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Item Name :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or2_ItemNameBrowser" class="form-control Or2_ItemName" id="Or2_ItemName" placeholder="Type to search...">
                                        <datalist id="Or2_ItemNameBrowser">
                                        </datalist>
                                        <span id="error_Or2_ItemName" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Part Number :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or2_PartNumberBrowser" class="form-control Or2_PartNumber" id="Or2_PartNumber" placeholder="Type to search..." disabled>
                                        <datalist id="Or2_PartNumberBrowser">

                                        </datalist>
                                        <span id="error_Or2_PartNumber" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label"> Company :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or2_CompanyBrowser" class="form-control Or2_Company" id="Or2_Company" placeholder="Type to search..." disabled>
                                        <datalist id="Or2_CompanyBrowser">

                                        </datalist>
                                        <span id="error_Or2_Company" class="text-danger"></span>
                                    </div>

                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Brand :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or2_BrandBrowser" class="form-control Or2_Brand" id="Or2_Brand" placeholder="Type to search..." disabled>
                                        <datalist id="Or2_BrandBrowser">
                                        </datalist>
                                        <span id="error_Or2_Brand" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label">State :
                                    </label>
                                    <div class="col-sm-2">
                                        <select name="Or2_State" id="Or2_State" class="col-sm-11 col-form-label form-select Or2_State" disabled>
                                        </select>
                                        <span id="error_Or2_State" class="text-danger"></span>
                                    </div>




                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label"> Unit :
                                    </label>
                                    <div class="col-sm-2">
                                        <input list="Or2_UnitBrowser" class="form-control Or2_Unit" id="Or2_Unit" placeholder="Type to search...">
                                        <datalist id="Or2_UnitBrowser">
                                        </datalist>
                                        <span id="error_Or2_Unit" class="text-danger"></span>
                                    </div>

                                    <label for="" class="col-sm-1 col-form-label">Quantity :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Or2_Quantity" id="Or2_Quantity" class="form-control Or2_Quantity" autocomplete="off">
                                        <span id="error_Or2_Quantity" class="text-danger"></span>
                                    </div>
                                    <label for="" class="col-sm-1 col-form-label">Unit Price :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Or2_UnitPrice" id="Or2_UnitPrice" class="form-control Or2_UnitPrice" autocomplete="off" disabled>
                                        <span id="error_Or2_UnitPrice" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-1 col-form-label">Total Money :
                                    </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="Or2_MoneyTotal" id="Or2_MoneyTotal" class="form-control Or2_MoneyTotal" autocomplete="off" disabled>
                                        <span id="error_Or2_MoneyTotal" class="text-danger"></span>
                                    </div>
                                </div>


                                <hr>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-auto col-form-label">Notes :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 Or2_Notes" id="Or2_Notes" name="Or2_Notes" rows="3"></textarea>

                                    </div>
                                </div>
                                <hr>

                                <div class="ms-12 row pt-6">
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary form-control ordertwoSave">Save Data</button>

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
    // Order One....
    orderone_fetch();
    orderone_filldata();

    $("#orderoneaction").hide();
    $(document).on('click', '.orderoneAdd', function() {
        var displaycard = document.getElementById("orderoneaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_orderonetitle").innerText = "Add New jobcard";
            displaycard.style.display = "block";
            document.getElementById('card_orderonetitle').scrollIntoView();
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_orderonetitle").innerText = "";
            orderone_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_orderonetitle").innerText = "Add New jobcard";
            document.getElementById('card_orderonetitle').scrollIntoView();

        }
    });
    $(document).on('click', '.orderoneClose', function() {
        var displaycard = document.getElementById("orderoneaction");
        orderone_cleardata();
        document.getElementById("card_orderonetitle").innerText = "";
        $('.orderoneItem').prop('disabled', true);
        $('.orderoneorder').prop('disabled', true);
        displaycard.style.display = "none";

        var displaycard2 = document.getElementById("ordertwoaction");
        ordertwo_cleardata();
        document.getElementById("card_ordertwotitle").innerText = "";
        displaycard2.style.display = "none";

        var displaycard3 = document.getElementById("ordertwocard");
        var tabldata = $('#ordertwo_data').DataTable();
        tabldata.destroy();
        displaycard3.style.display = "none";




    });

    $(document).on('click', '.orderoneSave', function() {

        var Or_ID = document.getElementById("Or_ID").value;

        if (Or_ID == '') {

            orderone_checkdata();

            if (error_Or_JcNumber != '' || error_Or_CarNo != '' || error_Or_CarType != '' || error_Or_Customer != '' ||
                error_Or_DateOut != '') {

                return false;
            } else {

                orderone_getcustomerinfo();
            }
        } else {
            orderone_checkdata();
            if (error_Or_JcNumber != '' || error_Or_CarNo != '' || error_Or_CarType != '' || error_Or_Customer != '' ||
                error_Or_DateOut != '') {

                return false;
            } else {
                orderone_getcustomerinfo();
            }
        }

    });

    $(document).on('click', '.orderoneDelete', function() {
        var tabledata = $('#orderone_data').DataTable();
        var orderone = tabledata.row($(this).closest('tr')).data();
        var orderonevalue = orderone[Object.keys(orderone)[0]];

        $.ajax({
            type: "POST",
            url: "<?= base_url('orderone-delete') ?>",
            data: {
                'getid': orderonevalue,
            },

            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#orderone_data').DataTable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.orderoneEdit', function() {
        var tabledata = $('#orderone_data').DataTable();
        var orderone = tabledata.row($(this).closest('tr')).data();
        var orderonevalue = orderone[Object.keys(orderone)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('orderone-edit') ?>",
            data: {
                'getid': orderonevalue,
            },

            success: function(response) {

                $.each(response, function(key, value) {

                    $('#Or_ID').val(value['Or_ID']);
                    $('#Or_JcNumber').val(value['Or_JcNumber']);
                    $('#Or_CarNo').val(value['Or_CarNo']);
                    $('#Or_CarType').val(value['Or_CarType']);
                    $('#Or_Customer').val(value['Or_Customer']);
                    $('#Or_DateOut').val(value['Or_DateOut']);
                    $('#Or_PackingDate').val(value['Or_PackingDate']);
                    $('#Or_State').val(value['Or_State']);
                    $('#Or_WorkPlace').val(value['Or_WorkPlace']);
                    $('#Or_Total').val(value['Or_Total']);
                    $('#Or_Notes').val(value.Or_Notes);
                    $('#Or_Engineer_S').prop('checked', value.Or_Engineer_S);
                    $('#Or_StockKeeper_S').prop('checked', value.Or_StockKeeper_S);
                    $('#Or_Supervisor_S').prop('checked', value.Or_Supervisor_S);
                    $('#Or_Finish').prop('checked', value.Or_Finish);
                    $('#Or_AddToJc').prop('checked', value.Or_AddToJc);

                    var displaycard = document.getElementById("orderoneaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_orderonetitle").innerText = "Order Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_orderonetitle').scrollIntoView();
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_orderonetitle').innerText = "";
                        document.getElementById('card_orderonetitle').innerText = "Order Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_orderonetitle').scrollIntoView();

                    }
                    $('#Or2_FK').val(value['Or_ID']);

                    $('.orderoneItem').prop('disabled', false);
                    

                    if ($('#Or_Engineer_S').is(":checked") && $('#Or_Supervisor_S').is(":checked") && $('#Or_StockKeeper_S').is(":checked") &&  !$('#Or_AddToJc').is(":checked")) {
                        $('#Or_Finish').prop('disabled', false);
                    } else {
                        $('#Or_Finish').prop('disabled', true);
                    }



                });

            }
        });

        var displaycard = document.getElementById("ordertwocard");
        if (displaycard.style.display == "block") {
            var tabldata = $('#ordertwo_data').DataTable();
            tabldata.destroy();
            displaycard.style.display = "none";
        }

        var displaycard2 = document.getElementById("ordertwoaction");
        if (displaycard2.style.display == "block") {
            var tabldata = $('#ordertwo_data').DataTable();
            tabldata.destroy();
            displaycard2.style.display = "none";
        }



    });

    $(document).ready(function() {
        $('#Or_Finish').change(function() {
            if ($(this).is(":checked")) {
                $('.orderoneorder').prop('disabled', false);
            } else {
                $('.orderoneorder').prop('disabled', true);
            }

        });
    });
    $(document).ready(function() {
       if($('#Or_AddToJc').is(":checked"))
       {
        // $('.orderoneorder').prop('disabled', true); 
        $('#Or_Finish').prop('disabled',true); 
       }
    });


    $(document).on('click', '.orderoneorder', function() {
        $('#OrderModel').show();
    });


    $(document).ready(function() {
        $('#Or_Customer').keyup(function() {
            var customername = $('#Or_Customer').val();
            var data = {
                'getname': customername,
            };
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('orderone-getcustomer') ?>",
                data: data,
                success: function(response) {
                    $.each(response.getcustomerinfo, function(indexInArray, valueOfElement) {

                        if ((valueOfElement.Cu_State) == 'Inactive') {
                            $('#Or_Customer').css({
                                'background-color': '#ff5252'
                            });
                        } else {
                            $('#Or_Customer').css({
                                'background-color': 'white'
                            });

                        }

                    });
                }
            });

        });
    });

    $(document).ready(function() {
        $('#Or_JcNumber').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });
    });


    $(document).on('change', '.Or_Filter', function() {

        var tablerefresh = $('#orderone_data').DataTable();
        tablerefresh.destroy();
        orderone_fetch();


    });

    function orderone_cleardata() {
        $('#Or_ID').val('');
        $('#Or_JcNumber').val('');
        $('#Or_CarNo').val('');
        $('#Or_CarType').val('');
        $('#Or_Customer').val('');
        $('#Or_State').val('');
        $('#Or_WorkPlace').val('');
        $('#Or_DateOut').val('');
        $('#Or_Notes').val('');
        $('#Or_PackingDate').val('');
        $('#Or_Engineer_S').prop('checked', false);
        $('#Or_StockKeeper_S').prop('checked', false);
        $('#Or_Supervisor_S').prop('checked', false);
        $('#Or_Finish').prop('checked', false);
        $('#Or_AddToJc').prop('checked', false);

    }

    function orderone_checkdata() {
        if ($.trim($('.Or_JcNumber').val()).length == 0) {
            error_Or_JcNumber = "plz, input the JobCard Number";
            $('#error_Or_JcNumber').text(error_Or_JcNumber);
        } else {
            error_Or_JcNumber = "";
            $('#error_Or_JcNumber').text(error_Or_JcNumber);
        }
        if ($.trim($('.Or_CarNo').val()).length == 0) {
            error_Or_CarNo = "plz, input the CarNo";
            $('#error_Or_CarNo').text(error_Or_CarNo);
        } else {
            error_Or_CarNo = "";
            $('#error_Or_CarNo').text(error_Or_CarNo);
        }
        if ($.trim($('.Or_CarType').val()).length == 0) {
            error_Or_CarType = "plz, input the Car Type";
            $('#error_Or_CarType').text(error_Or_CarType);
        } else {
            error_Or_CarType = "";
            $('#error_Or_CarType').text(error_Or_CarType);
        }
        if ($.trim($('.Or_Customer').val()).length == 0 || $.trim($('.Or_Customer').val()) == 'Select Customer') {
            error_Or_Customer = "plz, input the Customer";
            $('#error_Or_Customer').text(error_Or_Customer);
        } else {
            error_Or_Customer = "";
            $('#error_Or_Customer').text(error_Or_Customer);
        }
        if ($.trim($('.Or_DateOut').val()).length == 0) {
            error_Or_DateOut = "plz, input the DateOut";
            $('#error_Or_DateOut').text(error_Or_DateOut);
        } else {
            error_Or_DateOut = "";
            $('#error_Or_DateOut').text(error_Or_DateOut);
        }
        if ($.trim($('.Or_State').val()).length == 0 || $.trim($('.Or_State').val()) == 'Select State') {
            error_Or_State = "plz, input the State";
            $('#error_Or_State').text(error_Or_State);
        } else {
            error_Or_State = "";
            $('#error_Or_State').text(error_Or_State);
        }



    }

    function orderone_insertdata() {
        var data = {
            'Or_JcNumber': $('.Or_JcNumber').val(),
            'Or_CarNo': $('.Or_CarNo').val(),
            'Or_CarType': $('.Or_CarType').val(),
            'Or_Customer': $('.Or_Customer').val(),
            'Or_DateOut': $('.Or_DateOut').val(),
            'Or_State': $('.Or_State').val(),
            'Or_WorkPlace': $('.Or_WorkPlace').val(),
            'Or_Notes': $('.Or_Notes').val(),
            'Or_Engineer_S': (function() {
                if ($("#Or_Engineer_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Supervisor_S': (function() {
                if ($("#Or_Supervisor_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Finish': (function() {
                if ($("#Or_Finish").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_AddToJc': (function() {
                if ($("#Or_AddToJc").is(":checked")) {
                    return 1;

                } else return 0;
            })(),



        };

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('orderone-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);

                var tabldata = $('#orderone_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }

    function orderone_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('orderone-filldata') ?>",
                success: function(response) {

                    $('#Or_State').empty();
                    $('#Or_State').append('<option selected>' + "Select State" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#Or_State').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                    });

                    $('#Or_CarNoBrowser').empty();
                    $.each(response.getcarno, function(indexInArray, valueOfElement) {
                        $('#Or_CarNoBrowser').append('<option value="' + valueOfElement.Ci2_CarNo + '">');
                    });

                    $('#Or_CarTypeBrowser').empty();
                    $.each(response.getcartype, function(indexInArray, valueOfElement) {
                        $('#Or_CarTypeBrowser').append('<option value="' + valueOfElement.Ct_Name + '">');
                    });

                    $('#Or_CustomerBrowser').empty();
                    $.each(response.getcustomers, function(indexInArray, valueOfElement) {
                        $('#Or_CustomerBrowser').append('<option value="' + valueOfElement.Cu_Name + '">');

                    });

                    $('#Or_WorkPlaceBrowser').empty();
                    $.each(response.getworkplace, function(indexInArray, valueOfElement) {
                        $('#Or_WorkPlaceBrowser').append('<option value="' + valueOfElement.Wsp_Name + '">');

                    });

                }
            });

        });
    }

    function orderone_fetch() {

        $(document).ready(function() {
            var orderstate = $('#Or_Filter').val();
            var data = {
                'orderstate': orderstate,
            };
            var tabledata = $('#orderone_data').DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,

                "order": [],
                "ajax": {
                    type: "GET",
                    data: data,
                    url: "<?php echo base_url('orderone-fetch') ?>",


                },

                "columns": [{
                        "data": "Or_ID"
                    },
                    {
                        "data": "Or_JcNumber"
                    },
                    {
                        "data": "Or_CarNo"
                    },
                    {
                        "data": "Or_CarType"
                    },
                    {
                        "data": "Or_Customer"
                    },
                    {
                        "data": "Or_Total",
                        render: $.fn.dataTable.render.number(',', '.', 0)
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 orderoneEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 orderoneDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 orderoneDisplay"><i class="bi bi-info"></i></button>' : data;
                        }
                    }


                ],
                "columnDefs": [{
                    "targets": [0, 6],
                    "orderable": false,
                }],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ],
                "initComplete": function() {
                    tabledata.buttons().container().appendTo('#orderone_data_wrapper .col-md-6:eq(0)');
                    $("#orderone_data").show();
                },
                'dom': "<'row'<'col-sm-12 col-md-6'Bl><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

                "buttons": [{
                        'extend': 'print',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'copy',
                        'exportOptions': {
                            'columns': [0, ':visible']
                        }
                    },
                    {
                        'extend': 'excel',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'pdf',
                        'exportOptions': {
                            'columns': ':visible'
                        }
                    },
                    {
                        'extend': 'colvis',
                        'postfixButtons': ['colvisRestore']
                    }
                ],

            });

            tabledata.buttons().container()
                .appendTo($('.table-tools-col:eq(0)', tabledata.table().container()));
        });

    }

    function orderone_update() {
        var data = {
            'Or_ID': $('.Or_ID').val(),
            'Or_JcNumber': $('.Or_JcNumber').val(),
            'Or_CarNo': $('.Or_CarNo').val(),
            'Or_CarType': $('.Or_CarType').val(),
            'Or_Customer': $('.Or_Customer').val(),
            'Or_DateOut': $('.Or_DateOut').val(),
            'Or_State': $('.Or_State').val(),
            'Or_WorkPlace': $('.Or_WorkPlace').val(),
            'Or_Total': $('.Or_Total').val(),
            'Or_Notes': $('.Or_Notes').val(),
            'Or_Engineer_S': (function() {
                if ($("#Or_Engineer_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Supervisor_S': (function() {
                if ($("#Or_Supervisor_S").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_Finish': (function() {
                if ($("#Or_Finish").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'Or_AddToJc': (function() {
                if ($("#Or_AddToJc").is(":checked")) {
                    return 1;

                } else return 0;
            })(),




        };

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('orderone-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#orderone_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }

    function orderone_getcustomerinfo() {
        var customername = $('#Or_Customer').val();
        var data = {
            'getname': customername,
        };
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('orderone-getcustomer') ?>",
            data: data,
            success: function(response) {
                $.each(response.getcustomerinfo, function(indexInArray, valueOfElement) {

                    if ((valueOfElement.Cu_State) == 'Active') {
                        if ($('#Or_ID').val() == '') {
                            orderone_insertdata();
                            orderone_cleardata();
                        } else {
                            orderone_update();

                        }

                    } else {

                        $('#error_Or_Customer').text('This Customer is Inactive');
                    }

                });
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



    // JobCard Secondary
    $(document).on('click', '.orderoneItem', function() {
        var displaycard = document.getElementById("ordertwocard");
        if (displaycard.style.display == "none") {
            ordertwo_fetch();
            ordertwo_filldata();
            displaycard.style.display = "block";
            document.getElementById('ordertwocard').scrollIntoView();
        } else {
            var tabldata = $('#ordertwo_data').DataTable();
            tabldata.destroy();
            displaycard.style.display = "none";
        }
        var displaycard2 = document.getElementById("ordertwoaction");
        if (displaycard2.style.display == "block") {
            var tabldata2 = $('#ordertwo_data').DataTable();
            tabldata2.destroy();
            displaycard2.style.display = "none";
        }


    });


    $("#ordertwoaction").hide();
    $("#ordertwocard").hide();
    $(document).on('click', '.ordertwoAdd', function() {
        var displaycard = document.getElementById("ordertwoaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_ordertwotitle").innerText = "Add New Item";
            displaycard.style.display = "block";
            document.getElementById('card_ordertwotitle').scrollIntoView();
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_ordertwotitle").innerText = "";
            ordertwo_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_ordertwotitle").innerText = "Add New Item";
            document.getElementById('card_ordertwotitle').scrollIntoView();

        }
    });
    $(document).on('click', '.ordertwoClose', function() {
        var displaycard = document.getElementById("ordertwoaction");
        ordertwo_cleardata();
        document.getElementById("card_ordertwotitle").innerText = "";
        displaycard.style.display = "none";


    });

    $(document).on('click', '.ordertwoSave', function() {

        var Or2_ID = document.getElementById("Or2_ID").value;

        if (Or2_ID == '') {

            ordertwo_checkdata();

            if (error_Or2_ItemName != '' || error_Or2_Unit != '' || error_Or2_Quantity != '') {
                return false;
            } else {

                ordertwo_insertdata();
                ordertwo_cleardata();
            }
        } else {
            ordertwo_update();

        }

    });

    $(document).on('click', '.ordertwoDelete', function() {
        var tabledata = $('#ordertwo_data').DataTable();
        var ordertwo = tabledata.row($(this).closest('tr')).data();
        var ordertwovalue = ordertwo[Object.keys(ordertwo)[0]];
        var getidjob = ordertwo[Object.keys(ordertwo)[1]];
        $.ajax({
            type: "POST",
            url: "<?= base_url('ordertwo-delete') ?>",
            data: {
                'getid': ordertwovalue,
            },

            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#ordertwo_data').DataTable().ajax.reload();

            }
        });
    });

    $(document).on('click', '.ordertwoEdit', function() {
        var tabledata = $('#ordertwo_data').DataTable();
        var ordertwo = tabledata.row($(this).closest('tr')).data();
        var ordertwovalue = ordertwo[Object.keys(ordertwo)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('ordertwo-edit') ?>",
            data: {
                'getid': ordertwovalue,
            },

            success: function(response) {

                $.each(response, function(key, value) {

                    $('#Or2_ID').val(value['Or2_ID']);
                    $('#Or2_FK').val(value['Or2_FK']);
                    $('#Or2_ItemName').val(value['Or2_ItemName']);
                    $('#Or2_PartNumber').val(value['Or2_PartNumber']);
                    $('#Or2_Company').val(value['Or2_Company']);
                    $('#Or2_Brand').val(value['Or2_Brand']);
                    $('#Or2_ItemState').val(value['Or2_ItemState']);
                    $('#Or2_Unit').val(value['Or2_Unit']);
                    $('#Or2_Quantity').val(value['Or2_Quantity']);
                    $('#Or2_UnitPrice').val(value['Or2_UnitPrice']);
                    $('#Or2_MoneyTotal').val(value['Or2_MoneyTotal']);
                    $('#Or2_Notes').val(value['Or2_Notes']);


                    var displaycard = document.getElementById("ordertwoaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_ordertwotitle").innerText = "Item Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_ordertwotitle').scrollIntoView();
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_ordertwotitle').innerText = "";
                        document.getElementById('card_ordertwotitle').innerText = "Item Data Edit";
                        displaycard.style.display = "block";
                        document.getElementById('card_ordertwotitle').scrollIntoView();

                    }

                });

            }
        });
    });

    // // prevent write any char or special char in textbox
    $(document).ready(function() {
        $('#Or2_Quantity').on('keypress', function(event) {
            var regex = new RegExp("^[.0-9]+$");
            var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
            if (!regex.test(key)) {
                event.preventDefault();
                return false;
            }
        });

       

    });




    function ordertwo_cleardata() {
        $('#Or2_ID').val('');
        $('#Or2_ItemName').val('');
        $('#Or2_PartNumber').val('');
        $('#Or2_Company').val('');
        $('#Or2_Brand').val('');
        $('#Or2_ItemState').val('');
        $('#Or2_Unit').val('');
        $('#Or2_Quantity').val('');
        $('#Or2_UnitPrice').val('');
        $('#Or2_MoneyTotal').val('');
        $('#Or2_Notes').val('');

    }

    function ordertwo_checkdata() {

        if ($.trim($('.Or2_ItemName').val()).length == 0) {
            error_Or2_ItemName = "plz, input the Item Name";
            $('#error_Or2_ItemName').text(error_Or2_ItemName);
        } else {
            error_Or2_ItemName = "";
            $('#error_Or2_ItemName').text(error_Or2_ItemName);
        }
        if ($.trim($('.Or2_Unit').val()).length == 0) {
            error_Or2_Unit = "plz, input the Unit";
            $('#error_Or2_Unit').text(error_Or2_Unit);
        } else {
            error_Or2_Unit = "";
            $('#error_Or2_Unit').text(error_Or2_Unit);
        }
        if ($.trim($('.Or2_Quantity').val()).length == 0) {
            error_Or2_Quantity = "plz, input the Quantity";
            $('#error_Or2_Quantity').text(error_Or2_Quantity);
        } else {
            error_Or2_Quantity = "";
            $('#error_Or2_Quantity').text(error_Or2_Quantity);
        }



    }

    function ordertwo_insertdata() {
        var data = {
            'Or2_FK': $('#Or2_FK').val(),
            'Or2_ItemName': $('#Or2_ItemName').val(),
            'Or2_Unit': $('#Or2_Unit').val(),
            'Or2_Quantity': $('#Or2_Quantity').val(),
            'Or2_Notes': $('#Or2_Notes').val(),

        };

        $.ajax({
            method: "POST",
            url: "<?php echo base_url('ordertwo-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata2 = $('#ordertwo_data').DataTable();
                tabldata2.ajax.reload();
                // ordertwo_total();
                // var tabldata3 = $('#orderone_data').DataTable();
                // tabldata3.ajax.reload();


            }
        });
    }

    function ordertwo_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('ordertwo-filldata') ?>",
                success: function(response) {
                    $('#Or2_State').empty();
                    $('#Or2_State').append('<option selected>' + "Select Item State" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#Or2_State').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                    });



                    $('#Or2_UnitBrowser').empty();
                    $.each(response.getunit, function(indexInArray, valueOfElement) {
                        $('#Or2_UnitBrowser').append('<option value="' + valueOfElement.Ui_Name + '">');
                    });

                    $('#Or2_ItemNameBrowser').empty();
                    $.each(response.getitemname, function(indexInArray, valueOfElement) {
                        $('#Or2_ItemNameBrowser').append('<option value="' + valueOfElement.IT_Name + '">');
                    });


                }
            });

        });
    }

    function ordertwo_fetch() {

        $(document).ready(function() {

            var tabledata2 = $('#ordertwo_data').DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,

                "order": [],
                "ajax": {
                    type: "GET",
                    data: {
                        'getid': $('#Or_ID').val(),
                    },

                    url: "<?php echo base_url('ordertwo-fetch') ?>",
                },

                "columns": [{
                        "data": "Or2_ItemName"
                    },
                    {
                        "data": "Or2_PartNumber"
                    },
                    {
                        "data": "Or2_ItemState"
                    },
                    {
                        "data": "Or2_Unit"
                    },
                    {
                        "data": "Or2_Quantity",
                        render: $.fn.dataTable.render.number(',', '.', 2)
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 ordertwoEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 ordertwoDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 ordertwoDisplay"><i class="bi bi-info"></i></button>' : data;
                        }
                    }



                ],
                "columnDefs": [{
                        "targets": [5],
                        "orderable": false,
                    },
                    {
                        "targets": [2],
                        "createdCell": function(td, cellData, rowData, row, col) {
                            if (cellData == 'Inactive') {
                                $(td).css({
                                    'background-color': "#ff5252"
                                });
                            }
                        }
                    },



                ],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ],

            });



        });


    }

    function ordertwo_update() {
        var data = {
            'Or2_ID': $('#Or2_ID').val(),
            'Or2_FK': $('#Or2_FK').val(),
            'Or2_ItemName': $('#Or2_ItemName').val(),
            'Or2_Unit': $('#Or2_Unit').val(),
            'Or2_Quantity': $('#Or2_Quantity').val(),
            'Or2_Notes': $('#Or2_Notes').val(),


        };
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('ordertwo-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata2 = $('#ordertwo_data').DataTable();
                tabldata2.ajax.reload();
                ordertwo_total();
                var tabldata3 = $('#orderone_data').DataTable();
                tabldata3.ajax.reload();

            }
        });
    }
</script>


<?= $this->endSection() ?>