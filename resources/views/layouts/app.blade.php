<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.ico">

        <!-- Plugins css -->
        <link href="{{ url('/') }}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ url('/') }}/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
        @yield('css')
        <!-- App css -->
        <link href="{{ url('/') }}/assets/css/bootstrap-material.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ url('/') }}/assets/css/app-material.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{ url('/') }}/assets/css/bootstrap-material-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{ url('/') }}/assets/css/app-material-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{ url('/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('includes.navbar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('includes.leftsidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('includes.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{ url('/') }}/assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="{{ url('/') }}/assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="{{ url('/') }}/assets/libs/apexcharts/apexcharts.min.js"></script>

        @yield('js')
        <script src="{{ url('/') }}/assets/libs/selectize/js/standalone/selectize.min.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{ url('/') }}/assets/js/pages/dashboard-1.init.js"></script>

        <!-- App js-->
        <script src="{{ url('/') }}/assets/js/app.min.js"></script>

    </body>
</html>
