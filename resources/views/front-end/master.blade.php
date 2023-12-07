<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="{{ asset('front-end-assets') }}/img/logo-copy.png" type="image/x-icon">
    <title>AITVET</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->

    <!-- Google Fonts -->
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

    <!-- Template Main CSS File -->
    <link href="{{ asset('front-end-assets') }}/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('front-end-assets') }}/img/hero-logo.png" />

</head>

<body>


    @yield('content')



    @include('front-end.include.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('front-end-assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('front-end-assets') }}/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('front-end-assets') }}/js/main.js"></script>

</body>

</html>
