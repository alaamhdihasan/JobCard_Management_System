<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end stateAdd">Add State
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="state_data" class="table table-bordered table-striped state_data" cellspacing="0" width="100%">
                        <thead class="dataheader_state table-dark">
                            <tr>
                                <td>ID</td>
                                <td>State Name</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_state">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card stateaction" id="stateaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end stateClose">close
                    </button>
                    <h4 style="color: black;" id="card_statetitle" class="card_statetitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="st_id" id="st_id" class="form-control st_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> State Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="st_name" id="st_name" class="form-control st_name" autocomplete="off">
                                        <span id="error_st_name" class="text-danger"></span>
                                    </div>

                                </div>




                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control stateSave">Save Data</button>
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
        state_fetch();
        $("#stateaction").hide();
        $(document).on('click', '.stateAdd', function() {
            var displaycard = document.getElementById("stateaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_statetitle").innerText = "Add New state";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_statetitle").innerText = "";
                state_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_statetitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.stateClose', function() {
            var displaycard = document.getElementById("stateaction");
            state_cleardata();
            document.getElementById("card_statetitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.stateSave', function() {

            var st_id = document.getElementById("st_id").value;

            if (st_id == '') {

                state_chechdata();
                if (error_st_name != '') {
                    return false;
                } else {
                    state_insert();
                    state_cleardata();
                }
            } else {
                state_update();
                state_cleardata();
            }

        });

        $(document).on('click', '.stateDelete', function() {
            var tabledata = $('#state_data').DataTable();
            var state = tabledata.row($(this).closest('tr')).data();
            var statevalue = state[Object.keys(state)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('state-delete') ?>",
                data: {
                    'getid': statevalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#state_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.stateEdit', function() {
            var tabledata = $('#state_data').DataTable();
            var state = tabledata.row($(this).closest('tr')).data();
            var statevalue = state[Object.keys(state)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('state-edit') ?>",
                data: {
                    'getid': statevalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#st_id').val(value['St_ID']);
                        $('#st_name').val(value['St_Name']);


                        var displaycard = document.getElementById("stateaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_statetitle").innerText = "state Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_statetitle').innerText = "";
                            document.getElementById('card_statetitle').innerText = "state Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function state_cleardata() {
            $('#st_id').val('');
            $('#st_name').val('');

        }

        function state_chechdata() {
            if ($.trim($('.st_name').val()).length == 0) {
                error_st_name = "plz, input the State";
                $('#error_st_name').text(error_st_name);
            } else {
                error_st_name = "";
                $('#error_st_name').text(error_st_name);
            }
           


        }

        function state_insert() {
            var data = {
                'st_name': $('.st_name').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('state-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#state_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }

      
        function state_fetch() {

            $(document).ready(function() {

                var tabledata = $('#state_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('state-fetch') ?>",


                    },

                    "columns": [{
                            "data": "St_ID"
                        },
                        {
                            "data": "St_Name"
                        },
                        
                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 stateEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 stateDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 stateDisplay"><i class="bi bi-info"></i></button>' : data;
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

        function state_update() {
            var data = {
                'st_id': $('.st_id').val(),
                'st_name': $('.st_name').val(),


            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('state-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#state_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }
    </script>


    <?= $this->endSection() ?>