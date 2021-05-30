<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Admin - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ ('welcome/assets/img/favicons/favicon.ico') }}">
        <!-- head -->
        @include('admin.layouts/includes/head')
        <!-- endhead -->
    </head>
    <body data-sidebar="colored">
        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <!-- navbar -->
                @include('admin.layouts/includes/navbar')
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <!-- sidebar -->
                @include('admin.layouts/includes/sidebar')
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start new work here -->
                        @yield('maincontent')
                        <!-- end work here -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <!-- footer-start -->
                <footer class="footer">
                    <!-- footer-here -->
                    @include('admin.layouts/includes/footer')
                </footer>
                <!-- footer-end -->
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
        <!-- JAVASCRIPT -->
        @include('admin.layouts/includes/foot')
    </body>

</html>
