<!DOCTYPE html5>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>JobCard_Management_System</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="admin/assets/ionicons-2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="admin/assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/assets/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="admin/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="admin/assets/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="admin/assets/css/fonts.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="admin/assets/img/crud_logo.png" />
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/bootstrap.min.css'); ?> " />
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/dataTables.bootstrap5.min.css'); ?> " />
    <link rel="stylesheet" href=" <?php echo base_url('admin/assets/css/buttons.bootstrap5.min.css'); ?> ">
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/style.css'); ?> " />
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('admin/assets/css/bootstrap-icons.css'); ?>" />
    <link rel="stylesheet" href="admin/assets/bootstrap-icons-1.4.1/bootstrap-icons.css" />
    <link rel="stylesheet" href=" <?php echo base_url('admin/assets/css/style2.css'); ?> ">
    <link rel="stylesheet" href=" <?php echo base_url('admin/assets/css/alertify.css'); ?> ">
    <link rel="stylesheet" href=" <?php echo base_url('admin/assets/css/alertify.min.css'); ?> ">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/assets/css/datatables.min.css') ?>" />


    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/jquery-3.6.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/datatables.min.js')  ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/dataTables.bootstrap5.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/dataTables.buttons.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/buttons.bootstrap5.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/jszip.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/pdfmake.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/vfs_fonts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/buttons.html5.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/buttons.print.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/buttons.colVis.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/dataTables.responsive.min.js') ?>"></script>


    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/pro_js/ai.js') ?>"></script>



   





</head>

<body class="hold-transition sidebar-mini layout-fixed">


    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="admin/assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="admin/assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="admin/assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="admin/assets/img/crud_logo.png" alt="CI4 CRUD Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light font-weight-bold">JobCard_System</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="admin/assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" >
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $userName  ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <?= $this->include('admin/cmps/nav') ?>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?= view_cell('\App\Libraries\Admin::title', ['title' => @$title]) ?>
            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                    <?= $this->renderSection('scripts') ?>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- <footer class="main-footer fixed-bottom">
            <strong>Copyright &copy; 2022 <a href="">Mechanisms2020@Gmail.com</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>









    <!-- ./wrapper -->

    <!-- jQuery -->


    <!-- <script src="<?php echo base_url('admin/assets/plugins/jquery/jquery-3.6.0.min.js')  ?>"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <!-- <script src="<?php echo base_url('admin/assets/plugins/jquery-ui/jquery-ui.min.js')  ?>"></script> -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script> -->
    <!-- Bootstrap 4 -->
    <!-- <script src="<?php echo base_url('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
    <!-- ChartJS -->
    <script src="<?php echo base_url('admin/assets/plugins/chart.js/Chart.min.js')  ?>"></script>
    <!-- Sparkline -->
    <!-- <script src="<?php echo base_url('admin/assets/plugins/sparklines/sparkline.js') ?>"></script> -->
    <!-- JQVMap -->
    <!-- <script src="<?php echo base_url('admin/assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script> -->
    <!-- <script src="<?php echo base_url('admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('admin/assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('admin/assets/plugins/moment/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('admin/assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url('admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url('admin/assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('admin/assets/js/adminlte.js') ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?php echo base_url('admin/assets/js/pages/dashboard.js') ?>"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="admin/assets/js/demo.js"></script>

    <!-- <script type="text/javascript" src="<?php echo base_url('admin/assets/js/bootstrap.bundle.min.js') ?>"></script> -->
    <!-- <script type="text/javascript" src="<?php echo base_url('admin/assets/js/jquery.dataTables.min.js') ?>"></script> -->
    <!-- <script type="text/javascript" src="<?php echo base_url('admin/assets/js/dataTables.min.js') ?>"></script> -->
    <!-- <script type="text/javascript" src="<?php echo base_url('admin/assets/js/dataTables.bootstrap5.min.js') ?>"></script>  -->

    <!-- <script type="text/javascript" src="<?php echo base_url('admin/assets/js/jquery-3.6.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/jquery-ui.min.js') ?>"></script>  -->
    <!-- <script type="text/javascript" src="<?php echo base_url('admin/assets/js/propper.min.js') ?>"></script>  -->
    <!-- <script type="text/javascript" src="<?php echo base_url('admin/assets/plugins/jquery/jquery.slim.min.js') ?>"></script>  -->
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/script.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/alertify.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('admin/assets/js/alertify.min.js') ?>"></script>






    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('#mytable').dataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "لا توجد بيانات",
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty": "Showing 0 to 0 of 0 entries",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "عرض _MENU_ المدخلات",
                    "loadingRecords": "Loading...",
                    "processing": "Processing...",
                    "search": "بحث:",
                    "zeroRecords": "لا توجد بيانات مطابقة لعملية البحث",
                    "paginate": {
                        "first": "الاول",
                        "last": "الاخير",
                        "next": "التالي",
                        "previous": "السابق"
                    },
                    "aria": {
                        "sortAscending": ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                },
                // "dom": '<"top float-start p-2"lf>rt<"bottom float-start"ip>',
                "dom": ' <"top"l><"search float-start p-2"f>rt<"bottom float-start"p><"clear">'


            });
        });
    </script> -->

</body>

</html>