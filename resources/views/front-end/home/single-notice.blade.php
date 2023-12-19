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
        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Notice Section ======= -->
        <section id="instructor" class="team">
            <div class="container">
                <div class="card col-lg-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $notises->titel }}</h5>
                            <div class="meta mb-1"><span class="date">Published by <a
                                        href="{{ route('home') }}">AITVET</a>, on
                                    {{ date('j M Y', strtotime($notises->created_at)) }}</span></div>
                        </div>
                        <img class="card-img-bottom" src="{{ asset($notises->image) }}" alt="Card image cap" width="100%"
                            height="1885px">
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Notice Section ======= -->
    </main>

@endsection
