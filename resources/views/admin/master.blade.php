<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AITVET Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet"
        href="{{ asset('back-end-assets') }}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('back-end-assets') }}/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/css/vertical-layout-light/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front-end-assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('front-end-assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('front-end-assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('front-end-assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('front-end-assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('front-end-assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('back-end-assets') }}/assets/images/logo.png" />
</head>

<body>
    <div class="container-scroller">
        @include('admin.include.header')

        @include('admin.include.left-sidebar')

        @yield('content')

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('back-end-assets') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('back-end-assets') }}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('back-end-assets') }}/assets/js/off-canvas.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/hoverable-collapse.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/template.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/settings.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('back-end-assets') }}/assets/js/dashboard.js"></script>
    <script src="{{ asset('back-end-assets') }}/assets/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('front-end-assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/php-email-form/validate.js"></script>
    <!-- end -->


</body>

</html>
