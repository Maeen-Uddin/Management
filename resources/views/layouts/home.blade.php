<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 13:56:54 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Moltran - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <base href="/public">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">
    @stack('css')

    <!-- Plugins css-->
    <link href="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('backend') }}/assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables/fixedHeader.bootstrap4.min.html" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('backend') }}/assets/libs/datatables/scroller.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend') }}/assets/images/flags/us.jpg" alt="user-image" class="mr-2"
                            height="12"> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/germany.jpg" alt="user-image"
                                class="mr-2" height="12">
                            <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/italy.jpg" alt="user-image"
                                class="mr-2" height="12">
                            <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/spain.jpg" alt="user-image"
                                class="mr-2" height="12">
                            <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{ asset('backend') }}/assets/images/flags/russia.jpg" alt="user-image"
                                class="mr-2" height="12">
                            <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </li>

                <li class="dropdown notification-list d-none d-md-inline-block">
                    <a href="#" id="btn-fullscreen" class="nav-link waves-effect waves-light">
                        <i class="mdi mdi-crop-free noti-icon"></i>
                    </a>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell noti-icon"></i>
                        <span class="badge badge-danger rounded-circle noti-icon-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 m-0">
                                <span class="float-right">
                                    <a href="#" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon">
                                    <i class="fa fa-user-plus text-info"></i>
                                </div>
                                <p class="notify-details">New user registered
                                    <small class="noti-time">You have 10 unread messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon text-success">
                                    <i class="far fa-gem text-primary"></i>
                                </div>
                                <p class="notify-details">New settings
                                    <small class="noti-time">There are new settings available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon text-danger">
                                    <i class="far fa-bell text-danger"></i>
                                </div>
                                <p class="notify-details">Updates
                                    <small class="noti-time">There are 2 new updates available</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center notify-item notify-all">
                            See all notifications
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend') }}/assets/images/users/avatar-1.jpg" alt="user-image"
                            class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-face-profile"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-power-settings"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="mdi mdi-settings-outline noti-icon"></i>
                    </a>
                </li>


            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('backend') }}/assets/images/logo-dark.png" alt="" height="16">
                        <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">M</span> -->
                        <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="" height="25">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('backend') }}/assets/images/logo-light.png" alt=""
                            height="16">
                        <!-- <span class="logo-lg-text-dark">Moltran</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">M</span> -->
                        <img src="{{ asset('backend') }}/assets/images/logo-sm.png" alt="" height="25">
                    </span>
                </a>
            </div>

            <!-- LOGO -->


            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.partials.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                @yield('content')
                <!-- end container-fluid -->

            </div>
            <!-- end content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            2016 - 2020 &copy; Moltran theme by <a href="#">Coderthemes</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-17 m-0 text-white">Theme Customizer</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, layout, etc.
                </div>
                <div class="mb-2">
                    <img src="{{ asset('backend') }}/assets/images/layouts/light.png" class="img-fluid img-thumbnail"
                        alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch"
                        checked />
                    <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('backend') }}/assets/images/layouts/dark.png" class="img-fluid img-thumbnail"
                        alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css"
                        data-appStyle="assets/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="{{ asset('backend') }}/assets/images/layouts/rtl.png" class="img-fluid img-thumbnail"
                        alt="">
                </div>
                <div class="custom-control custom-switch mb-5">
                    <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

                <a href="https://bit.ly/2QMLoUn" class="btn btn-danger btn-block mt-3" target="_blank"><i
                        class="mdi mdi-download mr-1"></i> Download Now</a>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
        <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
    </a>

    <!-- Vendor js -->
    <script src="{{ asset('backend') }}/assets/js/vendor.min.js"></script>

    <script src="{{ asset('backend') }}/assets/libs/moment/moment.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/jquery-scrollto/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Chat app -->
    <script src="{{ asset('backend') }}/assets/js/pages/jquery.chat.js"></script>

    <!-- Todo app -->
    <script src="{{ asset('backend') }}/assets/js/pages/jquery.todo.js"></script>

    <!-- flot chart -->
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.time.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.selection.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.stack.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/flot-charts/jquery.flot.crosshair.js"></script>
    @stack('js')
    <!-- Dashboard init JS -->
    <script src="{{ asset('backend') }}/assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="{{ asset('backend') }}/assets/js/app.min.js"></script>

    <script src="{{ asset('backend') }}/assets/libs/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('backend') }}/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/responsive.bootstrap4.min.js"></script>

    <script src="{{ asset('backend') }}/assets/libs/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/buttons.print.min.js"></script>

    <script src="{{ asset('backend') }}/assets/libs/datatables/dataTables.fixedHeader.min.html"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('backend') }}/assets/libs/datatables/dataTables.scroller.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages/datatables.init.js"></script>

</body>


<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Feb 2023 13:58:07 GMT -->

</html>
