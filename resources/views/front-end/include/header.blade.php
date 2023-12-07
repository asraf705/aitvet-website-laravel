<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('front-end-assets') }}/img/hero-logo.png" alt=""
                    class="img-fluid"  height="150px">
            </a>
        </div>


        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('about') }}">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#program">Program</a></li>
                <li><a class="nav-link scrollto" href="{{ route('instructor') }}">Instructor</a></li>
                <li><a class="nav-link scrollto" href="{{ route('notice')}}">Notice</a></li>
                <li class="dropdown"><a><span>Academic</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('admission') }}">Admission</a></li>
                        <li><a href="{{ route('curriculum') }}">Curriculum</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    </ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Contact</a></li>
                <li class="dropdown"><a><span>Student</span><i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('paymentsystem') }}">Payment System</a></li>
                        <li><a href="{{ route('paymentform') }}">Payment Form</a></li>
                        <li><a href="{{ route('status') }}">Payment Status</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->
