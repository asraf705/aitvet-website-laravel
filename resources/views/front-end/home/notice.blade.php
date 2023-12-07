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
                    <h2>Notice Board</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Notice Board</li>
                    </ol>
                </div>
                <hr>
            </div>
            <div class="section-title" data-aos="fade-up">
                <h2>Notice Board</h2>
                <h4>Latest Notices</h4>
                <hr>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Notice Section ======= -->
        <section id="notice" class="pricing ">
            <div class="container">
                <div class="row">
                    <section class="blog-list px-3 py-5 p-md-6">
                        <div class="container single-col-max-width">
                            <div class="item mb-5">

                                <div class="row g-3 g-xl-0">
                                    <div class="col">
                                        <h5 class="title mb-1"><a style="color: #7cc576; " href="blog-post.html">Top 3
                                                JavaScript Frameworks</a></h5>
                                        <div class="meta mb-1"><span class="date">Published 2 days ago</span></div>

                                    </div>
                                    <!--//col-->
                                    <div class="col-2 col-xl-3">
                                        <img class="img-notice post-thumb" src="{{ asset('front-end-assets') }}/img/not.jpg"
                                            width="80%" height="150px" alt="image">
                                    </div>
                                </div><!--//row-->
                            </div><!--//item-->

                            <div class="item mb-5">
                                <div class="row g-3 g-xl-0">

                                    <div class="col">
                                        <h5 class="title mb-1"><a style="color: #7cc576; " href="blog-post.html">About
                                                Remote Working</a></h5>
                                        <div class="meta mb-1"><span class="date">Published 3 months ago</span></div>
                                    </div>
                                    <!--//col-->

                                    <div class="col-2 col-xl-3">
                                        <img class="img-notice post-thumb "
                                            src="{{ asset('front-end-assets') }}/img/not.jpg" width="80%" height="150px"
                                            alt="image">
                                    </div>

                                </div><!--//row-->
                            </div><!--//item-->

                        </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- End Pricing Section -->



    </main>
@endsection
