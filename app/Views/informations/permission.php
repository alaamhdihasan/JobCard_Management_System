<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end permissionAdd">Add permission
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="permission_data" class="table table-bordered table-striped permission_data" cellspacing="0" width="100%">
                        <thead class="dataheader_permission table-dark">
                            <tr>
                                <td>ID</td>
                                <td>permission Name</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_permission">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card permissionaction" id="permissionaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end permissionClose">close
                    </button>
                    <h4 style="color: black;" id="card_permissiontitle" class="card_permissiontitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="pe_id" id="pe_id" class="form-control pe_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> permission Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="pe_name" id="pe_name" class="form-control pe_name" autocomplete="off">
                                        <span id="error_pe_name" class="text-danger"></span>
                                    </div>

                                </div>




                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control permissionSave">Save Data</button>
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
        permission_fetch();
        $("#permissionaction").hide();
        $(document).on('click', '.permissionAdd', function() {
            var displaycard = document.getElementById("permissionaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_permissiontitle").innerText = "Add New permission";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_permissiontitle").innerText = "";
                permission_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_permissiontitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.permissionClose', function() {
            var displaycard = document.getElementById("permissionaction");
            permission_cleardata();
            document.getElementById("card_permissiontitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.permissionSave', function() {

            var pe_id = document.getElementById("pe_id").value;

            if (pe_id == '') {

                permission_chechdata();
                if (error_pe_name != '') {
                    return false;
                } else {
                    permission_insert();
                    permission_cleardata();
                }
            } else {
                permission_update();
                permission_cleardata();
            }

        });

        $(document).on('click', '.permissionDelete', function() {
            var tabledata = $('#permission_data').DataTable();
            var permission = tabledata.row($(this).closest('tr')).data();
            var permissionvalue = permission[Object.keys(permission)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('permission-delete') ?>",
                data: {
                    'getid': permissionvalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#permission_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.permissionEdit', function() {
            var tabledata = $('#permission_data').DataTable();
            var permission = tabledata.row($(this).closest('tr')).data();
            var permissionvalue = permission[Object.keys(permission)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('permission-edit') ?>",
                data: {
                    'getid': permissionvalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#pe_id').val(value['Pe_ID']);
                        $('#pe_name').val(value['Pe_Name']);


                        var displaycard = document.getElementById("permissionaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_permissiontitle").innerText = "permission Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_permissiontitle').innerText = "";
                            document.getElementById('card_permissiontitle').innerText = "permission Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function permission_cleardata() {
            $('#pe_id').val('');
            $('#pe_name').val('');

        }

        function permission_chechdata() {
            if ($.trim($('.pe_name').val()).length == 0) {
                error_pe_name = "plz, input the permission";
                $('#error_pe_name').text(error_pe_name);
            } else {
                error_pe_name = "";
                $('#error_pe_name').text(error_pe_name);
            }
           


        }

        function permission_insert() {
            var data = {
                'pe_name': $('.pe_name').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('permission-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#permission_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }

      
        function permission_fetch() {

            $(document).ready(function() {

                var tabledata = $('#permission_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('permission-fetch') ?>",


                    },

                    "columns": [{
                            "data": "Pe_ID"
                        },
                        {
                            "data": "Pe_Name"
                        },
                        
                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 permissionEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 permissionDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 permissionDisplay"><i class="bi bi-info"></i></button>' : data;
                            }
                        }



                    ],
                    "columnDefs": [{
                        "targets": [0, 2],
                        "orderable": false,
                    }],
                    "lengthMenu": [
                        [5, 10, 15, 20, 25, 100],
                        [5, 10, 15, 20, 25, 100]
                    ]


                });




            });

        }

        function permission_update() {
            var data = {
                'pe_id': $('.pe_id').val(),
                'pe_name': $('.pe_name').val(),


            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('permission-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#permission_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }
    </script>


    <?= $this->endSection() ?>