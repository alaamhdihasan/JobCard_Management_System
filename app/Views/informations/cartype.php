<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end cartypeAdd">Add cartype
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="cartype_data" class="table table-bordered table-striped cartype_data" cellspacing="0" width="100%">
                        <thead class="dataheader_cartype table-dark">
                            <tr>
                                <td>ID</td>
                                <td>CarType Name</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_cartype">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card cartypeaction" id="cartypeaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end cartypeClose">close
                    </button>
                    <h4 style="color: black;" id="card_cartypetitle" class="card_cartypetitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="ct_id" id="ct_id" class="form-control ct_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> cartype Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="ct_name" id="ct_name" class="form-control ct_name" autocomplete="off">
                                        <span id="error_ct_name" class="text-danger"></span>
                                    </div>

                                </div>




                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control cartypeSave">Save Data</button>
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
        cartype_fetch();
        $("#cartypeaction").hide();
        $(document).on('click', '.cartypeAdd', function() {
            var displaycard = document.getElementById("cartypeaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_cartypetitle").innerText = "Add New cartype";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_cartypetitle").innerText = "";
                cartype_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_cartypetitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.cartypeClose', function() {
            var displaycard = document.getElementById("cartypeaction");
            cartype_cleardata();
            document.getElementById("card_cartypetitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.cartypeSave', function() {

            var ct_id = document.getElementById("ct_id").value;

            if (ct_id == '') {

                cartype_chechdata();
                if (error_ct_name != '') {
                    return false;
                } else {
                    cartype_insert();
                    cartype_cleardata();
                }
            } else {
                cartype_update();
                cartype_cleardata();
            }

        });

        $(document).on('click', '.cartypeDelete', function() {
            var tabledata = $('#cartype_data').DataTable();
            var cartype = tabledata.row($(this).closest('tr')).data();
            var cartypevalue = cartype[Object.keys(cartype)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('cartype-delete') ?>",
                data: {
                    'getid': cartypevalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#cartype_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.cartypeEdit', function() {
            var tabledata = $('#cartype_data').DataTable();
            var cartype = tabledata.row($(this).closest('tr')).data();
            var cartypevalue = cartype[Object.keys(cartype)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('cartype-edit') ?>",
                data: {
                    'getid': cartypevalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#ct_id').val(value['Ct_ID']);
                        $('#ct_name').val(value['Ct_Name']);


                        var displaycard = document.getElementById("cartypeaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_cartypetitle").innerText = "cartype Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_cartypetitle').innerText = "";
                            document.getElementById('card_cartypetitle').innerText = "cartype Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function cartype_cleardata() {
            $('#ct_id').val('');
            $('#ct_name').val('');

        }

        function cartype_chechdata() {
            if ($.trim($('.ct_name').val()).length == 0) {
                error_ct_name = "plz, input the cartype";
                $('#error_ct_name').text(error_ct_name);
            } else {
                error_ct_name = "";
                $('#error_ct_name').text(error_ct_name);
            }
           


        }

        function cartype_insert() {
            var data = {
                'ct_name': $('.ct_name').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('cartype-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#cartype_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }

      
        function cartype_fetch() {

            $(document).ready(function() {

                var tabledata = $('#cartype_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('cartype-fetch') ?>",


                    },

                    "columns": [{
                            "data": "Ct_ID"
                        },
                        {
                            "data": "Ct_Name"
                        },
                        
                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 cartypeEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 cartypeDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 cartypeDisplay"><i class="bi bi-info"></i></button>' : data;
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

        function cartype_update() {
            var data = {
                'ct_id': $('.ct_id').val(),
                'ct_name': $('.ct_name').val(),


            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('cartype-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#cartype_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }
    </script>


    <?= $this->endSection() ?>