<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end workshopplaceAdd">Add workshop place
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="workshopplace_data" class="table table-bordered table-striped workshopplace_data" cellspacing="0" width="100%">
                        <thead class="dataheader_workshopplace table-dark">
                            <tr>
                                <td>ID</td>
                                <td>workshopplace Name</td>
                                <td>State</td>
                                <td>Mobile</td>
                                <td>Manager</td>
                                <td>Technician</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_workshopplace">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card workshopplaceaction" id="workshopplaceaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end workshopplaceClose">close
                    </button>
                    <h4 style="color: black;" id="card_workshopplacetitle" class="card_workshopplacetitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="ug_id" id="ug_id" class="form-control ug_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> WrokShop Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="ug_name" id="ug_name" class="form-control ug_name" autocomplete="off">
                                        <span id="error_ug_name" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> State :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="ug_state" id="ug_state" class="col-sm-11 col-form-label form-select ug_state">

                                        </select>
                                        <span id="error_ug_state" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Mobile :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="ug_mobile" id="ug_mobile" class="form-control ug_mobile" autocomplete="off">
                                        <span id="error_ug_mobile" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Phone :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="ug_phone" id="ug_phone" class="form-control ug_phone" autocomplete="off">
                                        <span id="error_ug_phone" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Manager :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="ug_manager" id="ug_manager" class="form-control ug_manager" autocomplete="off">
                                        <span id="error_ug_manager" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Employees Count :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="number" name="ug_techniciancount" id="ug_techniciancount" class="form-control ug_techniciancount" autocomplete="off">
                                        <span id="error_ug_techniciancount" class="text-danger"></span>
                                    </div>

                                </div>



                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>
                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Description :</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control rounded-1 ug_description" id="ug_description" name="ug_description" rows="3"></textarea>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary form-control workshopplaceSave">Save Data</button>
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
    workshopplace_fetch();
    workshopplace_filldata();
    $("#workshopplaceaction").hide();
    $(document).on('click', '.workshopplaceAdd', function() {
        var displaycard = document.getElementById("workshopplaceaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_workshopplacetitle").innerText = "Add New workshopplace";
            displaycard.style.display = "block";
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_workshopplacetitle").innerText = "";
            workshopplace_cleardata();
            displaycard.style.display = "block";
            document.getElementById("card_workshopplacetitle").innerText = "Add New workshopplace";

        }
    });
    $(document).on('click', '.workshopplaceClose', function() {
        var displaycard = document.getElementById("workshopplaceaction");
        workshopplace_cleardata();
        document.getElementById("card_workshopplacetitle").innerText = "";
        displaycard.style.display = "none";


    });

    $(document).on('click', '.workshopplaceSave', function() {

        var ug_id = document.getElementById("ug_id").value;

        if (ug_id == '') {

            workshopplace_checkdata();
            if (error_ug_name != '' || error_ug_state != '' || error_ug_mobile != '' || error_ug_phone != '' ||
                error_ug_manager != '' || error_ug_techniciancount != '') {
                return false;
            } else {
                workshopplace_insertdata();
                workshopplace_cleardata();
            }
        } else {
            workshopplace_update();
            workshopplace_cleardata();
        }

    });

    $(document).on('click', '.workshopplaceDelete', function() {
        var tabledata = $('#workshopplace_data').DataTable();
        var workshopplace = tabledata.row($(this).closest('tr')).data();
        var workshopplacevalue = workshopplace[Object.keys(workshopplace)[0]];

        $.ajax({
            type: "POST",
            url: "<?= base_url('workshopplace-delete') ?>",
            data: {
                'getid': workshopplacevalue,
            },

            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#workshopplace_data').DataTable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.workshopplaceEdit', function() {
        var tabledata = $('#workshopplace_data').DataTable();
        var workshopplace = tabledata.row($(this).closest('tr')).data();
        var workshopplacevalue = workshopplace[Object.keys(workshopplace)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('workshopplace-edit') ?>",
            data: {
                'getid': workshopplacevalue,
            },

            success: function(response) {

                $.each(response, function(key, value) {

                    $('#ug_id').val(value['Wsp_ID']);
                    $('#ug_name').val(value['Wsp_Name']);
                    $('#ug_state').val(value['Wsp_State']);
                    $('#ug_mobile').val(value['Wsp_Mobile']);
                    $('#ug_phone').val(value['Wsp_Phone']);
                    $('#ug_manager').val(value['Wsp_Manager']);
                    $('#ug_techniciancount').val(value['Wsp_TechnicianCount']);
                    $('#ug_description').val(value['Wsp_Description']);


                    var displaycard = document.getElementById("workshopplaceaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_workshopplacetitle").innerText = "workshopplace Data Edit";
                        displaycard.style.display = "block";
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_workshopplacetitle').innerText = "";
                        document.getElementById('card_workshopplacetitle').innerText = "workshopplace Data Edit";
                        displaycard.style.display = "block";

                    }

                });

            }
        });
    });




    function workshopplace_cleardata() {
        $('#ug_id').val('');
        $('#ug_name').val('');
        $('#ug_state').val('');
        $('#ug_mobile').val('');
        $('#ug_phone').val('');
        $('#ug_manager').val('');
        $('#ug_techniciancount').val('');
        $('#ug_description').val('');




    }

    function workshopplace_checkdata() {
        if ($.trim($('.ug_name').val()).length == 0) {
            error_ug_name = "plz, input the Name";
            $('#error_ug_name').text(error_ug_name);
        } else {
            error_ug_name = "";
            $('#error_ug_name').text(error_ug_name);
        }
        if ($.trim($('.ug_state').val()).length == 0) {
            error_ug_state = "plz, input the state";
            $('#error_ug_state').text(error_ug_state);
        } else {
            error_ug_state = "";
            $('#error_ug_state').text(error_ug_state);
        }
        if ($.trim($('.ug_mobile').val()).length == 0) {
            error_ug_mobile = "plz, input the mobile";
            $('#error_ug_mobile').text(error_ug_mobile);
        } else {
            error_ug_mobile = "";
            $('#error_ug_mobile').text(error_ug_mobile);
        }
        if ($.trim($('.ug_phone').val()).length == 0) {
            error_ug_phone = "plz, input the phone";
            $('#error_ug_phone').text(error_ug_phone);
        } else {
            error_ug_phone = "";
            $('#error_ug_phone').text(error_ug_phone);
        }
        if ($.trim($('.ug_manager').val()).length == 0) {
            error_ug_manager = "plz, input the manager";
            $('#error_ug_manager').text(error_ug_manager);
        } else {
            error_ug_manager = "";
            $('#error_ug_manager').text(error_ug_manager);
        }
        if ($.trim($('.ug_techniciancount').val()).length == 0) {
            error_ug_techniciancount = "plz, input the techniciancount";
            $('#error_ug_techniciancount').text(error_ug_techniciancount);
        } else {
            error_ug_techniciancount = "";
            $('#error_ug_techniciancount').text(error_ug_techniciancount);
        }

    }

    function workshopplace_insertdata() {
        var data = {
            'ug_name': $('.ug_name').val(),
            'ug_state': $('.ug_state').val(),
            'ug_mobile': $('.ug_mobile').val(),
            'ug_phone': $('.ug_phone').val(),
            'ug_manager': $('.ug_manager').val(),
            'ug_techniciancount': $('.ug_techniciancount').val(),
            'ug_description': $('.ug_description').val(),



        };
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('workshopplace-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#workshopplace_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }

    function workshopplace_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('workshopplace-filldata') ?>",
                success: function(response) {

                    $('#ug_state').append('<option selected>' + "Select State" + '</option>');
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                        $('#ug_state').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                    });

                }
            });

        });
    }

    function workshopplace_fetch() {

        $(document).ready(function() {

            var tabledata = $('#workshopplace_data').DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,

                "order": [],
                "ajax": {
                    type: "GET",
                    url: "<?php echo base_url('workshopplace-fetch') ?>",


                },

                "columns": [{
                        "data": "Wsp_ID"
                    },
                    {
                        "data": "Wsp_Name"
                    },
                    {
                        "data": "Wsp_State"
                    },
                    {
                        "data": "Wsp_Mobile"
                    },
                    {
                        "data": "Wsp_Manager"
                    },
                    {
                        "data": "Wsp_TechnicianCount"
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 workshopplaceEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 workshopplaceDelete"><i class="bi bi-trash"></i> Del </button>' +
                                '<button  class="btn btn-secondary btn-sm m-1 workshopplaceDisplay"><i class="bi bi-info"></i></button>' : data;
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
                ]


            });




        });

    }

    function workshopplace_update() {
        var data = {
            'ug_id': $('.ug_id').val(),
            'ug_name': $('.ug_name').val(),
            'ug_state': $('.ug_state').val(),
            'ug_mobile': $('.ug_mobile').val(),
            'ug_phone': $('.ug_phone').val(),
            'ug_manager': $('.ug_manager').val(),
            'ug_techniciancount': $('.ug_techniciancount').val(),
            'ug_description': $('.ug_description').val(),


        };
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('workshopplace-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#workshopplace_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }
</script>


<?= $this->endSection() ?>