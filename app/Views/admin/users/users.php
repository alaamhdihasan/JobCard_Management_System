<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>
<?= $table ?>
<div class="row border g-0 rounded shadow-sm ">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card ">
                <div class="card-header bg-info">

                    <button class="btn btn-primary btn-sm m-1 float-end usersAdd">Add User
                    </button>

                    <h4 style="color: black;"> Users </h4>

                </div>
                <div class="card-body">

                    <table id="users_data" class="table table-bordered table-striped users_data" cellspacing="0" width="100%">
                        <thead class="dataheader_users table-dark">
                            <tr>
                                <td>ID</td>
                                <td>UserName</td>
                                <td>User State</td>
                                <td>User Permission</td>
                                <td>Event</td>
                            </tr>
                        </thead>
                        <tbody class="databody_users">

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12 mt-5">
            <div class="card usersaction" id="usersaction">
                <div class="card-header bg-info">
                    <button class="btn btn-danger btn-sm m-1 mb-3 float-end usersClose">close
                    </button>
                    <h4 style="color: black;" id="card_userstitle" class="card_userstitle"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <!-- <form> -->

                        <div class="col-md-12 ">
                            <div class="form-group ">
                                <div class="ms-12 row pt-3">
                                    <div class="col-sm-auto">
                                        <input type="text" name="u_id" id="u_id" class="form-control u_id" hidden>

                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> User Name :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="text" name="u_username" id="u_username" class="form-control u_username" autocomplete="off">
                                        <span id="error_u_username" class="text-danger"></span>
                                    </div>

                                </div>
                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> Password :
                                    </label>
                                    <div class="col-sm-3">
                                        <input type="password" name="u_password" id="u_password" class="form-control u_password" autocomplete="off">
                                        <span id="error_u_password" class="text-danger"></span>
                                    </div>

                                </div>


                                <div class="ms-12 row pt-3">

                                    <label for="" class="col-sm-2 col-form-label"> User_State :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="u_state" id="u_state" class="col-sm-11 col-form-label form-select u_state">
                                            
                                        </select>
                                        <span id="error_u_state" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="ms-12 row pt-3">

                                    <label for="" class="col-sm-2 col-form-label"> User_Permission :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="u_permission" id="u_permission" class="col-sm-11 col-form-label form-select u_permission">
                                            
                                        </select>
                                        <span id="error_u_permission" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="ms-12 row pt-3">

                                    <label for="" class="col-sm-2 col-form-label"> User_WorkingPlace :
                                    </label>
                                    <div class="col-sm-3">
                                        <select name="U_WorkPlace" id="U_WorkPlace" class="col-sm-11 col-form-label form-select U_WorkPlace">
                                            
                                        </select>
                                        <span id="error_U_WorkPlace" class="text-danger"></span>
                                    </div>
                                </div>




                                <div>
                                    <?php echo '----------------------------------------------------------------------------------------' ?>
                                </div>

                                <div class="ms-12 row pt-3">
                                    <label for="" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary form-control usersSave">Save</button>
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
    fetchdata_users();
    users_filldata();
    $("#usersaction").hide();
    $(document).on('click', '.usersAdd', function() {
        var displaycard = document.getElementById("usersaction");
        if (displaycard.style.display == "none") {
            document.getElementById("card_userstitle").innerText = "Add New User";
            displaycard.style.display = "block";
        } else {

            displaycard.style.display = "none";
            document.getElementById("card_userstitle").innerText = "";
            cleardata_users();
            displaycard.style.display = "block";
            document.getElementById("card_userstitle").innerText = "Add New User";

        }
    });

    $(document).on('click', '.usersSave', function() {

        var u_id = document.getElementById("u_id").value;

        if (u_id == '') {

            checkdata_users();
            if (error_u_username != '' || error_u_password != '' || error_u_state != '' || error_u_permission != '') {
                return false;
            } else {
                insertdata_users();
                cleardata_users();
            }
        } else {
            updatedata_users();
            cleardata_users();
        }

    });

    $(document).on('click', '.usersDelete', function() {
        var tabledata = $('#users_data').DataTable();
        var userid = tabledata.row($(this).closest('tr')).data();
        var useridvalue = userid[Object.keys(userid)[0]];

        $.ajax({
            type: "POST",
            url: "<?= base_url('users-delete') ?>",
            data: {
                'getid': useridvalue,
            },

            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                $('#users_data').DataTable().ajax.reload();
            }
        });
    });

    $(document).on('click', '.usersClose', function() {
        var displaycard = document.getElementById("usersaction");
        cleardata_users();
        document.getElementById("card_userstitle").innerText = "";
        displaycard.style.display = "none";


    });

    // Edit Button in DataTable...
    $(document).on('click', '.usersEdit', function() {
        var tabledata = $('#users_data').DataTable();
        var userid = tabledata.row($(this).closest('tr')).data();
        var useridvalue = userid[Object.keys(userid)[0]];
        $.ajax({
            type: "GET",
            url: "<?= base_url('users-edit') ?>",
            data: {
                'getid': useridvalue,
            },

            success: function(response) {

                $.each(response, function(key, value) {

                    $('#u_id').val(value['U_ID']);
                    $('#u_username').val(value['U_UserName']);
                    $('#u_password').val(value['U_Password']);
                    $('#u_state').val(value['U_State']);
                    $('#u_permission').val(value['U_Permission']);
                    $('#U_WorkPlace').val(value['U_WorkPlace']);


                    var displaycard = document.getElementById("usersaction");
                    if (displaycard.style.display == "none") {
                        document.getElementById("card_userstitle").innerText = "Users Data Edit";
                        displaycard.style.display = "block";
                    } else {
                        displaycard.style.display = "none";
                        document.getElementById('card_userstitle').innerText = "";
                        document.getElementById('card_userstitle').innerText = "Users Data Edit";
                        displaycard.style.display = "block";

                    }

                });

            }
        });
    });

    $(document).on('click', '.usersEdit2', function() {
        var tabledata = $('#users_data').DataTable();
        var userid = tabledata.row($(this).closest('tr')).data();
        var useridvalue = userid[Object.keys(userid)[0]];


        var data = {
            'getid': useridvalue,
        };


        $.ajax({
            type: 'get',
            url: "<?= base_url('userprofile-fetch') ?>",
            data: data,
            success: function(response) {
                var pageName = "<?php echo base_url('userprofile-fetch2') ?>";
                window.location.href = pageName;

            }
        });
    });


    function cleardata_users() {
        $('#u_id').val('');
        $('#u_username').val('');
        $('#u_password').val('');
        $('#u_state').val('');
        $('#u_permission').val('');



    }

    function checkdata_users() {
        if ($.trim($('.u_username').val()).length == 0) {
            error_u_username = "plz, input the username";
            $('#error_u_username').text(error_u_username);
        } else {
            error_u_username = "";
            $('#error_u_username').text(error_u_username);
        }
        if ($.trim($('.u_password').val()).length == 0) {
            error_u_password = "plz, input the password";
            $('#error_u_password').text(error_u_password);
        } else {
            error_u_password = "";
            $('#error_u_password').text(error_u_password);
        }
        if ($.trim($('.u_state').val()).length == 0) {
            error_u_state = "plz, select the state";
            $('#error_u_state').text(error_u_state);
        } else {
            error_u_state = "";
            $('#error_u_state').text(error_u_state);
        }
        if ($.trim($('.u_permission').val()).length == 0) {
            error_u_permission = "plz, select the permission";
            $('#error_u_permission').text(error_u_permission);
        } else {
            error_u_permission = "";
            $('#error_u_permission').text(error_u_permission);
        }

    }

    function insertdata_users() {
        var data = {
            'u_username': $('.u_username').val(),
            'u_password': $('.u_password').val(),
            'u_state': $('.u_state').val(),
            'u_permission': $('.u_permission').val(),
            'U_WorkPlace': $('.U_WorkPlace').val(),


        };
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('users-store') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#users_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }

    function users_filldata() {
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('users-filldata') ?>",
                success: function(response) {
                    $('#u_state').empty();
                    $.each(response.getstate, function(indexInArray, valueOfElement) {
                            $('#u_state').append('<option value="' + valueOfElement.St_Name + '">' + valueOfElement.St_Name + '</option>');          
                    });
                    $('#u_permission').empty();
                    $.each(response.getpermission, function(indexInArray, valueOfElement) {
                            $('#u_permission').append('<option value="' + valueOfElement.Pe_Name + '">' + valueOfElement.Pe_Name + '</option>');          
                    });
                    $('#U_WorkPlace').empty();
                    $.each(response.getworkplace, function(indexInArray, valueOfElement) {
                            $('#U_WorkPlace').append('<option value="' + valueOfElement.Wsp_Name + '">' + valueOfElement.Wsp_Name + '</option>');          
                    });

                }
            });

        });
    }

    function fetchdata_users() {

        $(document).ready(function() {

            var tabledata = $('#users_data').DataTable({

                "responsive": true,
                "processing": true,
                "serverSide": true,

                "order": [],
                "ajax": {
                    type: "GET",
                    url: "<?php echo base_url('users-fetch') ?>",


                },

                "columns": [{
                        "data": "U_ID"
                    },
                    {
                        "data": "U_UserName"
                    },
                    {
                        "data": "U_State"
                    },
                    {
                        "data": "U_Permission"
                    },
                    {
                        "data": null,
                        render: function(data, type) {
                            return type === 'display' ?
                                '<button  class="btn btn-success btn-sm m-1 usersEdit2"><i class="bi bi-pen"></i> Edit </button>' +
                                '<button  class="btn btn-danger btn-sm m-1 usersDelete"><i class="bi bi-trash"></i> Del </button>' : data;
                        }
                    }



                ],
                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                }],
                "lengthMenu": [
                    [5, 10, 15, 20, 25, 100],
                    [5, 10, 15, 20, 25, 100]
                ]


            });




        });

    }

    function updatedata_users() {
        var data = {
            'u_id': $('.u_id').val(),
            'u_username': $('.u_username').val(),
            'u_password': $('.u_password').val(),
            'u_state': $('.u_state').val(),
            'u_permission': $('.u_permission').val(),
            'U_WorkPlace': $('.U_WorkPlace').val(),


        };
        $.ajax({
            method: "POST",
            url: "<?php echo base_url('users-update') ?>",
            data: data,
            success: function(response) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.success(response.status);
                var tabldata = $('#users_data').DataTable();
                tabldata.ajax.reload();


            }
        });
    }
</script>


<?= $this->endSection() ?>