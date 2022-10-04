<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end brandAdd">Add brand
                    </button>

                    <h4 style="color: black;"><?= $title ?> </h4>

                </div>
                <div class="card-body">

                    <table id="brand_data" class="table table-bordered table-striped brand_data" cellspacing="0" width="100%">
                        <thead class="dataheader_brand table-dark">
                            <tr>
                                <td>ID</td>
                                <td>brand Name</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_brand">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card brandaction" id="brandaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end brandClose">close
                    </button>
                    <h4 style="color: black;" id="card_brandtitle" class="card_brandtitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="b_id" id="b_id" class="form-control b_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> brand Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="b_name" id="b_name" class="form-control b_name" autocomplete="off">
                                        <span id="error_b_name" class="text-danger"></span>
                                    </div>

                                </div>


                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>

                                    <div class="ms-12 row pt-3">
                                        <label for="" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-2">
                                            <button class="btn btn-primary form-control brandSave">Save Data</button>
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
        brand_fetch();
        $("#brandaction").hide();
        $(document).on('click', '.brandAdd', function() {
            var displaycard = document.getElementById("brandaction");
            if (displaycard.style.display == "none") {
                document.getElementById("card_brandtitle").innerText = "Add New brand";
                displaycard.style.display = "block";
            } else {

                displaycard.style.display = "none";
                document.getElementById("card_brandtitle").innerText = "";
                brand_cleardata();
                displaycard.style.display = "block";
                document.getElementById("card_brandtitle").innerText = "Add New workers";

            }
        });
        $(document).on('click', '.brandClose', function() {
            var displaycard = document.getElementById("brandaction");
            brand_cleardata();
            document.getElementById("card_brandtitle").innerText = "";
            displaycard.style.display = "none";


        });

        $(document).on('click', '.brandSave', function() {

            var b_id = document.getElementById("b_id").value;

            if (b_id == '') {

                brand_chechdata();
                if (error_b_name != '') {
                    return false;
                } else {
                    brand_insert();
                    brand_cleardata();
                }
            } else {
                brand_update();
                brand_cleardata();
            }

        });

        $(document).on('click', '.brandDelete', function() {
            var tabledata = $('#brand_data').DataTable();
            var brand = tabledata.row($(this).closest('tr')).data();
            var brandvalue = brand[Object.keys(brand)[0]];

            $.ajax({
                type: "POST",
                url: "<?= base_url('brand-delete') ?>",
                data: {
                    'getid': brandvalue,
                },

                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    $('#brand_data').DataTable().ajax.reload();
                }
            });
        });

        $(document).on('click', '.brandEdit', function() {
            var tabledata = $('#brand_data').DataTable();
            var brand = tabledata.row($(this).closest('tr')).data();
            var brandvalue = brand[Object.keys(brand)[0]];
            $.ajax({
                type: "GET",
                url: "<?= base_url('brand-edit') ?>",
                data: {
                    'getid': brandvalue,
                },

                success: function(response) {

                    $.each(response, function(key, value) {

                        $('#b_id').val(value['B_ID']);
                        $('#b_name').val(value['B_Name']);


                        var displaycard = document.getElementById("brandaction");
                        if (displaycard.style.display == "none") {
                            document.getElementById("card_brandtitle").innerText = "brand Data Edit";
                            displaycard.style.display = "block";
                        } else {
                            displaycard.style.display = "none";
                            document.getElementById('card_brandtitle').innerText = "";
                            document.getElementById('card_brandtitle').innerText = "brand Data Edit";
                            displaycard.style.display = "block";

                        }

                    });

                }
            });
        });




        function brand_cleardata() {
            $('#b_id').val('');
            $('#b_name').val('');

        }

        function brand_chechdata() {
            if ($.trim($('.b_name').val()).length == 0) {
                error_b_name = "plz, input the brand";
                $('#error_b_name').text(error_b_name);
            } else {
                error_b_name = "";
                $('#error_b_name').text(error_b_name);
            }



        }

        function brand_insert() {
            var data = {
                'b_name': $('.b_name').val(),
            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('brand-store') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#brand_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }


        function brand_fetch() {

            $(document).ready(function() {

                var tabledata = $('#brand_data').DataTable({

                    "responsive": true,
                    "processing": true,
                    "serverSide": true,

                    "order": [],
                    "ajax": {
                        type: "GET",
                        url: "<?php echo base_url('brand-fetch') ?>",


                    },

                    "columns": [{
                            "data": "B_ID"
                        },
                        {
                            "data": "B_Name"
                        },

                        {
                            "data": null,
                            render: function(data, type) {
                                return type === 'display' ?
                                    '<button  class="btn btn-success btn-sm m-1 brandEdit"><i class="bi bi-pen"></i> Edit </button>' +
                                    '<button  class="btn btn-danger btn-sm m-1 brandDelete"><i class="bi bi-trash"></i> Del </button>' +
                                    '<button  class="btn btn-secondary btn-sm m-1 brandDisplay"><i class="bi bi-info"></i></button>' : data;
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

        function brand_update() {
            var data = {
                'b_id': $('.b_id').val(),
                'b_name': $('.b_name').val(),


            };
            $.ajax({
                method: "POST",
                url: "<?php echo base_url('brand-update') ?>",
                data: data,
                success: function(response) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.status);
                    var tabldata = $('#brand_data').DataTable();
                    tabldata.ajax.reload();


                }
            });
        }


       
    </script>


    <?= $this->endSection() ?>