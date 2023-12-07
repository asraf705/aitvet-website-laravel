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
                    <h2>Payment System</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Payment</li>
                        <li>Payment System</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section id="about" class="aboutall">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Bkash Payment System</h3>
                            <hr>
                            <div class="col-lg-6" data-aos="fade-right">
                                <div class="image">
                                    <img src="{{ asset('front-end-assets') }}/img/bKash1.jpg"
                                        style="display: block; margin-left:auto; margin-right:auto;" alt="">
                                    <br>
                                    <br>
                                    <h4 style="color: black;">ধাপ ১: এডমিশন ফরম পূরণ করুন।</h4>
                                    <img src="{{ asset('front-end-assets') }}/img/bKash2.jpg"
                                        style="display: block; margin-left:auto; margin-right:auto;" alt="">
                                    <img src="{{ asset('front-end-assets') }}/img/bKash3.jpg"
                                        style="display: block; margin-left:auto; margin-right:auto;" alt="">

                                    <h2 style="color: rgb(168, 22, 22);"> AITVET Merchant bKash Number : 01305503367 </h2>
                                    <br><br>

                                    <img src="{{ asset('front-end-assets') }}/img/bKash4.jpg"
                                        style="display: block; margin-left:auto; margin-right:auto;" alt="">
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

        </section>
    </main>
@endsection
