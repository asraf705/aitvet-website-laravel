@extends('front-end.master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <a href="{{ route('home') }}" class="hero-logo" data-aos="zoom-in"><img
                    src="{{ asset('front-end-assets') }}/img/hero-logo.png" alt=""></a>
            <h1 data-aos="zoom-in">Welcome To <br> Ahsanullah Institute of Technical & Vocational Education & Training
                <br>(AITVET)
            </h1>
            <h2 data-aos="fade-up" class="text-light">Since : 1995 ||<span> Inst. Code : 50528</span></h2>
            <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    @include('front-end.include.header')

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>About Us</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="image">
                            <img src="{{ asset('front-end-assets') }}/img/about.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Welcome to the Ahsanullah Institute of Technical and Vocational Education and Training <br>
                                (AITVET)</h3>
                            <p class="fst-italic">
                                AITVET has been committed to provide an outstanding practical engineering and technical
                                education. Established in 1995 by Dhaka Ahsania Mission (DAM) and approved by Bangladesh
                                Technical Education Board (BTEB), we proudly stand as the first private prestigious Diploma
                                in Engineering Institute in Bangladesh.
                                Since its inception, AITVET is a leading technical engineering institute for the study. Till
                                now, AITVET is playing a crucial role in the social and economic development of a nation.
                                <br>
                                Our mission revolves around cultivating a holistic environment that nurtures and enhances
                                skill development, preparing individuals for success in a dynamic, ever-evolving world.
                            </p>
                            <h4>Core Focuse</h4>
                            <ul>
                                <li><i class="bx bx-check-double"></i> Embracing Vocational Education </li>
                                <li><i class="bx bx-check-double"></i> Embracing Technical Education </li>
                                <li><i class="bx bx-check-double"></i> Skill Enhancement </li>
                            </ul>
                            <p>
                                As a post-secondary Institute, AITVET offers an academic four years course in various fields
                                of engineering by following the standard curriculum provided by the Bangladesh Technical
                                Education Board (BTEB).
                                <br>
                                The Motto of AITVET is <b>“If one takes Technical Education, he/she will find work all over
                                    the world”</b>.
                                <pre style="text-align: right">
                <button type="button" class="btn btn-outline-success"><a href="{{ route('about') }}">Read More</a></button>
                </pre>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Program Section ======= -->
        <section id="program" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Diploma in Engineering Program</h2>
                </div>

                <!-- ======= Featured Section ======= -->
                <section id="featured" class="featured">
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                                <ul class="nav nav-tabs flex-column">

                                    <li class="nav-item">
                                        <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                            <h4>Architecture Technology</h4>
                                        </a>
                                    </li>

                                    <li class="nav-item mt-2">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                            <h4>Chemical Technology</h4>
                                        </a>
                                    </li>

                                    <li class="nav-item mt-2">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                            <h4>Civil Technology</h4>
                                        </a>
                                    </li>

                                    <li class="nav-item mt-2">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                            <h4>Computer Technology</h4>
                                        </a>
                                    </li>

                                    <li class="nav-item mt-2">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-5">
                                            <h4>Electrical Technology</h4>
                                        </a>
                                    </li>

                                    <li class="nav-item mt-2">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-6">
                                            <h4>Electronics Technology</h4>
                                        </a>
                                    </li>

                                    <li class="nav-item mt-2">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-7">
                                            <h4>Textile Technology</h4>
                                        </a>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="tab-content">

                                    <div class="tab-pane active show" id="tab-1">
                                        <figure>
                                            <img src="{{ asset('front-end-assets') }}/img/program/architecture.jpg"
                                                alt="" class="img-fluid">
                                        </figure>
                                    </div>

                                    <div class="tab-pane" id="tab-2">
                                        <figure>
                                            <img src="{{ asset('front-end-assets') }}/img/program/chemical.jpg"
                                                alt="" class="img-fluid">
                                        </figure>
                                    </div>

                                    <div class="tab-pane" id="tab-3">
                                        <figure>
                                            <img src="{{ asset('front-end-assets') }}/img/program/civil.jpg" alt=""
                                                class="img-fluid">
                                        </figure>
                                    </div>

                                    <div class="tab-pane" id="tab-4">
                                        <figure>
                                            <img src="{{ asset('front-end-assets') }}/img/program/computer.jpg"
                                                alt="" class="img-fluid">
                                        </figure>
                                    </div>

                                    <div class="tab-pane" id="tab-5">
                                        <figure>
                                            <img src="{{ asset('front-end-assets') }}/img/program/electrical.jpg"
                                                alt="" class="img-fluid">
                                        </figure>
                                    </div>

                                    <div class="tab-pane" id="tab-6">
                                        <figure>
                                            <img src="{{ asset('front-end-assets') }}/img/program/electronics.jpg"
                                                alt="" class="img-fluid">
                                        </figure>
                                    </div>

                                    <div class="tab-pane" id="tab-7">
                                        <figure>
                                            <img src="{{ asset('front-end-assets') }}/img/program/textile.jpg"
                                                alt="" class="img-fluid">
                                        </figure>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- End Featured Section -->


            </div>
        </section>
        <!-- End Services Section -->

        <br>



        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="accordion-list">
                            <br>
                            <ul>
                                <li data-aos="fade-up" data-aos-delay="100">
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">
                                        <span>01</span> Why Choose AITVET for Your
                                        Education? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            At AITVET, we offer a diverse learning environment committed to hands-on,
                                            industry-aligned education. Our programs are designed to provide practical
                                            skills and knowledge vital for success in today's dynamic professional
                                            landscape.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="200">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> What Are the Benefits of Studying at AITVET? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Studying at AITVET means accessing industry-relevant programs, fostering
                                            real-world skills, and being a part of an institution that prioritizes student
                                            success. Our expert faculty, state-of-the-art facilities, and strong industry
                                            connections ensure a holistic educational experience.
                                        </p>
                                    </div>
                                </li>

                                <li data-aos="fade-up" data-aos-delay="300">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> What Can You Learn at AITVET? <i
                                            class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            At AITVET, students can immerse themselves in a wide array of specialized
                                            programs, ranging from technical skills to innovative vocational training. Our
                                            curriculum emphasizes practical learning, providing a robust foundation for
                                            career readiness in various fields.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 align-items-stretch video-box"
                        style='background-image: url("{{ asset('front-end-assets') }}/img/why-us-1.png");'
                        data-aos="zoom-in">
                        <a href="https://youtu.be/QWbRI_Qg_r4?si=N4g2v_g5hD9pgUUy" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Course</h2>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('front-end-assets') }}/img/portfolio/arc.jpg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Architecture Technology</h4>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-success"><a
                                        href="{{ route('admission') }}">More</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('front-end-assets') }}/img/portfolio/chem.jpg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Chemical Technology</h4>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-success"><a
                                        href="{{ route('admission') }}">More</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('front-end-assets') }}/img/portfolio/civi.jpg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Civil Technology</h4>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-success"><a
                                        href="{{ route('admission') }}">More</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('front-end-assets') }}/img/portfolio/cmt.jpg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Computer Technology</h4>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-success"><a
                                        href="{{ route('admission') }}">More</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('front-end-assets') }}/img/portfolio/eee.jpg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Electrical Technology</h4>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-success"><a
                                        href="{{ route('admission') }}">More</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('front-end-assets') }}/img/portfolio/eec.jpg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Electronics Technology</h4>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-success"><a
                                        href="{{ route('admission') }}">More</a></button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item ">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('front-end-assets') }}/img/portfolio/txt.jpg" class="img-fluid"
                                alt="">
                        </div>
                        <div class="member-info">
                            <h4>Textile Technology</h4>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-success"><a
                                        href="{{ route('admission') }}">More</a></button>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section>


        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="section-title" data-aos="fade-up">
                <h2>Our Successful Students</h2>
            </div>

            <div class="container" data-aos="zoom-in">
                <div class="quote-icon">
                    <i class="bx bxs-quote-right"></i>
                </div>

                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p class="text-dark">
                                    I am incredibly grateful for the exceptional education I received in Computer Technology
                                    at AITVET. The hands-on experience and guidance from knowledgeable faculty empowered me
                                    to excel in the ever-evolving field of technology.
                                </p>
                                <img src="{{ asset('front-end-assets') }}/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img" alt="">
                                <h3 class="text-dark">Md. Asrafuzzaman</h3>
                                <h4 class="text-dark">Computer Technology</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p class="text-dark">
                                    Studying Architecture Technology at AITVET has been a transformative experience. The
                                    institute's emphasis on creativity, technical proficiency, and practical design skills
                                    prepared me to innovate and thrive in the competitive world of architecture.
                                </p>
                                <img src="{{ asset('front-end-assets') }}/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img" alt="">
                                <h3 class="text-dark">Sara Wilsson</h3>
                                <h4 class="text-dark">Architecture Technology</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p class="text-dark">
                                    The Textile Technology program at AITVET offered me a perfect blend of theory and
                                    practical knowledge. The state-of-the-art labs, coupled with engaging coursework,
                                    equipped me with the expertise needed to pursue a successful career in the textile
                                    industry.
                                </p>
                                <img src="{{ asset('front-end-assets') }}/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img" alt="">
                                <h3 class="text-dark">Jena Karlis</h3>
                                <h4 class="text-dark">Textile Technology</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p class="text-dark">
                                    AITVET provided me with an enriching learning environment in Civil Technology. The
                                    comprehensive curriculum and industry-focused approach enabled me to develop critical
                                    skills, laying a strong foundation for my career in civil engineering
                                </p>
                                <img src="{{ asset('front-end-assets') }}/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img" alt="">
                                <h3 class="text-dark">Matt Brandon</h3>
                                <h4 class="text-dark">Civil Technology</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p class="text-dark">
                                    Studying Electrical Technology at AITVET was an enriching experience. The institute's
                                    commitment to innovation, coupled with practical training and expert guidance, gave me
                                    the confidence to step into the dynamic field of electrical engineering.
                                </p>
                                <img src="{{ asset('front-end-assets') }}/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img" alt="">
                                <h3 class="text-dark">John Larson</h3>
                                <h4 class="text-dark">Electrical Technology</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Instructor Section ======= -->
        <section id="instructor" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Message</h2>
                </div>


                <div class="principle-content col-lg-4 col-md-12 d-flex align-items-stretch">
                    <div class="principle" data-aos="zoom-in">
                        <div class="member-img">
                            <img src="{{ asset('front-end-assets') }}/img/team/principle.jpg" width="100%"
                                height="400px" alt="">
                        </div>
                        <div class="principle-info">
                            <h4>Md. Rabi-Ul-Hasan</h4>
                            <span>Principal(Acting) <br>
                                <p> M.Sc.in CSE(PUB)</p>
                            </span>
                        </div>
                    </div>
                    <div class="principle-massage">
                        <h4>Message of Principle</h4>
                        <hr>
                        <p> Greeting and Welcome to Ahsanullah Institute of Technical and Vocational Education and Training.
                            I am thrilled that you have decided to view our institute’s website in order to learn more about
                            the wonderful students, faculties, and program we have to offer. Ahsanullah Institute of
                            Technical and Vocational Education and Training was established in 1995 by Dhaka Ahsania
                            Mission. Education builds a strong foundation for a nation and technology-based education is
                            essential for a country like ours. Technical education is a very prospective field of education
                            in our country. AITVET is maturing every year. Every academic year had been a notable one for
                            AITVET in many respects.
                            <br>
                            <br>
                            Today, the role of an educational Institute is not only to pursue academic excellence but also
                            to motivate and empower its students to be life long learners, critical thinkers, and productive
                            members of an ever-changing global society. AITVET has always been with them who believe in
                            standard, the proper approach towards learning something and also to bring out the best.
                            <br>
                            <br>
                            I have the perception to satisfy my trust and to put my effort eternally. I want to thank my
                            team, my students and the guardians without whom this institution would never have come to this
                            stage.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <!-- ======= Notice Section ======= -->
        <section id="notice" class="pricing section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Notice Board</h2>
                    <h4>Latest Notices</h4>
                    <hr>
                </div>

                <div class="row">

                    <section class="blog-list px-3 py-5 p-md-5">
                        <div class="container single-col-max-width">
                            <div class="item mb-5">

                                <div class="card">
                                    @foreach ($notises->take(10) as $notise)
                                        <div class="card-body">
                                            <h5 class="title mb-1"><a style="color: #7cc576; " href="{{ route('single.notise',['$titel'=>$notise->$titel])}}">{{$notise->titel}}</a></h5>
                                            <div class="meta mb-1"><span class="date">Published {{ date('j M Y',strtotime($notise->created_at))}}</span></div>
                                        </div>
                                    @endforeach
                                </div>

                                <nav class="blog-nav nav nav-justified my-5">
                                    <a class="nav-link-next nav-item nav-link rounded" href="{{ route('notice') }}">
                                        <button type="button" class="btn btn-outline-success">More</button></a>
                                </nav>

                            </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <a
                                    href="https://www.google.com/maps/place/Ahsanullah+Institute+of+Technical+and+Vocational+Education+and+Training+(AITVET)/@23.7531963,90.3907817,254m/data=!3m1!1e3!4m6!3m5!1s0x3755b8a2fd37780b:0x4ef3ef54822066d8!8m2!3d23.7532835!4d90.3914791!16s%2Fg%2F11bxfvwt1f?entry=ttu">
                                    <h4>Location:</h4>
                                    <p>20, West Testuri Bazar Road,<br> Dhaka 1215</p>
                                </a>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>aitvet1995.info@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>41010386, 41010387,<br>41010388, 41010389</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                            data-aos="fade-left">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in">
                        <a href="https://bangladesh.gov.bd/index.php">
                            <img src="{{ asset('front-end-assets') }}/img/clients/client-1.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="100">
                        <a href="http://www.nctb.gov.bd/">
                            <img src="{{ asset('front-end-assets') }}/img/clients/client-2.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="200">
                        <a href="https://bteb.gov.bd/">
                            <img src="{{ asset('front-end-assets') }}/img/clients/client-3.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="300">
                        <a href="https://www.ahsaniamission.org.bd/">
                            <img src="{{ asset('front-end-assets') }}/img/clients/client-4.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6" data-aos="zoom-in" data-aos-delay="400">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('front-end-assets') }}/img/clients/client-5.png" class="img-fluid"
                                alt="">
                        </a>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Clients Section -->

    </main>
    <!-- End #main -->
@endsection
