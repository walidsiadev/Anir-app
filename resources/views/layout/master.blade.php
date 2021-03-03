<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">

        <meta name="description" content="">

        <title>ANIR - @yield('title')</title>
        <!-- Custom CSS -->
        <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">

        <!-- All Jquery -->
        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('dist/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('dist/js/custom.min.js') }}"></script>
        <!--This page JavaScript -->
        <!-- <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script> -->
        <!-- Charts js Files -->
        <script src="{{ asset('assets/libs/flot/excanvas.js') }}"></script>
        <script src="{{ asset('assets/libs/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/libs/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('assets/libs/flot/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('assets/libs/flot/jquery.flot.stack.js') }}"></script>
        <script src="{{ asset('assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
        <script src="{{ asset('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('dist/js/pages/chart/chart-page-init.js') }}"></script>
    </head>
    <body>
        <div id="main-wrapper">
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b class="logo-icon p-l-10">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />
                               
                            </b>
                            <!--End Logo icon -->
                             <!-- Logo text -->
                            <span class="logo-text">
                                 <!-- dark Logo text -->
                                 <img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="light-logo" />
                                
                            </span>
                        </a>
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle" width="31"></a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class="left-sidebar" data-sidebarbg="skin5">
                <div class="scroll-sidebar">
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item"> 
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/admin" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                            </li>
                            <li class="sidebar-item"> 
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/produit" aria-expanded="false"><i class="fas fa-boxes"></i><span class="hide-menu">Produits</span></a>
                            </li>
                            <li class="sidebar-item"> 
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/fornisseur" aria-expanded="false"><i class="fas fa-truck-loading"></i><span class="hide-menu">Fornisseurs</span></a>
                            </li>
                            <li class="sidebar-item"> 
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/clients" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Clients</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="page-wrapper">
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">@yield('title')</h4>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    @yield('container')
                </div>
                <footer class="footer text-center">
                    All Rights Reserved 2021
                </footer>
            </div>
        </div>
    </body>
</html>