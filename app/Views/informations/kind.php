<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end kindAdd">Add kind
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="kind_data" class="table table-bordered table-striped kind_data" cellspacing="0" width="100%">
                        <thead class="dataheader_kind table-dark">
                            <tr>
                                <td>ID</td>
                                <td>kind Name</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_kind">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card kindaction" id="kindaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end kindClose">close
                    </button>
                    <h4 style="color: black;" id="card_kindtitle" class="card_kindtitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="k_id" id="k_id" class="form-control k_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> kind Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="k_name" id="k_name" class="form-control k_name" autocomplete="off">
                                        <span id="error_k_name" class="text-danger"></span>
                                    </div>

                                </div>




                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control kindSave">Save Data</button>
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
        kind_fetch();
        $("#kindaction").hide();
        $(document).on('click', '.kindAdd', function() {
            var displaycard = document.getElementById("kindaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_kindtitle").innerText = "Add New kind";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_kindtitle").innerText = "";
                kind_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_kindtitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.kindClose', function() {
            var displaycard = document.getElementById("kindaction");
            kind_cleardata();
            document.getElementById("card_kindtitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.kindSave', function() {

            var k_id = document.getElementById("k_id").value;

            if (k_id == '') {

                kind_chechdata();
                if (error_k_name != '') {
                    return false;
                } else {
                    kind_insert();
                    kind_cleardata();
                }
            } else {
                kind_update();
                kind_cleardata();
            }

        });

        $(document).on('click', '.kindDelete', function() {
            var tabledata = $('#kind_data').DataTable();
            var kind = tabledata.row($(this).closest('tr')).data();
            var kindvalue = kind[Object.keys(kind)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('kind-delete') ?>",
                data: {
                    'getid': kindvalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#kind_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.kindEdit', function() {
            var tabledata = $('#kind_data').DataTable();
            var kind = tabledata.row($(this).closest('tr')).data();
            var kindvalue = kind[Object.keys(kind)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('kind-edit') ?>",
                data: {
                    'getid': kindvalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#k_id').val(value['K_ID']);
                        $('#k_name').val(value['K_Name']);


                        var displaycard = document.getElementById("kindaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_kindtitle").innerText = "kind Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_kindtitle').innerText = "";
                            document.getElementById('card_kindtitle').innerText = "kind Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function kind_cleardata() {
            $('#k_id').val('');
            $('#k_name').val('');

        }

        function kind_chechdata() {
            if ($.trim($('.k_name').val()).length == 0) {
                error_k_name = "plz, input the kind";
                $('#error_k_name').text(error_k_name);
            } else {
                error_k_name = "";
                $('#error_k_name').text(error_k_name);
            }
           


        }

        function kind_insert() {
            var data = {
                'k_name': $('.k_name').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('kind-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#kind_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }

      
        function kind_fetch() {

            $(document).ready(function() {

                var tabledata = $('#kind_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('kind-fetch') ?>",


                    },

                    "columns": [{
                            "data": "K_ID"
                        },
                        {
                            "data": "K_Name"
                        },
                        
                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 kindEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 kindDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 kindDisplay"><i class="bi bi-info"></i></button>' : data;
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

        function kind_update() {
            var data = {
                'k_id': $('.k_id').val(),
                'k_name': $('.k_name').val(),


            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('kind-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#kind_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }
    </script>


    <?= $this->endSection() ?>