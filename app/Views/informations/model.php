<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end modelAdd">Add model
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="model_data" class="table table-bordered table-striped model_data" cellspacing="0" width="100%">
                        <thead class="dataheader_model table-dark">
                            <tr>
                                <td>ID</td>
                                <td>model Name</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_model">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card modelaction" id="modelaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end modelClose">close
                    </button>
                    <h4 style="color: black;" id="card_modeltitle" class="card_modeltitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="mo_id" id="mo_id" class="form-control mo_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> model Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="mo_name" id="mo_name" class="form-control mo_name" autocomplete="off">
                                        <span id="error_mo_name" class="text-danger"></span>
                                    </div>

                                </div>




                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control modelSave">Save Data</button>
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
        model_fetch();
        $("#modelaction").hide();
        $(document).on('click', '.modelAdd', function() {
            var displaycard = document.getElementById("modelaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_modeltitle").innerText = "Add New model";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_modeltitle").innerText = "";
                model_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_modeltitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.modelClose', function() {
            var displaycard = document.getElementById("modelaction");
            model_cleardata();
            document.getElementById("card_modeltitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.modelSave', function() {

            var mo_id = document.getElementById("mo_id").value;

            if (mo_id == '') {

                model_chechdata();
                if (error_mo_name != '') {
                    return false;
                } else {
                    model_insert();
                    model_cleardata();
                }
            } else {
                model_update();
                model_cleardata();
            }

        });

        $(document).on('click', '.modelDelete', function() {
            var tabledata = $('#model_data').DataTable();
            var model = tabledata.row($(this).closest('tr')).data();
            var modelvalue = model[Object.keys(model)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('model-delete') ?>",
                data: {
                    'getid': modelvalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#model_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.modelEdit', function() {
            var tabledata = $('#model_data').DataTable();
            var model = tabledata.row($(this).closest('tr')).data();
            var modelvalue = model[Object.keys(model)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('model-edit') ?>",
                data: {
                    'getid': modelvalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#mo_id').val(value['Mo_ID']);
                        $('#mo_name').val(value['Mo_Name']);


                        var displaycard = document.getElementById("modelaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_modeltitle").innerText = "model Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_modeltitle').innerText = "";
                            document.getElementById('card_modeltitle').innerText = "model Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function model_cleardata() {
            $('#mo_id').val('');
            $('#mo_name').val('');

        }

        function model_chechdata() {
            if ($.trim($('.mo_name').val()).length == 0) {
                error_mo_name = "plz, input the model";
                $('#error_mo_name').text(error_mo_name);
            } else {
                error_mo_name = "";
                $('#error_mo_name').text(error_mo_name);
            }
           


        }

        function model_insert() {
            var data = {
                'mo_name': $('.mo_name').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('model-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#model_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }

      
        function model_fetch() {

            $(document).ready(function() {

                var tabledata = $('#model_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('model-fetch') ?>",


                    },

                    "columns": [{
                            "data": "Mo_ID"
                        },
                        {
                            "data": "Mo_Name"
                        },
                        
                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 modelEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 modelDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 modelDisplay"><i class="bi bi-info"></i></button>' : data;
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

        function model_update() {
            var data = {
                'mo_id': $('.mo_id').val(),
                'mo_name': $('.mo_name').val(),


            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('model-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#model_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }
    </script>


    <?= $this->endSection() ?>