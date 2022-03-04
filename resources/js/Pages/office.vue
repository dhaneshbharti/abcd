<!--<template>-->



<!--    <!DOCTYPE html>-->
<!--    <html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->

<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>Event Management</title>-->

<!--    &lt;!&ndash; Google Font: Source Sans Pro &ndash;&gt;-->
<!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
<!--    &lt;!&ndash; Font Awesome &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/plugins/fontawesome-free/css/all.min.css">-->
<!--    &lt;!&ndash; Ionicons &ndash;&gt;-->
<!--    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
<!--    &lt;!&ndash; Tempusdominus Bootstrap 4 &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">-->
<!--    &lt;!&ndash; iCheck &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">-->
<!--    &lt;!&ndash; JQVMap &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/plugins/jqvmap/jqvmap.min.css">-->
<!--    &lt;!&ndash; Theme style &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/dist/css/adminlte.min.css">-->
<!--    &lt;!&ndash; overlayScrollbars &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">-->
<!--    &lt;!&ndash; Daterange picker &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/plugins/daterangepicker/daterangepicker.css">-->
<!--    &lt;!&ndash; summernote &ndash;&gt;-->
<!--    <link rel="stylesheet" href="/adminpanel/plugins/summernote/summernote-bs4.min.css">-->
<!--</head>-->
<!--<body class="hold-transition sidebar-mini layout-fixed">-->
<!--    <div class="wrapper">-->
<!--        &lt;!&ndash; Preloader &ndash;&gt;-->
<!--        <div class="preloader flex-column justify-content-center align-items-center">-->
<!--            <img class="animation__shake" src="/adminpanel/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
<!--        </div>-->
<!--        &lt;!&ndash; Navbar &ndash;&gt;-->
<!--        <nav class="main-header navbar navbar-expand navbar-white navbar-light">-->
<!--            &lt;!&ndash; Left navbar links &ndash;&gt;-->
<!--            <ul class="navbar-nav">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>-->
<!--                </li>-->
<!--            </ul>-->



<!--            <center>-->
<!--Date & Time :&nbsp;<label style="color:orange" id="lblDateTime"></label>-->
<!--            </center>-->

<!--            &lt;!&ndash; Right navbar links &ndash;&gt;-->
<!--            <ul class="navbar-nav ml-auto">-->

<!--                &lt;!&ndash; Messages Dropdown Menu &ndash;&gt;-->
<!--                <li class="nav-item dropdown" style="display:none;">-->
<!--                    <a class="nav-link" data-toggle="dropdown" href="#">-->
<!--                        <i class="far fa-comments"></i>-->
<!--                        <span class="badge badge-danger navbar-badge">3</span>-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
<!--                        <a href="#" class="dropdown-item">-->
<!--                            &lt;!&ndash; Message Start &ndash;&gt;-->
<!--                            <div class="media">-->
<!--                                <img src="/adminpanel/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">-->
<!--                                <div class="media-body">-->
<!--                                    <h3 class="dropdown-item-title">-->
<!--Brad Diesel-->
<!--<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>-->
<!--                                    </h3>-->
<!--                                    <p class="text-sm">Call me whenever you can...</p>-->
<!--                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; Message End &ndash;&gt;-->
<!--                        </a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item">-->
<!--                            &lt;!&ndash; Message Start &ndash;&gt;-->
<!--                            <div class="media">-->
<!--                                <img src="/adminpanel/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
<!--                                <div class="media-body">-->
<!--                                    <h3 class="dropdown-item-title">-->
<!--John Pierce-->
<!--<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
<!--                                    </h3>-->
<!--                                    <p class="text-sm">I got your message bro</p>-->
<!--                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; Message End &ndash;&gt;-->
<!--                        </a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item">-->
<!--                            &lt;!&ndash; Message Start &ndash;&gt;-->
<!--                            <div class="media">-->
<!--                                <img src="/adminpanel/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
<!--                                <div class="media-body">-->
<!--                                    <h3 class="dropdown-item-title">-->
<!--Nora Silvester-->
<!--<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
<!--                                    </h3>-->
<!--                                    <p class="text-sm">The subject goes here</p>-->
<!--                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; Message End &ndash;&gt;-->
<!--                        </a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                &lt;!&ndash; Notifications Dropdown Menu &ndash;&gt;-->
<!--                <li class="nav-item dropdown" style="display:none;">-->
<!--                    <a class="nav-link" data-toggle="dropdown" href="#">-->
<!--                        <i class="far fa-bell"></i>-->
<!--                        <span class="badge badge-warning navbar-badge">15</span>-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
<!--                        <span class="dropdown-item dropdown-header">15 Notifications</span>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item">-->
<!--                            <i class="fas fa-envelope mr-2"></i> 4 new messages-->
<!--<span class="float-right text-muted text-sm">3 mins</span>-->
<!--                        </a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item">-->
<!--                            <i class="fas fa-users mr-2"></i> 8 friend requests-->
<!--<span class="float-right text-muted text-sm">12 hours</span>-->
<!--                        </a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item">-->
<!--                            <i class="fas fa-file mr-2"></i> 3 new reports-->
<!--<span class="float-right text-muted text-sm">2 days</span>-->
<!--                        </a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link" href="/login/logout">-->
<!--                        <i class="fas fa-sign-out-alt" title="Logout"></i>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--        &lt;!&ndash; /.navbar &ndash;&gt;-->
<!--        &lt;!&ndash; Content Wrapper. Contains page content &ndash;&gt;-->
<!--        <div class="content-wrapper">-->






<!--<script type="text/javascript">-->
<!--    var _timer = setInterval(function () {-->
<!--    Timer()-->
<!--    }, 1000);-->
<!--    function Timer() {-->
<!--        var _day = new Date();-->
<!--        var _time = _day.toLocaleTimeString();-->
<!--        document.getElementById("lblDateTime").innerHTML = new Date().toLocaleDateString() + ', ' + _time;-->
<!--    }-->
<!--</script>-->

<!--    <aside class="main-sidebar sidebar-dark-primary elevation-4">-->
<!--        &lt;!&ndash; Sidebar &ndash;&gt;-->
<!--        <div class="sidebar">-->
<!--            &lt;!&ndash; Sidebar user panel (optional) &ndash;&gt;-->
<!--            <div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
<!--                <div class="image">-->
<!--                    <img src="/adminpanel/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
<!--                </div>-->
<!--                <div class="info">-->
<!--                    <a href="#" class="d-block">Welcome <b>Admin </b></a>-->
<!--                    <a href="#" class="d-block">Role : <b>Admin</b></a>-->
<!--                    &lt;!&ndash;<span style="color:white;">Date & Time :</span><br />-->
<!--                    <span style="color:orange;">&ndash;&gt;-->

<!--                    &lt;!&ndash;<label style="color:orange" id="lblDateTime"></label>-->
<!--                    </span>&ndash;&gt;-->
<!--                </div>-->

<!--            </div>-->

<!--            &lt;!&ndash; Sidebar Menu &ndash;&gt;-->
<!--            <nav class="mt-2">-->
<!--                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">-->
<!--                    &lt;!&ndash; Add icons to the links using the .nav-icon class-->
<!--    with font-awesome or any other icon font library &ndash;&gt;-->
<!--                    <li>-->
<!--                        <a href="/admin/index" class="nav-link active">-->
<!--                            <i class="fas fa-tachometer-alt"></i>-->
<!--                            <p>Dashboard</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/admin/eventmaster" class="nav-link">-->
<!--                            <i class="fa fa-calendar" aria-hidden="true"></i>-->
<!--                            <p>Add Event</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/admin/eventlist" class="nav-link">-->
<!--                            <i class="fas fa-list"></i>-->
<!--                            <p>Event List</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/admin/category" class="nav-link">-->
<!--                            <i class="fa fa-list-alt" aria-hidden="true"></i>-->
<!--                            <p>Add Category</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/admin/categorylist" class="nav-link">-->
<!--                            <i class="fas fa-list"></i>-->
<!--                            <p>Category List</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/admin/participantlist" class="nav-link">-->
<!--                            <i class="fa fa-users" aria-hidden="true"></i>-->
<!--                            <p>Participant List</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/admin/winnerlist" class="nav-link">-->
<!--                            <i class="fa fa-trophy" aria-hidden="true"></i>-->
<!--                            <p>Winner List</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="/admin/errorlog" class="nav-link">-->
<!--                            <i class="fas fa-bug"></i>-->
<!--                            <p>Error Log</p>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </nav>-->
<!--            &lt;!&ndash; /.sidebar-menu &ndash;&gt;-->
<!--        </div>-->
<!--        &lt;!&ndash; /.sidebar &ndash;&gt;-->
<!--    </aside>-->

<!--    &lt;!&ndash; Content Header (Page header) &ndash;&gt;-->
<!--    <div class="content-header">-->
<!--        <div class="container-fluid">-->
<!--            <div class="row mb-2">-->
<!--                <div class="col-sm-6">-->
<!--                    <h1 class="m-0">Dashboard</h1>-->
<!--                </div>&lt;!&ndash; /.col &ndash;&gt;-->
<!--                <div class="col-sm-6">-->
<!--                    <ol class="breadcrumb float-sm-right">-->
<!--                        <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                        <li class="breadcrumb-item active">Dashboard</li>-->
<!--                    </ol>-->
<!--                </div>&lt;!&ndash; /.col &ndash;&gt;-->
<!--            </div>&lt;!&ndash; /.row &ndash;&gt;-->
<!--        </div>&lt;!&ndash; /.container-fluid &ndash;&gt;-->
<!--    </div>-->
<!--    &lt;!&ndash; /.content-header &ndash;&gt;-->
<!--    &lt;!&ndash; Main content &ndash;&gt;-->
<!--    <section class="content">-->
<!--        <div class="container-fluid">-->
<!--            &lt;!&ndash; Small boxes (Stat box) &ndash;&gt;-->
<!--            <div class="row">-->
<!--                <div class="col-lg-3 col-6">-->
<!--                    &lt;!&ndash; small box &ndash;&gt;-->
<!--                    <div class="small-box bg-info">-->
<!--                        <div class="inner">-->
<!--                            <h3>3</h3>-->
<!--                            <p>Total <b>Events</b></p>-->
<!--                        </div>-->
<!--                        <div class="icon">-->
<!--                            <i class="fa fa-calendar" aria-hidden="true"></i>-->
<!--                        </div>-->
<!--                        <a href="/admin/eventlist" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                &lt;!&ndash; ./col &ndash;&gt;-->
<!--                <div class="col-lg-3 col-6">-->
<!--                    &lt;!&ndash; small box &ndash;&gt;-->
<!--                    <div class="small-box bg-warning">-->
<!--                        <div class="inner">-->
<!--                            <h3 style="color:white;">7</h3>-->
<!--                            <p style="color:white;">Total <b>Category</b></p>-->
<!--                        </div>-->
<!--                        <div class="icon">-->
<!--                            <i class="fa fa-list-alt" aria-hidden="true"></i>-->
<!--                        </div>-->
<!--                        <a href="/admin/categorylist" class="small-box-footer"><span style="color:white;">View <i class="fas fa-arrow-circle-right"></i></span></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                &lt;!&ndash; ./col &ndash;&gt;-->
<!--                <div class="col-lg-3 col-6">-->
<!--                    &lt;!&ndash; small box &ndash;&gt;-->
<!--                    <div class="small-box bg-success">-->
<!--                        <div class="inner">-->
<!--                            <h3>3<sup style="font-size: 20px;"></sup></h3>-->
<!--                            <p>Total <b>Participants</b></p>-->
<!--                        </div>-->
<!--                        <div class="icon">-->
<!--                            <i class="fa fa-users" aria-hidden="true"></i>-->
<!--                        </div>-->
<!--                        <a href="/admin/participantlist" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                &lt;!&ndash; ./col &ndash;&gt;-->
<!--                <div class="col-lg-3 col-6">-->
<!--                    &lt;!&ndash; small box &ndash;&gt;-->
<!--                    <div class="small-box bg-danger">-->
<!--                        <div class="inner">-->
<!--                            <h3>2</h3>-->
<!--                            <p>Total <b>Winner</b></p>-->
<!--                        </div>-->
<!--                        <div class="icon">-->
<!--                            <i class="fa fa-trophy" aria-hidden="true" style="color:gold;"></i>-->
<!--                        </div>-->
<!--                        <a href="/admin/winnerlist" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                &lt;!&ndash; ./col &ndash;&gt;-->
<!--            </div>-->
<!--            &lt;!&ndash; /.row &ndash;&gt;-->
<!--        </div>&lt;!&ndash; /.container-fluid &ndash;&gt;-->
<!--    </section>-->
<!--    &lt;!&ndash; /.content &ndash;&gt;-->
<!--    </div>-->
<!--    &lt;!&ndash; /.content-wrapper &ndash;&gt;-->
<!--    <footer class="main-footer">-->
<!--        <center>-->
<!--            Designed & developed By <a href="http://dev.spindales.com/" target="_blank"><u>Spindales</u></a> |-->
<!--            <strong>Copyright &copy; 2021-22</strong>-->
<!--            All rights reserved.-->
<!--        </center>-->

<!--    </footer>-->
<!--    &lt;!&ndash; Control Sidebar &ndash;&gt;-->
<!--    &lt;!&ndash;<aside class="control-sidebar control-sidebar-dark">&ndash;&gt;-->
<!--    &lt;!&ndash; Control sidebar content goes here &ndash;&gt;-->
<!--    &lt;!&ndash;</aside>&ndash;&gt;-->
<!--    &lt;!&ndash; /.control-sidebar &ndash;&gt;-->
<!--    </div>-->
<!--    &lt;!&ndash; ./wrapper &ndash;&gt;-->
<!--    &lt;!&ndash; jQuery &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/jquery/jquery.min.js"></script>-->
<!--    &lt;!&ndash; jQuery UI 1.11.4 &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/jquery-ui/jquery-ui.min.js"></script>-->
<!--    &lt;!&ndash; Resolve conflict in jQuery UI tooltip with Bootstrap tooltip &ndash;&gt;-->
<!--    <script>$.widget.bridge('uibutton', $.ui.button)</script>-->
<!--    &lt;!&ndash; Bootstrap 4 &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>-->
<!--    &lt;!&ndash; ChartJS &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/chart.js/Chart.min.js"></script>-->
<!--    &lt;!&ndash; Sparkline &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/sparklines/sparkline.js"></script>-->
<!--    &lt;!&ndash; JQVMap &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/jqvmap/jquery.vmap.min.js"></script>-->
<!--    <script src="/adminpanel/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>-->
<!--    &lt;!&ndash; jQuery Knob Chart &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/jquery-knob/jquery.knob.min.js"></script>-->
<!--    &lt;!&ndash; daterangepicker &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/moment/moment.min.js"></script>-->
<!--    <script src="/adminpanel/plugins/daterangepicker/daterangepicker.js"></script>-->
<!--    &lt;!&ndash; Tempusdominus Bootstrap 4 &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>-->
<!--    &lt;!&ndash; Summernote &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/summernote/summernote-bs4.min.js"></script>-->
<!--    &lt;!&ndash; overlayScrollbars &ndash;&gt;-->
<!--    <script src="/adminpanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>-->
<!--    &lt;!&ndash; AdminLTE App &ndash;&gt;-->
<!--    <script src="/adminpanel/dist/js/adminlte.js"></script>-->
<!--    &lt;!&ndash; AdminLTE for demo purposes &ndash;&gt;-->
<!--    <script src="/adminpanel/dist/js/demo.js"></script>-->
<!--    &lt;!&ndash; AdminLTE dashboard demo (This is only for demo purposes) &ndash;&gt;-->
<!--    <script src="/adminpanel/dist/js/pages/dashboard.js"></script>-->

<!--    </body>-->
<!--    </html>-->

<!--</template>-->

<!--<script>-->
<!--    export default {-->
<!--        name: "office.vue"-->
<!--    }-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->