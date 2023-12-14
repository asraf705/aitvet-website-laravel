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
                            <div class="card">
                                @foreach ($notises as $notise)
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="title mb-1"><a style="color: #7cc576; "
                                                    href="{{ route('single.notise', ['titel' => $notise->titel]) }}">{{ $notise->titel }}</a>
                                            </h5>
                                            <div class="meta mb-1"><span class="date">Published by <a
                                                        href="{{ route('home') }}">AITVET</a>, on
                                                    {{ date('j M Y', strtotime($notise->created_at)) }}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </section>
        <!-- End Pricing Section -->



    </main>
@endsection
