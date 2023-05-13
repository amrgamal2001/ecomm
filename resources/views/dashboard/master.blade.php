<!DOCTYPE html>
<html @if(App::getLocale() == 'en') lang="en" @else lang="ar" @endif>
<head>
    <meta charset="UTF-8">
    {{-- <meta name="description" content="{{settings('description')}}"> --}}
    {{-- <meta name="keywords" content="{{settings('key_words')}}"> --}}
    <meta name="author" content="Abdelrahman">
    <meta name="robots" content="index/follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,, shrink-to-fit=no, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    {{-- <meta property="og:title" content="{{settings('site_name')}}" /> --}}
    {{-- <meta property="og:image" content="{{settings('site_logo')}}" /> --}}
    {{-- <meta property="og:description" content="{{settings('site_name')}}" /> --}}
    {{-- <meta property="og:site_name" content="{{settings('site_name')}}" /> --}}
    {{-- <link rel="shortcut icon" type="image/png" href="{{site_path()}}/images/favicon.jpg" /> --}}

    <title>{{settings('site_name')}} | @yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/fontawesome-free/css/all.min.css">
    <!-- drop -->
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/summernote/summernote-bs4.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- DataTables buttons-->
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/datatables-buttons/css/buttons.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{dashboard_path()}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{dashboard_path()}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{dashboard_path()}}/dist/css/style.css">
    @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-sm-inline-block">
                <a href="{{route('admin_logout')}}" class="nav-link">تسجيل الخروج</a>
            </li>
            {{-- <li class="nav-item  d-sm-inline-block">
                @if(App::getLocale() == 'en')
                    <a href="{{url('change-lang/ar')}}" class="nav-link">العربية</a>
                @else
                    <a href="{{url('change-lang/en')}}" class="nav-link">English</a>
                @endif
            </li> --}}
        </ul>

        <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="بحث" aria-label="Search">
        <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
        </button>
        </div>
    </div>
    </form> --}}

    <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                <img src="{{dashboard_path()}}/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
                <img src="{{dashboard_path()}}/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
                <img src="{{dashboard_path()}}/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
        </li> --}}
        <!-- Notifications Dropdown Menu -->
            {{-- <li class="nav-item dropdown">
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
                <a href="#" class="dropdown-item dropdown-footer">مشاهدة الكل</a>
                </div>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                    class="fas fa-th-large"></i></a>
            </li> --}}
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin_home')}}" class="brand-link">
            <img src="{{dashboard_path()}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">{{settings('site_name')}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{url('')}}/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('admin_home')}}" class="nav-link {{Route::currentRouteName() == 'admin_home' ? 'active' : ''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                الرئيسية
                            </p>
                        </a>
                    </li>
                    @if(Auth::id() == 1 || hasPermission('settings'))
                        <li class="nav-item">
                            <a href="{{url('settings')}}" class="nav-link {{Route::currentRouteName() == 'settings' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    الإعدادات
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('permissions'))
                        <li class="nav-item">
                            <a href="{{url('permissions')}}" class="nav-link {{Route::currentRouteName() == 'permissions' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-poll"></i>
                                <p>
                                    الصلاحيات
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('admins'))
                        <li class="nav-item">
                            <a href="{{url('admins')}}" class="nav-link {{Route::currentRouteName() == 'admins' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-user-tie"></i>
                                <p>
                                    المديرين
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('users'))
                        <li class="nav-item">
                            <a href="{{url('users')}}" class="nav-link {{Route::currentRouteName() == 'users' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    الأعضاء
                                </p>
                            </a>
                        </li>
                    @endif
                    {{-- @if(Auth::id() == 1 || hasPermission('providers'))
                        <li class="nav-item">
                            <a href="{{url('providers')}}" class="nav-link {{Route::currentRouteName() == 'providers' ? 'active' : ''}}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                المندوبين
                            </p>
                            </a>
                        </li>
                    @endif --}}
                    @if(Auth::id() == 1 || hasPermission('pages'))
                        <li class="nav-item">
                            <a href="{{url('pages')}}" class="nav-link {{Route::currentRouteName() == 'pages' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-file-medical-alt"></i>
                                <p>
                                    الصفحات الاساسية
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('propertys'))
                        <li class="nav-item">
                            <a href="{{url('propertys')}}" class="nav-link {{Route::currentRouteName() == 'propertys' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    السمات
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('sections'))
                        <li class="nav-item">
                            <a href="{{url('sections')}}" class="nav-link {{Route::currentRouteName() == 'sections' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    الأقسام
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('services'))
                        <li class="nav-item">
                            <a href="{{url('services')}}" class="nav-link {{Route::currentRouteName() == 'services' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-server"></i>
                                <p>
                                    المنتجات
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('orders'))
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link {{Route::currentRouteName() == 'orders' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    الطلبات
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('orders' , 'new')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>الجديدة</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('orders' , 'current')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>الحالية</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('orders' , 'refused')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>الملغية</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('orders' , 'finish')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>المنتهية</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    {{-- @if(Auth::id() == 1 || hasPermission('countrys'))
                        <li class="nav-item">
                            <a href="{{url('countrys')}}" class="nav-link {{Route::currentRouteName() == 'countrys' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-globe"></i>
                                <p>
                                    الدول
                                </p>
                            </a>
                        </li>
                    @endif --}}
                    {{-- @if(Auth::id() == 1 || hasPermission('citys'))
                        <li class="nav-item">
                            <a href="{{url('citys')}}" class="nav-link {{Route::currentRouteName() == 'citys' ? 'active' : ''}}">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                المدن
                            </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('neighborhoods'))
                        <li class="nav-item">
                            <a href="{{url('neighborhoods')}}" class="nav-link {{Route::currentRouteName() == 'neighborhoods' ? 'active' : ''}}">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                الأحياء
                            </p>
                            </a>
                        </li>
                    @endif --}}
                    {{-- @if(Auth::id() == 1 || hasPermission('sliders'))
                        <li class="nav-item">
                            <a href="{{url('sliders')}}" class="nav-link {{Route::currentRouteName() == 'sliders' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-image"></i>
                                <p>
                                    الإعلانات
                                </p>
                            </a>
                        </li>
                    @endif --}}
                    @if(Auth::id() == 1 || hasPermission('promo_codes'))
                        <li class="nav-item">
                            <a href="{{url('promo_codes')}}" class="nav-link {{Route::currentRouteName() == 'promo_codes' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-percent"></i>
                                <p>
                                    اكواد الخصم
                                </p>
                            </a>
                        </li>
                    @endif
                    {{-- @if(Auth::id() == 1 || hasPermission('bank_accounts'))
                        <li class="nav-item">
                            <a href="{{url('bank_accounts')}}" class="nav-link {{Route::currentRouteName() == 'bank_accounts' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>
                                    الحسابات البنكية
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('bank_transfers'))
                        <li class="nav-item">
                            <a href="{{url('bank_transfers')}}" class="nav-link {{Route::currentRouteName() == 'bank_transfers' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>
                                    التحويلات البنكية
                                </p>
                            </a>
                        </li>
                    @endif --}}
                    @if(Auth::id() == 1 || hasPermission('contacts'))
                        <li class="nav-item">
                            <a href="{{url('contacts')}}" class="nav-link {{Route::currentRouteName() == 'contacts' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    تواصل معنا
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Auth::id() == 1 || hasPermission('adminReports'))
                        <li class="nav-item">
                            <a href="{{url('adminReports')}}" class="nav-link {{Route::currentRouteName() == 'adminReports' ? 'active' : ''}}">
                                <i class="nav-icon fas fa-flag"></i>
                                <p>
                                    تقارير لوحة التحكم
                                </p>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0 text-dark">Dashboard v2</h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                            {{-- <li class="breadcrumb-item active">Dashboard v2</li> --}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        @include('msg')
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

@yield('modal')

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 <a href="#"></a> </strong>
        جميع الحقوق محفوظة
        <div class="float-right d-none d-sm-inline-block">
            {{-- <b>Version</b> 1.0.0 Beta --}}
        </div>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{dashboard_path()}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{dashboard_path()}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{dashboard_path()}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{dashboard_path()}}/dist/js/adminlte.js"></script>
<!-- Select2 -->
<script src="{{dashboard_path()}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap Switch -->
<script src="{{dashboard_path()}}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- DataTables -->
<script src="{{dashboard_path()}}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{dashboard_path()}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- DataTables buttons-->
<script src="{{dashboard_path()}}/plugins/datatables-buttons/js/buttons.bootstrap4.js"></script>
<script src="{{dashboard_path()}}/plugins/datatables-buttons/js/dataTables.buttons.js"></script>
<script src="{{dashboard_path()}}/plugins/datatables-buttons/js/buttons.print.js"></script>
<script src="{{dashboard_path()}}/plugins/datatables-buttons/js/buttons.colVis.js"></script>
<script src="{{dashboard_path()}}/plugins/datatables-buttons/js/buttons.flash.js"></script>
<script src="{{dashboard_path()}}/plugins/datatables-buttons/js/buttons.html5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- Bootstrap4 Duallistbox -->
<script src="{{dashboard_path()}}/plugins/summernote/summernote-bs4.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{dashboard_path()}}/dist/js/demo.js"></script>
<!-- drop -->
<script src="{{dashboard_path()}}/plugins/dropify/js/dropify.min.js"></script>
<script src="{{dashboard_path()}}/plugins/dropify/js/jquery.form-upload.init.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{dashboard_path()}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{dashboard_path()}}/plugins/raphael/raphael.min.js"></script>
<script src="{{dashboard_path()}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{dashboard_path()}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{dashboard_path()}}/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="{{dashboard_path()}}/dist/js/pages/dashboard2.js"></script>

<!-- Notify Js -->
<script src="{{url('/')}}/public/notify.js"></script>


<!-- FireBase -->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.6.1/firebase-messaging.js"></script>


<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBuB4CjmaMNuBZvJNxtmqOB_7kPu1qA3UA",
        authDomain: "ecommercy-4bd48.firebaseapp.com",
        databaseURL: "https://ecommercy-4bd48.firebaseio.com",
        projectId: "ecommercy-4bd48",
        storageBucket: "ecommercy-4bd48.appspot.com",
        messagingSenderId: "47160495666",
        appId: "1:47160495666:web:46ccb8972f06e482f3762b",
        measurementId: "G-Z6JMCJYXT5"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    const messaging = firebase.messaging();

    messaging.usePublicVapidKey("BMhrW9_QXAGKoqZjtbsjbGxtVkwlnY52h9YiLsi2scXNri_V3YEhwQ29rq1FoEJzvXbwn_kD7XVTzqEYUZC5gK4");

    messaging.requestPermission().then((permission) => {
        if (permission === 'granted') console.log('Notification permission granted.');
        else console.log('Unable to get permission to notify.');
    });

    messaging.onMessage(function (payload){
        $.notify('لديك رسالة جديدة : '+payload.notification.body, 'success');
    });

</script>

{{-- Maps --}}
<script>
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    function initialize() {
        var lat = parseFloat($('#lat').val());
        var lng = parseFloat($('#lng').val());
        var myLatlng = new google.maps.LatLng(lat, lng);

        var myOptions = {
            zoom: 7,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        };

        var map = new google.maps.Map(
            document.getElementById("add_map"),
            myOptions
        );

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            draggable: true,
        });

        var searchBox = new google.maps.places.SearchBox(
            document.getElementById("pac-input")
        );
        google.maps.event.addListener(searchBox, "places_changed", function() {
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i = 0; (place = places[i]); i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(12);
        });

        google.maps.event.addListener(marker, "position_changed", function() {
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            $("#lat").val(lat);
            $("#lng").val(lng);
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXZavt7FmjeZQyboxEQXfAh-to91skXg4&libraries=places&callback=initialize"
        async defer></script>

<script>
    $(document).ready(function() {
        // Notify Js
        var type = $('#alertType').val();
        if (type != '0') {
            var theme = $('#alertTheme').val();
            var message = $('#alertMessage').val();
            $.notify(message, theme);
        }

        // allow number only in inputs has class phone
        $(".phone").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    });

    $(function () {
        // Summernote
        $('.textarea').summernote()
    });

    $(function () {
        //change lang
        $('.ch-lang').click(function () {
            event.preventDefault();
            if (document.documentElement.lang.toLowerCase() === 'ar') {
                $("html").removeAttr('lang');
            } else {
                $("html").attr('lang', 'ar');
            }
        });
        $('#datatable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "lengthMenu": [
                [ 10, 25, 50, -1 ],
                [ '10', '25', '50', 'all' ]
            ],
        });

        $("#datatable-button").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "dom": "Bfrtip",
            "responsive": true,
            "fixedColumns": true,
            "buttons": [
                { extend: "excel", text: "Excel" },
                { extend: "pdf"  , text: "PDF" },
                { extend: "print", text: "Print", autoPrint: true }
            ],
        });
    });
</script>

@yield('script')
</body>
</html>
