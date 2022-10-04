<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end sideAdd">Add side
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="side_data" class="table table-bordered table-striped side_data" cellspacing="0" width="100%">
                        <thead class="dataheader_side table-dark">
                            <tr>
                                <td>ID</td>
                                <td>side Name</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_side">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card sideaction" id="sideaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end sideClose">close
                    </button>
                    <h4 style="color: black;" id="card_sidetitle" class="card_sidetitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="si_id" id="si_id" class="form-control si_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Side Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="si_name" id="si_name" class="form-control si_name" autocomplete="off">
                                        <span id="error_si_name" class="text-danger"></span>
                                    </div>

                                </div>




                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control sideSave">Save Data</button>
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
        side_fetch();
        $("#sideaction").hide();
        $(document).on('click', '.sideAdd', function() {
            var displaycard = document.getElementById("sideaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_sidetitle").innerText = "Add New side";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_sidetitle").innerText = "";
                side_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_sidetitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.sideClose', function() {
            var displaycard = document.getElementById("sideaction");
            side_cleardata();
            document.getElementById("card_sidetitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.sideSave', function() {

            var si_id = document.getElementById("si_id").value;

            if (si_id == '') {

                side_chechdata();
                if (error_si_name != '') {
                    return false;
                } else {
                    side_insert();
                    side_cleardata();
                }
            } else {
                side_update();
                side_cleardata();
            }

        });

        $(document).on('click', '.sideDelete', function() {
            var tabledata = $('#side_data').DataTable();
            var side = tabledata.row($(this).closest('tr')).data();
            var sidevalue = side[Object.keys(side)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('side-delete') ?>",
                data: {
                    'getid': sidevalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#side_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.sideEdit', function() {
            var tabledata = $('#side_data').DataTable();
            var side = tabledata.row($(this).closest('tr')).data();
            var sidevalue = side[Object.keys(side)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('side-edit') ?>",
                data: {
                    'getid': sidevalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#si_id').val(value['Si_ID']);
                        $('#si_name').val(value['Si_Name']);


                        var displaycard = document.getElementById("sideaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_sidetitle").innerText = "side Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_sidetitle').innerText = "";
                            document.getElementById('card_sidetitle').innerText = "side Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function side_cleardata() {
            $('#si_id').val('');
            $('#si_name').val('');

        }

        function side_chechdata() {
            if ($.trim($('.si_name').val()).length == 0) {
                error_si_name = "plz, input the side";
                $('#error_si_name').text(error_si_name);
            } else {
                error_si_name = "";
                $('#error_si_name').text(error_si_name);
            }
           


        }

        function side_insert() {
            var data = {
                'si_name': $('.si_name').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('side-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#side_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }

      
        function side_fetch() {

            $(document).ready(function() {

                var tabledata = $('#side_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('side-fetch') ?>",


                    },

                    "columns": [{
                            "data": "Si_ID"
                        },
                        {
                            "data": "Si_Name"
                        },
                        
                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 sideEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 sideDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 sideDisplay"><i class="bi bi-info"></i></button>' : data;
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

        function side_update() {
            var data = {
                'si_id': $('.si_id').val(),
                'si_name': $('.si_name').val(),


            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('side-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#side_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }
    </script>


    <?= $this->endSection() ?>