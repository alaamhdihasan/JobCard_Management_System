<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end customerAdd">Add customer
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="customer_data" class="table table-bordered table-striped customer_data" cellspacing="0" width="100%">
                        <thead class="dataheader_customer table-dark">
                            <tr>
                                <td>ID</td>
                                <td>Customer Name</td>
                                <td>Account</td>
                                <td>State</td>
                                <td>Group</td>
                                <td>Company</td>
                                <td>City</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_customer">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card customeraction" id="customeraction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end customerClose">close
                    </button>
                    <h4 style="color: black;" id="card_customertitle" class="card_customertitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="cu_id" id="cu_id" class="form-control cu_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Customer Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="cu_name" id="cu_name" class="form-control cu_name" autocomplete="off">
                                        <span id="error_cu_name" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Account :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="cu_account" id="cu_account" class="col-sm-11 col-form-label form-select cu_account">

                                        </select>
                                        <span id="error_cu_account" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> State :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="cu_state" id="cu_state" class="col-sm-11 col-form-label form-select cu_state">

                                        </select>
                                        <span id="error_cu_state" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Group :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="cu_groupsales" id="cu_groupsales" class="col-sm-11 col-form-label form-select cu_groupsales">

                                        </select>
                                        <span id="error_cu_groupsales" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Company :
                                    </label>
                                    <div class="col-sm-3">
                                              <input list="cu_companybrowser"
                                                class="form-control cu_company"       
                                                id="cu_company"
                                                placeholder="Type to search...">
                                                <datalist id="cu_companybrowser">
                                               
                                              </datalist> 
                                              
                                              
                                        <span id="error_cu_company" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Address :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="cu_address" id="cu_address" class="form-control cu_address" autocomplete="off">
                                        <span id="error_cu_address" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> City :
                                    </label>
                                    <div class="col-sm-3">
                                    <input list="cu_citybrowser"
                                                class="form-control cu_city"       
                                                id="cu_city"
                                                placeholder="Type to search...">
                                                <datalist id="cu_citybrowser">
                                               
                                              </datalist> 
                                        <span id="error_cu_city" class="text-danger"></span>
                                    </div>

                                </div>


                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Country :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="cu_country" id="cu_country" class="form-control cu_country" autocomplete="off">
                                        <span id="error_cu_country" class="text-danger"></span>
                                    </div>

                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Email :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="cu_email" id="cu_email" class="form-control cu_email" autocomplete="off">
                                        <span id="error_cu_email" class="text-danger"></span>
                                    </div>

                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Mobile :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="number" name="cu_mobile" id="cu_mobile" class="form-control cu_mobile" autocomplete="off">
                                        <span id="error_cu_mobile" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Phone :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="number" name="cu_phone" id="cu_phone" class="form-control cu_phone" autocomplete="off">
                                        <span id="error_cu_phone" class="text-danger"></span>
                                    </div>

                                </div>



                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary form-control customerSave">Save Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>



<?= $this->endSection() ?>

<?= $this->section('scripts') ?>


<script>
    customer_fetch();
    customer_filldata();
    $("#customeraction").hide();
    $(document).on('click', '.customerAdd', function() {
        var displaycard = document.getElementById("customeraction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_customertitle").innerText = "Add New customer";
            displaycard.style.display = "block";
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_customertitle").innerText = "";
            customer_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_customertitle").innerText = "Add New customer";

        }
    });
    $(document).on('click', '.customerClose', function() {
        var displaycard = document.getElementById("customeraction");
        customer_cleardata();
        document.getElementById("card_customertitle").innerText = "";
        displaycard.style.display = "none";


    });

    $(document).on('click', '.customerSave', function() {

        var cu_id = document.getElementById("cu_id").value;

        if (cu_id == '') {

            customer_checkdata();
            
            if (error_cu_name != '' || error_cu_account != '' || error_cu_state != '' || error_cu_groupsales != '' 
            || error_cu_company != '' || error_cu_address != '' || error_cu_city != '' || error_cu_country != '' 
            || error_cu_email != '' || error_cu_mobile != '' || error_cu_phone != '') {
                return false;
            } 
            else {
                
                customer_insertdata();
                customer_cleardata();
            }
        } else {
            customer_update();
            customer_cleardata();
        }

    });

    $(document).on('click', '.customerDelete', function() {
        var tabledata = $('#customer_data').DataTable();
        var customer = tabledata.row($(this).closest('tr')).data();
        var customervalue = customer[Object.keys(customer)[0]];

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer-delete') ?>",
            data: {
                'getid': customervalue,
            },

            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#customer_data').DataTable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.customerEdit', function() {
        var tabledata = $('#customer_data').DataTable();
        var customer = tabledata.row($(this).closest('tr')).data();
        var customervalue = customer[Object.keys(customer)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('customer-edit') ?>",
            data: {
                'getid': customervalue,
            },

            success: function(response) {

                $.each(response, function(key, value) {

                    $('#cu_id').val(value['Cu_ID']);
                    $('#cu_name').val(value['Cu_Name']);
                    $('#cu_account').val(value['Cu_Account']);
                    $('#cu_state').val(value['Cu_State']);
                    $('#cu_groupsales').val(value['Cu_GroupSales']);
                    $('#cu_company').val(value['Cu_Company']);
                    $('#cu_address').val(value['Cu_Address']);
                    $('#cu_city').val(value['Cu_City']);
                    $('#cu_country').val(value['Cu_Country']);
                    $('#cu_email').val(value['Cu_Email']);
                    $('#cu_mobile').val(value['Cu_Mobile']);
                    $('#cu_phone').val(value['Cu_Phone']);


                    var displaycard = document.getElementById("customeraction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_customertitle").innerText = "customer Data Edit";
                        displaycard.style.display = "block";
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_customertitle').innerText = "";
                        document.getElementById('card_customertitle').innerText = "customer Data Edit";
                        displaycard.style.display = "block";

                    }

                });

            }
        });
    });




    function customer_cleardata() {
        $('#cu_id').val('');
        $('#cu_name').val('');
        $('#cu_account').val('');
        $('#cu_state').val('');
        $('#cu_groupsales').val('');
        $('#cu_company').val('');
        $('#cu_address').val('');
        $('#cu_city').val('');
        $('#cu_country').val('');
        $('#cu_email').val('');
        $('#cu_mobile').val('');
        $('#cu_phone').val('');




    }

    function customer_checkdata() {
        if ($.trim($('.cu_name').val()).length == 0) {
            error_cu_name = "plz, input the Name";
            $('#error_cu_name').text(error_cu_name);
        } else {
            error_cu_name = "";
            $('#error_cu_name').text(error_cu_name);
        }
        if ($.trim($('.cu_state').val()).length == 0) {
            error_cu_state = "plz, input the state";
            $('#error_cu_state').text(error_cu_state);
        } else {
            error_cu_state = "";
            $('#error_cu_state').text(error_cu_state);
        }
        if ($.trim($('.cu_mobile').val()).length == 0) {
            error_cu_mobile = "plz, input the mobile";
            $('#error_cu_mobile').text(error_cu_mobile);
        } else {
            error_cu_mobile = "";
            $('#error_cu_mobile').text(error_cu_mobile);
        }
        if ($.trim($('.cu_phone').val()).length == 0) {
            error_cu_phone = "plz, input the phone";
            $('#error_cu_phone').text(error_cu_phone);
        } else {
            error_cu_phone = "";
            $('#error_cu_phone').text(error_cu_phone);
        }
        if ($.trim($('.cu_account').val()).length == 0) {
            error_cu_account = "plz, input the account";
            $('#error_cu_account').text(error_cu_account);
        } else {
            error_cu_account = "";
            $('#error_cu_account').text(error_cu_account);
        }
        if ($.trim($('.cu_address').val()).length == 0) {
            error_cu_address = "plz, input the address";
            $('#error_cu_address').text(error_cu_address);
        } else {
            error_cu_address = "";
            $('#error_cu_address').text(error_cu_address);
        }
        if ($.trim($('.cu_email').val()).length == 0) {
            error_cu_email = "plz, input the email";
            $('#error_cu_email').text(error_cu_email);
        } else {
            error_cu_email = "";
            $('#error_cu_email').text(error_cu_email);
        }
        if ($.trim($('.cu_city').val()).length == 0) {
            error_cu_city = "plz, input the city";
            $('#error_cu_city').text(error_cu_city);
        } else {
            error_cu_city = "";
            $('#error_cu_city').text(error_cu_city);
        }
        if ($.trim($('.cu_country').val()).length == 0) {
            error_cu_country = "plz, input the country";
            $('#error_cu_country').text(error_cu_country);
        } else {
            error_cu_country = "";
            $('#error_cu_country').text(error_cu_country);
        }
        if ($.trim($('.cu_company').val()).length == 0) {
            error_cu_company = "plz, input the company";
            $('#error_cu_company').text(error_cu_company);
        } else {
            error_cu_company = "";
            $('#error_cu_company').text(error_cu_company);
        }
        if ($.trim($('.cu_groupsales').val()).length == 0) {
            error_cu_groupsales = "plz, input the Group";
            $('#error_cu_groupsales').text(error_cu_groupsales);
        } else {
            error_cu_groupsales = "";
            $('#error_cu_groupsales').text(error_cu_groupsales);
        }

    }

    function customer_insertdata() {
        var data = {
            'cu_name': $('.cu_name').val(),
            'cu_account': $('.cu_account').val(),
            'cu_state': $('.cu_state').val(),
            'cu_groupsales': $('.cu_groupsales').val(),
            'cu_company': $('.cu_company').val(),
            'cu_address': $('.cu_address').val(),
            'cu_city': $('.cu_city').val(),
            'cu_country': $('.cu_country').val(),
            'cu_email': $('.cu_email').val(),
            'cu_mobile': $('.cu_mobile').val(),
            'cu_phone': $('.cu_phone').val(),



        };
       
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('customer-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                
                var tabldata = $('#customer_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }

    function customer_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('customer-filldata') ?>",
                success: function(response) {

                    $('#cu_state').append('<option selected>' + "Select State" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#cu_state').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                    });
                    $('#cu_account').append('<option selected>' + "Select Account" + '</option>');
                    $.each(response.getaccount, function(indexInArray, valueOfElement) {
                        $('#cu_account').append('<option value="' + valueOfElement.Ac_Name + '">' + valueOfElement.Ac_Name + '</option>');
                    });
                    $('#cu_groupsales').append('<option selected>' + "Select Group" + '</option>');
                    $.each(response.getgroupsales, function(indexInArray, valueOfElement) {
                        $('#cu_groupsales').append('<option value="' + valueOfElement.Gs_Name + '">' + valueOfElement.Gs_Name + '</option>');
                    });
                   
                    $.each(response.getcompany, function(indexInArray, valueOfElement) {
                        $('#cu_companybrowser').append('<option value="' + valueOfElement.Co_Name + '">');
                    });
                    
                    $.each(response.getcity, function(indexInArray, valueOfElement) {
                        $('#cu_citybrowser').append('<option value="' + valueOfElement.Ci_Name + '">');
                    });

                }
            });

        });
    }

    function customer_fetch() {

        $(document).ready(function() {

            var tabledata = $('#customer_data').DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,

                "order": [],
                "ajax": {
                    type: "GET",
                    url: "<?php echo base_url('customer-fetch') ?>",


                },

                "columns": [{
                        "data": "Cu_ID"
                    },
                    {
                        "data": "Cu_Name"
                    },
                    {
                        "data": "Cu_Account"
                    },
                    {
                        "data": "Cu_State"
                    },
                    {
                        "data": "Cu_GroupSales"
                    },
                    {
                        "data": "Cu_Company"
                    },
                    {
                        "data": "Cu_City"
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 customerEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 customerDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 customerDisplay"><i class="bi bi-info"></i></button>' : data;
                        }
                    }



                ],
                "columnDefs": [{
                    "targets": [0, 7],
                    "orderable": false,
                }],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ]


            });




        });

    }

    function customer_update() {
        var data = {
            'cu_id': $('.cu_id').val(),
            'cu_name': $('.cu_name').val(),
            'cu_state': $('.cu_state').val(),
            'cu_mobile': $('.cu_mobile').val(),
            'cu_phone': $('.cu_phone').val(),
            'cu_account': $('.cu_account').val(),
            'cu_address': $('.cu_address').val(),
            'cu_city': $('.cu_city').val(),
            'cu_country': $('.cu_country').val(),
            'cu_groupsales': $('.cu_groupsales').val(),
            'cu_company': $('.cu_company').val(),
            'cu_email': $('.cu_email').val(),


        };
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('customer-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#customer_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }
</script>


<?= $this->endSection() ?>