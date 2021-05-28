<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>VALUTA | Virtual Laboratorium Basis Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Virtual Laboratorium Basis Data" name="description" />
    <meta content="@dhykdika" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Table dashboard css -->
    <link href="assets/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

       <!-- Form advanced css -->
       <link href="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/multiselect/multi-select.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />

     <!-- Table datatable css -->
     <link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables/fixedColumns.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">




                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="d-none d-sm-inline-block ml-1">Alex M.</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Ganti Password</span>
                        </a>



                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect">
                        <i class="mdi mdi-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="18">
                        <!-- <span class="logo-lg-text-light">Zircos</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">Z</span> -->
                        <img src="assets/images/logo.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>




            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                      

                        <li>
                            <a href="<?= base_url() . '/dashboard' ?>" class="waves-effect waves-light">
                                <i class="mdi mdi-view-dashboard"></i>
                                
                                <span> Dashboard </span>
                            </a>

                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect waves-light">
                                <i class=" mdi mdi-file-question "></i>
                                <span> Soal </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="<?= base_url() . '/paket' ?>">Daftar Paket Soal</a></li>
                                <li><a href="<?= base_url() . '/paket_baru' ?>">Paket Soal Baru</a></li>
                                <li><a href="<?= base_url() . '/soal' ?>">Daftar Soal</a></li>
                                <li><a href="<?= base_url() . '/soal_baru' ?>">Soal Baru</a></li>
                               

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect waves-light">
                                <i class="mdi mdi-test-tube "></i>
                                <span> Sesi Ujian </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li><a href="<?= base_url() . '/sesi' ?>">Daftar Sesi Ujian</a></li>
                                <li><a href="<?= base_url() . '/sesi_baru' ?>">Sesi Ujian Baru</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect waves-light">
                                <i class="mdi mdi-account-box "></i>
                                <span> Peserta </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">

                                <li><a href="<?= base_url() . '/grup' ?>">Daftar Grup Peserta</a></li>
                                <li><a href="<?= base_url() . '/grup_baru' ?>">Grup Peserta Baru</a></li>
                                <li><a href="<?= base_url() . '/peserta' ?>">Daftar Peserta</a></li>
                                <li><a href="<?= base_url() . '/peserta_baru' ?>">Peserta Baru</a></li>

                            </ul>
                        </li>


                    </ul>

                </div>
                <!-- End Sidebar -->


            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->