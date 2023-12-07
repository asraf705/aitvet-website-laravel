@extends('front-end.master')

@include('front-end.include.header')

@section('content')
    <main id="main" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">

        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Our Instructor</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Instructor</li>
                    </ol>
                </div>
                <hr>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Team Section ======= -->
        <section id="instructor" class="team">
            <div class="container">

                <div class="row">

                    {{-- PRINCIPAL --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>PRINCIPAL </h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/pri-1.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md.-Rabi-Ul-Hasan</h4>
                                <span>M.Sc.in CSE(PUB)</span>
                            </div>
                        </div>
                    </div>

                    {{-- ARCHITECTURE --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>ARCHITECTURE TECHNOLOGY</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/arc-1.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>D.M.A.Sufian Reza</h4>
                                <span>B.Arch (AUST)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/arc-2.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Farah Yasmin</h4>
                                <span>B.Sc.Architecture(AUST)</span>
                            </div>
                        </div>
                    </div>

                    {{-- CHEMICAL TECHNOLOGY --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>CHEMICAL TECHNOLOGY</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/chmi-1.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sadia Afrin Tithee</h4>
                                <span>M.Sc. in Petroleum and Mineral Resources Engineering(BUET),<br>B.Sc. in Applied
                                    Chemistry and Chemical Engineering (NSTU)</span>
                            </div>
                        </div>
                    </div>

                    {{-- CIVIL TECHNOLOGY --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>CIVIL TECHNOLOGY</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/civi-1.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Engr. Farida Yasmin</h4>
                                <h5>Department in Charge</h5>
                                <span>M.sc in WRE(BUET),<br> B.Sc. in CE(RUET)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/civi-2.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md. Kiswar Kamal Biswas</h4>
                                <span>B.Sc. in Tec. Edu. (CE) (TTTC of DU)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/civi-3.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sabina Yesmin</h4>
                                <span>B.Sc. in Tech edu (CE) (Dhaka University)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/civi-4.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md. Yahhia Bhuiya</h4>
                                <span>B.Sc. in Tech. Edu.(CE) (TTTC of DU)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/civi-5.jpg" class=".img-instructor"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>Rana Ahmed (Jr.Instructor)</h4>
                                <span>BSc in Engg Civil (WUB)</span>
                            </div>
                        </div>
                    </div>

                    {{-- COMPUTER TECHNOLOGY --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>COMPUTER TECHNOLOGY</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-1.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Afsana Hamid</h4>
                                <h5>Department in Charge</h5>
                                <span>M.Sc. in CSE(UIU), <br>B.Sc. in CSE(AUST)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-2.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Mohammad Mostafizur Rahman</h4>
                                <span>M.Sc. in CSE(PUB)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-3.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Mansura Akther</h4>
                                <span>B.Sc. in CSE(DIU)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-4.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>F.M Ariful Islam</h4>
                                <span>M.Sc. in CSE(PUB),<br> B.Sc. in CSE(DUET)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-5.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Mst. Shirin Akter</h4>
                                <span>M.Sc. in CSE(DIU),<br>B.Sc. in CSE(ISTT)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-6.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Shamsunnahar Nasreen</h4>
                                <span>B.Sc. in CSE(DUET)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-7.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Rowshan Ara Snigdha</h4>
                                <span>B.Sc. in CSE(Stamford University)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/cmt-8.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Mokaddes Ali (Jr.Instructor)</h4>
                                <span>BSc in Engg CSE (BUBT)
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- ELECTRICAL TECHNOLOGY --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>ELECTRICAL TECHNOLOGY</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-1.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>A. N. M.Hossain</h4>
                                <h5>Department in Charge</h5>
                                <span>M.Sc in EEE(DUET),<br>B.Sc. in EEE(AUST)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-2.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md. Moniruzzaman Monir</h4>
                                <span>B.Sc. in Edu.in EEE(TTTC of DU)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-3.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md. Rakibul Hasan</h4>
                                <span>B. Sc. in EEE(UIU)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-4.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Tamanna Binta Zakaria</h4>
                                <span>B.Sc. in EEE(AUST)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-5.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Iffatul Bushra Siddiqui</h4>
                                <span>B.Sc. in EEE(BRAC University)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-6.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Kazi Fatima Sharif</h4>
                                <span>M.Sc. in EEE(AUST),<br>B.Sc in EEE(AUST)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-7.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md Abdul Hakim</h4>
                                <span>B.Sc. In EEE (DUET)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eee-8.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Suraiyea Akter Sumi (Jr.Instructor)</h4>
                                <span>B.Sc in GUB(EEE)
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- ELECTRONICS TECHNOLOGY --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>ELECTRONICS TECHNOLOGY</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eec-1.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Mohammad Nahid Murshed Tareq</h4>
                                <span>B.Sc. in EEE(AUST)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eec-2.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md. Zillur Rahman</h4>
                                <span>B.Sc. in EEE(DUET),<br> M.B.A in HRM (DIU)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eec-3.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Muhammad Ashraful Haque</h4>
                                <span>B.Sc. in EEE(WUB)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/eec-4.png"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Nishat wahid Bipasha</h4>
                                <span>B.Sc. in EEE(AUST)</span>
                            </div>
                        </div>
                    </div>

                    {{-- TEXTILE TECHNOLOGY --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>TEXTILE TECHNOLOGY</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/txt-1.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Riffat Islam</h4>
                                <h5>Department in Charge</h5>
                                <span>M.Sc. in textile (BuTex),<br> B.Sc. in Textile (AUST)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/txt-2.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md. Sobur Khan</h4>
                                <span>B.Sc in Textile(AUST)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/txt-3.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Nazmul Alam Talakdar</h4>
                                <span>B.Sc. in Textile(AUST)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/txt-4.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>S. M. Abu Sayem</h4>
                                <span>M.Sc. in Textile Engineering(DIU)</span>
                            </div>
                        </div>
                    </div>

                    {{-- Teachers of Related Subjects --}}

                    <div class="d-flex justify-content-between align-items-center">
                        <h2>Teachers of Related Subjects</h2>
                    </div>
                    <hr>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-1.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md. Shahinur Rahman</h4>
                                <h6>Instructor of Mathematics</h6>
                                <span>M. Sc. in Mathematics(National University)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-2.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Md.Khalilur Rahman</h4>
                                <h6>Instructor of Mathematics</h6>
                                <span>M.Sc. in Math(RU)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-3.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Faijun Nesa Shimi</h4>
                                <h6>Instructor of Physics</h6>
                                <span>M.Sc. in Physics (DU) ,<br> B.Sc.(Hons.) in Physics(DU)</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-4.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Saadni Islam</h4>
                                <h6>Instructor of Physics</h6>
                                <span>M.Sc.in Physics(DU),<br>B.Sc.(Hons.) in Physics(DU)
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-5.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Ms. Shamima Akhater Khan</h4>
                                <h6>Instructor of Bangla</h6>
                                <span>M.A Bangla
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-6.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Lutfa Jahan</h4>
                                <h6>Instructor of Accounting</h6>
                                <span>MBA(Accounting) (DU),<br>Masters of Business studies,<br>B.Com
                                    Hon’s.(Accounting)(Dhaka city College),</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-7.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Samira Saimoma</h4>
                                <h6>Instructor of Chamistry</h6>
                                <span>P.hD.(FellowChem)(Nanotechnology)(BUET),<br> M.Phil(Chem)(BUET),<br> M.Sc.
                                    Chemistry(NU),<br> B.Sc.(Hons)Chemistry,NU</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('front-end-assets') }}/img/instructor/rel-8.jpg"
                                    class=".img-instructor" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Razia Sultana Daisy</h4>
                                <h6>Instructor of English</h6>
                                <span>M.A in English(NU),<br>B.A. Hons. in English(NU)</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Team Section -->



    </main>
@endsection
