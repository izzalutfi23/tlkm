<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/jquery-bar-rating/css-stars.css')}}?>" />
    <link rel="stylesheet" href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/css/demo_1/style.css')}}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" />
    <!-- Button -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" />
    <!-- Custom js for this page -->
    <script src="{{asset('admin/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
    <!-- plugins:js -->
    <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/vendors/chart.js/Chart.min.js')}}"></script>

    <!-- Filemanager -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile border-bottom">
                    <a href="#" class="nav-link flex-column">
                        <div class="nav-profile-image">
                            <img src="{{asset('admin/images/faces/face1.jpg')}}?>" alt="profile" />
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                            <span class="font-weight-semibold mb-1 mt-2 text-center">Telkom Indonesia</span>
                        </div>
                    </a>
                </li>
                <li class="pt-2 pb-1">
                    <span class="nav-item-head">Admin Dashboard</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('adm')}}">
                        <i class="mdi mdi-compass-outline menu-icon"></i>
                        <span class="menu-title">News</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('kategori')}}"><i class="mdi mdi-apps menu-icon"></i>
                        <span class="menu-title">Kategori</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('subkategori')}}"><i class="mdi mdi-apps menu-icon"></i>
                        <span class="menu-title">Sub Kategori</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('konten')}}"><i class="mdi mdi-file menu-icon"></i>
                        <span class="menu-title">Konten</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{url('file')}}"><i class="mdi mdi-file menu-icon"></i>
                        <span class="menu-title">File</span>
                    </a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('user')}}"><i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">User</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles default primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles light"></div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-chevron-double-left"></span>
                    </button>
                    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                                src="{{asset('admin/images/logo-mini.svg')}}" alt="logo" /></a>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-logout d-none d-md-block">
                            <button class="btn btn-sm btn-danger">Online</button>
                        </li>
                        <li class="nav-item nav-logout d-none d-lg-block">
                            <a class="nav-link" href="{{url('logout')}}" title="Logout">
                                <i class="mdi mdi-logout-variant"></i>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>


            @yield('container')


        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('admin/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('admin/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('admin/vendors/flot/jquery.flot.stack.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/misc.js')}}"></script>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <script src="{{asset('admin/js/todolist.js')}}"></script>
    <!-- endinject -->

    <!-- <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('text');
        var textarea = document.getElementById('mytextarea');
        CKEDITOR.replace(textarea);
    </script> -->
</body>

</html>
