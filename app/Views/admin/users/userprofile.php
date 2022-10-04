<?= $this->extend('admin/layout/main') ?>
<?= $this->section('content') ?>

<div class="row border g-0 rounded shadow-sm">
    <div class="col p-4">
        <div class="col-md-12 mt-2">
            <div class="card usersprofilecard" id="usersprofilecard">
                <div class="card-header bg-info">
                    <a href="<?php echo base_url('users') ?>" class="btn btn-danger btn-sm m-1 mb-3 float-end usersClose">close
                    </a>
                    <h4 style="color: black;" id="card_usersprofile" class="card_usersprofile"> </h4>

                </div>
                <div class="card-body ">
                    <div class="row ">
                        <section style="background-color: #eee;">
                            <div class="container py-5">
                                <div class="row">
                                    <?php for ($i = 0; $i < count($userprofileinfo); $i++) : ?>
                                        <div class="col-lg-4">
                                            <div class="card mb-4">
                                                <div class="card-body text-center">
                                                    <img src="admin/assets/img/avatar.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">


                                                    <h5><?= $userprofileinfo[$i]->U_UserName ?></h5>

                                                    <p class="text-muted mb-1"><?= $userprofileinfo[$i]->U_Permission ?></p>
                                                    <p class="text-muted mb-4"><?= $userprofileinfo[$i]->U_State ?></p>
                                                    <p class="text-muted mb-4"><?= $userprofileinfo[$i]->U_WorkPlace ?></p>

                                                    <div class="d-flex justify-content-center mb-2">
                                                        <input type="file" class="form-control u_image" id="u_image" name="u_image"></input>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4 mb-lg-0">
                                                <div class="card-body p-0">
                                                    <ul class="list-group list-group-flush rounded-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                            <i class="fas fa-globe fa-lg text-warning"></i>
                                                            <p class="mb-0">https://mdbootstrap.com</p>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                            <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                                            <p class="mb-0">mdbootstrap</p>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                                            <p class="mb-0">@mdbootstrap</p>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                                            <p class="mb-0">mdbootstrap</p>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                                            <p class="mb-0">mdbootstrap</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">User Name:</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="u_username" id="u_username" class="form-control u_username" autocomplete="off">
                                                            <span id="error_u_username" class="text-danger"></span>
                                                            <input type="text" name="u_id" id="u_id" class="form-control u_id" autocomplete="off" value="<?= $userprofileinfo[$i]->U_ID ?>" hidden>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">User Password:</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="password" name="u_password" id="u_password" class="form-control u_password" autocomplete="off">
                                                            <span id="error_u_password" class="text-danger"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">User State:</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <select name="u_state" id="u_state" class="col-sm-11 col-form-label form-select u_state">

                                                            </select>
                                                            <span id="error_u_state" class="text-danger"></span>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">User Permissions:</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <select name="u_permission" id="u_permission" class="col-sm-11 col-form-label form-select u_permission">

                                                            </select>
                                                            <span id="error_u_permission" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">User Working Place:</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <select name="U_WorkPlace" id="U_WorkPlace" class="col-sm-11 col-form-label form-select U_WorkPlace">

                                                            </select>
                                                            <span id="error_U_WorkPlace" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Actions For Users</p>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Create :</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="p_id" id="p_id" class="form-control" hidden>
                                                            <input type="text" name="p_fk" id="p_fk" class="form-control" hidden>
                                                            <input type="checkbox" name="p_create" id="p_create" class="form-check-input" autocomplete="off">
                                                            <span id="error_p_create" class="text-danger"></span>

                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Update :</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="checkbox" name="p_update" id="p_update" class="form-check-input" autocomplete="off">
                                                            <span id="error_p_update" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-sm-3">
                                                            <p class="mb-0">Delete :</p>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="checkbox" name="p_delete" id="p_delete" class="form-check-input" autocomplete="off">
                                                            <span id="error_p_delete" class="text-danger"></span>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Visible For Users</p>
                                                    </div>
                                                    <div class="ms-12 row">
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Dashboard:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Dashboard" id="P_Dashboard" class="form-check-input" autocomplete="off">
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Users :</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Users" id="P_Users" class="form-check-input" autocomplete="off">
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <p class="mb-0">JobCard :</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_JobCard" id="P_JobCard" class="form-check-input" autocomplete="off">
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Orders :</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Orders" id="P_Orders" class="form-check-input" autocomplete="off">
                                                        </div>

                                                    </div>
                                                    <div class="ms-12 row mt-2">
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Reports:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Reports" id="P_Reports" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">State:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_State" id="P_State" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Brand:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Brand" id="P_Brand" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Color:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Color" id="P_Color" class="form-check-input" autocomplete="off">
                                                        </div>

                                                    </div>
                                                    <div class="ms-12 row mt-2">
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Permission:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Permission" id="P_Permission" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Car Type:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_CarType" id="P_CarType" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Company:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Company" id="P_Company" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Kind:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Kind" id="P_Kind" class="form-check-input" autocomplete="off">
                                                        </div>

                                                    </div>
                                                    <div class="ms-12 row mt-2">
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Model:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Model" id="P_Model" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Side:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Side" id="P_Side" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Unit:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Unit" id="P_Unit" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0" style="font-size:14px;">Specialization:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Specialization" id="P_Specialization" class="form-check-input" autocomplete="off">
                                                        </div>

                                                    </div>
                                                    <div class="ms-12 row mt-2">
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">City:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_City" id="P_City" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">WorkShops:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_WorkShops" id="P_WorkShops" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">WorkShop Place:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_WorkShopPlace" id="P_WorkShopPlace" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Workers:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Workers" id="P_Workers" class="form-check-input" autocomplete="off">
                                                        </div>

                                                    </div>
                                                    <div class="ms-12 row mt-2">
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Currency:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Currency" id="P_Currency" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Saling Group:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_SalingGroup" id="P_SalingGroup" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Accounts:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Accounts" id="P_Accounts" class="form-check-input" autocomplete="off">
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="mb-0">Customers:</p>
                                                        </div>
                                                        <div class="col-sm-auto">
                                                            <input type="checkbox" name="P_Customers" id="P_Customers" class="form-check-input" autocomplete="off">
                                                        </div>

                                                    </div>


                                                    <hr>
                                                    <button class="btn btn-success btn-sm m-1 userprofileSave">Save information</button>

                                                </div>
                                            </div>

                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    userprofile_fetchdata();

    function userprofile_fetchdata() {
        $(document).ready(function() {
            var uid = $('#u_id').val();
            var data = {
                'getid': uid,
            };
            $.ajax({
                type: "get",
                url: "<?= base_url('userprofile-fetch3') ?>",
                data: data,
                success: function(response) {
                    console.log(response);
                    $.each(response.userinfo, function(index, value) {
                        $('#u_username').val(value.U_UserName);
                        $('#u_password').val(value.U_Password);
                        $('#p_id').val(value.P_ID);
                        $('#p_fk').val(value.P_FK);
                        $('#p_create').prop('checked', value.P_Create);
                        $('#p_update').prop('checked', value.P_Update);
                        $('#p_delete').prop('checked', value.P_Delete);
                        $('#P_Dashboard').prop('checked', value.P_Dashboard);
                        $('#P_Users').prop('checked', value.P_Users);
                        $('#P_JobCard').prop('checked', value.P_JobCard);
                        $('#P_Orders').prop('checked', value.P_Orders);
                        $('#P_Reports').prop('checked', value.P_Reports);
                        $('#P_State').prop('checked', value.P_State);
                        $('#P_Brand').prop('checked', value.P_Brand);
                        $('#P_Color').prop('checked', value.P_Color);
                        $('#P_Permission').prop('checked', value.P_Permission);
                        $('#P_CarType').prop('checked', value.P_CarType);
                        $('#P_Company').prop('checked', value.P_Company);
                        $('#P_Kind').prop('checked', value.P_Kind);
                        $('#P_Model').prop('checked', value.P_Model);
                        $('#P_Side').prop('checked', value.P_Side);
                        $('#P_Unit').prop('checked', value.P_Unit);
                        $('#P_Specialization').prop('checked', value.P_Specialization);
                        $('#P_City').prop('checked', value.P_City);
                        $('#P_WorkShops').prop('checked', value.P_WorkShops);
                        $('#P_WorkShopPlace').prop('checked', value.P_WorkShopPlace);
                        $('#P_Workers').prop('checked', value.P_Workers);
                        $('#P_Currency').prop('checked', value.P_Currency);
                        $('#P_SalingGroup').prop('checked', value.P_SalingGroup);
                        $('#P_Accounts').prop('checked', value.P_Accounts);
                        $('#P_Customers').prop('checked', value.P_Customers);

                        $('#u_state').append('<option selected>' + value.U_State + '</option>');
                        $.each(response.getstate, function(ind, val) {
                            $('#u_state').append('<option value="' + val.St_Name + '">' + val.St_Name + '</option>');

                        });
                        $('#u_permission').append('<option selected>' + value.U_Permission + '</option>');
                        $.each(response.getpermission, function(ind, val) {
                            $('#u_permission').append('<option value="' + val.Pe_Name + '">' + val.Pe_Name + '</option>');

                        });
                        $('#U_WorkPlace').append('<option selected>' + value.U_WorkPlace + '</option>');
                        $.each(response.getworkplace, function(ind, val) {
                            $('#U_WorkPlace').append('<option value="' + val.Wsp_Name + '">' + val.Wsp_Name + '</option>');

                        });

                    });

                }
            });
        });
    }

    $(document).on('click', '.userprofileSave', function() {

        userprofile_checkdata();
        if (error_u_username != '' || error_u_password != '' || error_u_state != '' ||
            error_u_permission != '' || error_U_WorkPlace != '') {
            return false;

        } else {
            userprofile_update();

        }





    });


    function userprofile_update() {

        //    // var fileimage = $('.u_image')[0].files[0];
        //     var username = $('#u_username').val();
        //     var userpassword = $('#u_password').val();
        //     var userstate = $('#u_state').val();
        //     var userpermisson = $('#u_permisson').val();
        //     var pcreate = $('#p_create').val();
        //     var pupdate = $('#p_update').val();
        //     var pdelete = $('#p_delete').val();
        //     var userid = $('#u_id').val();
        //     var profileid = $('#p_id').val();
        //     var pfk = $('#p_fk').val();

        //     var fd = new FormData();
        //    // fd.append("u_image", fileimage);
        //     fd.append("userid", userid);
        //     fd.append("username", username);
        //     fd.append("password", userpassword);
        //     fd.append("state", userstate);
        //     fd.append("permission", userpermisson);
        //     fd.append("profileid", profileid);
        //     fd.append("profilefk", pfk);
        //     fd.append("create", pcreate);
        //     fd.append("update", pupdate);
        //     fd.append("delete", pdelete);

        var data = {
            'userid': $('#u_id').val(),
            'username': $('#u_username').val(),
            'password': $('#u_password').val(),
            'state': $('#u_state').val(),
            'permission': $('#u_permission').val(),
            'workPlace': $('#U_WorkPlace').val(),
            'profileid': $('#p_id').val(),
            'profilefk': $('#p_fk').val(),
            'create': (function() {
                if ($("#p_create").is(":checked")) {
                    return 1;

                } else return 0;
            })(),

            'update': (function() {
                if ($("#p_update").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'delete': (function() {
                if ($("#p_delete").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'dashboard': (function() {
                if ($("#P_Dashboard").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'users': (function() {
                if ($("#P_Users").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'jobcard': (function() {
                if ($("#P_JobCard").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'orders': (function() {
                if ($("#P_Orders").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'reports': (function() {
                if ($("#P_Reports").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'statevision': (function() {
                if ($("#P_State").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'brand': (function() {
                if ($("#P_Brand").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'color': (function() {
                if ($("#P_Color").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'permissionvision': (function() {
                if ($("#P_Permission").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'cartype': (function() {
                if ($("#P_CarType").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'company': (function() {
                if ($("#P_Company").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'kind': (function() {
                if ($("#P_Kind").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'model': (function() {
                if ($("#P_Model").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'side': (function() {
                if ($("#P_Side").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'unit': (function() {
                if ($("#P_Unit").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'specialization': (function() {
                if ($("#P_Specialization").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'city': (function() {
                if ($("#P_City").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'workshops': (function() {
                if ($("#P_WorkShops").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'workshopplace': (function() {
                if ($("#P_WorkShopPlace").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'workers': (function() {
                if ($("#P_Workers").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'currency': (function() {
                if ($("#P_Currency").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'salinggroup': (function() {
                if ($("#P_SalingGroup").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'accounts': (function() {
                if ($("#P_Accounts").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
            'customers': (function() {
                if ($("#P_Customers").is(":checked")) {
                    return 1;

                } else return 0;
            })(),
        
        };
        console.log(data);
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('userprofile-update') ?>",
            data: data,
            success: function(response) {

                alertify.set('notifier', 'position', 'top-right');

                alertify.success(response.status);
                userprofile_checkdata();
            }
        });
    }

    function userprofile_checkdata() {
        if ($.trim($('.u_username').val()).length == 0) {
            error_u_username = "يجب ادخال اسم المستخدم";
            $('#error_u_username').text(error_u_username);
        } else {
            error_u_username = "";
            $('#error_u_username').text(error_u_username);
        }
        if ($.trim($('.u_password').val()).length == 0) {
            error_u_password = " يجب ادخال الباسورد";
            $('#error_u_password').text(error_u_password);
        } else {
            error_u_password = "";
            $('#error_u_password').text(error_u_password);
        }
        if ($.trim($('.u_state').val()).length == 0) {
            error_u_state = "يجب ادخال حالة المستخدم";
            $('#error_u_state').text(error_u_state);
        } else {
            error_u_state = "";
            $('#error_u_state').text(error_u_state);
        }
        if ($.trim($('.u_permission').val()).length == 0) {
            error_u_permission = "يجب ادخال صلاحية المستخدم";
            $('#error_u_permission').text(error_u_permission);
        } else {
            error_u_permission = "";
            $('#error_u_permission').text(error_u_permission);
        }
        if ($.trim($('.U_WorkPlace').val()).length == 0) {
            error_U_WorkPlace = "يجب ادخال مكان عمل المستخدم";
            $('#error_U_WorkPlace').text(error_U_WorkPlace);
        } else {
            error_U_WorkPlace = "";
            $('#error_U_WorkPlace').text(error_U_WorkPlace);
        }

    }
</script>
<?= $this->endSection() ?>