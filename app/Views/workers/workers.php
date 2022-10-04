<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end workersAdd">Add Workers
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="workers_data" class="table table-bordered table-striped workers_data" cellspacing="0" width="100%">
                        <thead class="dataheader_workers table-dark">
                            <tr>
                                <td>ID</td>
                                <td>Worker Name</td>
                                <td>Working Place</td>
                                <td>Specialization</td>
                                <td>State</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_workers">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card workersaction" id="workersaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end workersClose">close
                    </button>
                    <h4 style="color: black;" id="card_workerstitle" class="card_workerstitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="wo_id" id="wo_id" class="form-control wo_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Worker Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="wo_name" id="wo_name" class="form-control wo_name" autocomplete="off">
                                        <span id="error_wo_name" class="text-danger"></span>
                                    </div>

                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Working Place :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="wo_workingplace" id="wo_workingplace" class="col-sm-11 col-form-label form-select wo_workingplace">

                                        </select>
                                        <span id="error_wo_workingplace" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label">Specialization :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="wo_specialization" id="wo_specialization" class="col-sm-11 col-form-label form-select wo_specialization">

                                        </select>
                                        <span id="error_wo_specialization" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> State :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="wo_state" id="wo_state" class="col-sm-11 col-form-label form-select wo_state">

                                        </select>
                                        <span id="error_wo_state" class="text-danger"></span>
                                    </div>

                                </div>



                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control workersSave">Save Data</button>
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
        workers_fetch();
        workers_filldata();
        $("#workersaction").hide();
        $(document).on('click', '.workersAdd', function() {
            var displaycard = document.getElementById("workersaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_workerstitle").innerText = "Add New workers";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_workerstitle").innerText = "";
                workers_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_workerstitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.workersClose', function() {
            var displaycard = document.getElementById("workersaction");
            workers_cleardata();
            document.getElementById("card_workerstitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.workersSave', function() {

            var wo_id = document.getElementById("wo_id").value;

            if (wo_id == '') {

                workers_chechdata();
                if (error_wo_name != '' || error_wo_workingplace != '' || error_wo_specialization != '' || error_wo_state != '' ) {
                    return false;
                } else {
                    workers_insert();
                    workers_cleardata();
                }
            } else {
                workers_update();
                workers_cleardata();
            }

        });

        $(document).on('click', '.workersDelete', function() {
            var tabledata = $('#workers_data').DataTable();
            var workers = tabledata.row($(this).closest('tr')).data();
            var workersvalue = workers[Object.keys(workers)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('workers-delete') ?>",
                data: {
                    'getid': workersvalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#workers_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.workersEdit', function() {
            var tabledata = $('#workers_data').DataTable();
            var workers = tabledata.row($(this).closest('tr')).data();
            var workersvalue = workers[Object.keys(workers)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('workers-edit') ?>",
                data: {
                    'getid': workersvalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#wo_id').val(value['Wo_ID']);
                        $('#wo_name').val(value['Wo_Name']);
                        $('#wo_workingplace').val(value['Wo_WorkingPlace']);
                        $('#wo_specialization').val(value['Wo_Specialization']);
                        $('#wo_state').val(value['Wo_State']);


                        var displaycard = document.getElementById("workersaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_workerstitle").innerText = "workers Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_workerstitle').innerText = "";
                            document.getElementById('card_workerstitle').innerText = "workers Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function workers_cleardata() {
            $('#wo_id').val('');
            $('#wo_name').val('');
            $('#wo_workingplace').val('');
            $('#wo_specialization').val('');
            $('#wo_state').val('');

        }

        function workers_chechdata() {
            if ($.trim($('.wo_name').val()).length == 0) {
                error_wo_name = "plz, input the Name";
                $('#error_wo_name').text(error_wo_name);
            } else {
                error_wo_name = "";
                $('#error_wo_name').text(error_wo_name);
            }
            if ($.trim($('.wo_workingplace').val()).length == 0 || $.trim($('.wo_workingplace').val())=='Select WorkingPlace') {
                error_wo_workingplace = "plz, input the workingplace";
                $('#error_wo_workingplace').text(error_wo_workingplace);
            } else {
                error_wo_workingplace = "";
                $('#error_wo_workingplace').text(error_wo_workingplace);
            }
            if ($.trim($('.wo_specialization').val()).length == 0) {
                error_wo_specialization = "plz, input the specialization";
                $('#error_wo_specialization').text(error_wo_specialization);
            } else {
                error_wo_specialization = "";
                $('#error_wo_specialization').text(error_wo_specialization);
            }
            if ($.trim($('.wo_state').val()).length == 0 || $.trim($('.wo_state').val())=='Select State' ) {
                error_wo_state = "plz, select the state";
                $('#error_wo_state').text(error_wo_state);
            } else {
                error_wo_state = "";
                $('#error_wo_state').text(error_wo_state);
            }


        }

        function workers_insert() {
            var data = {
                'wo_name': $('.wo_name').val(),
                'wo_workingplace': $('.wo_workingplace').val(),
                'wo_specialization': $('.wo_specialization').val(),
                'wo_state': $('.wo_state').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('workers-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#workers_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }

        function workers_filldata() {
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "<?php echo base_url('workers-filldata') ?>",
                    success: function(response) {

                        $('#wo_state').append('<option selected>' + "Select State" + '</option>');
                        $.each(response.getstate, function(indexInArray, valueOfElement) {
                            $('#wo_state').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');
                        });
                        $('#wo_workingplace').append('<option selected>' + "Select WorkingPlace" + '</option>');
                        $.each(response.getworkingplace, function(indexInArray, valueOfElement) {
                            $('#wo_workingplace').append('<option value="' + valueOfElement.Wsp_Name + '">' + valueOfElement.Wsp_Name + '</option>');
                        });
                        $('#wo_specialization').append('<option selected>' + "Select Specialization" + '</option>');
                        $.each(response.getspecialization, function(indexInArray, valueOfElement) {
                            $('#wo_specialization').append('<option value="' + valueOfElement.Sp_Name + '">' + valueOfElement.Sp_Name + '</option>');
                        });

                    }
                });

            });
        }

        function workers_fetch() {

            $(document).ready(function() {

                var tabledata = $('#workers_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('workers-fetch') ?>",


                    },

                    "columns": [{
                            "data": "Wo_ID"
                        },
                        {
                            "data": "Wo_Name"
                        },
                        {
                            "data": "Wo_WorkingPlace"
                        },
                        {
                            "data": "Wo_Specialization"
                        },
                        {
                            "data": "Wo_State"
                        },

                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 workersEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 workersDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 workersDisplay"><i class="bi bi-info"></i></button>' : data;
                            }
                        }



                    ],
                    "columnDefs": [{
                        "targets": [0,5],
                        "orderable": false,
                    }],
                    "lengthMenu": [
                        [5, 10, 15, 20, 25, 100],
                        [5, 10, 15, 20, 25, 100]
                    ]


                });




            });

        }

        function workers_update() {
            var data = {
                'wo_id': $('.wo_id').val(),
                'wo_name': $('.wo_name').val(),
                'wo_workingplace': $('.wo_workingplace').val(),
                'wo_specialization': $('.wo_specialization').val(),
                'wo_state': $('.wo_state').val(),

            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('workers-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#workers_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }
    </script>


    <?= $this->endSection() ?>