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
                    <h2>Payment Status</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Payment</li>
                        <li>Payment Status</li>
                    </ol>
                </div>
                <hr>


            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section id="about" class="aboutall">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="content pt-2 pt-lg-0 pl-0 pl-lg-2 ">

                            <form method="get" role="form">
                                <div class="row">

                                    <div class="form-group mt-3">
                                        <label>Class Roll:</label> <br>
                                        <input type="number" class="form-control" name="search" id="search"
                                            value="{{ $searchQuary }}" placeholder="Class Roll">
                                    </div>
                                    <div class="text-center">
                                        <br>
                                        <button type="submit" class="btn btn-outline-success w-100 ">Search</button>
                                    </div>

                            </form>


                            {{-- payment table --}}

                            @if ($searchQuary)

                                <br><br>
                                <br><br>
                                <hr>
                                <hr>
                                <br><br>

                                <div class=" d-flex justify-content-between align-items-center">
                                    <h2>Payment Status</h2>
                                </div>
                                <hr>

                                {{-- table --}}



                                @if ($paymentstatuses)
                                    <table class="table col-lg-5">
                                        <thead>
                                            <tr align="center">
                                                <th>Depertment</th>
                                                <th>Semester</th>
                                                <th>Class Roll</th>
                                                <th>Bkash Number</th>
                                                <th>Fees</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @csrf
                                            @foreach ($paymentstatuses as $paymentstatus)
                                                <tr align="center">
                                                    <td data-label="Depertment">{{ $paymentstatus->depertment }}</td>
                                                    <td data-label="Semester">{{ $paymentstatus->semester }}</td>
                                                    <td data-label="Class Roll">{{ $paymentstatus->roll }}</td>
                                                    <td data-label="Bkash Number">{{ $paymentstatus->bkashnum }}</td>
                                                    <td data-label="Fees">{{ $paymentstatus->paytype }}</td>
                                                    <td data-label="Amount">{{ $paymentstatus->amount }}</td>
                                                    <td data-label="Date">
                                                        {{ date('j M Y', strtotime($paymentstatus->created_at)) }}
                                                    </td>
                                                    <td data-label="Payment Status">
                                                        @if ($paymentstatus->status == 0)
                                                            <button type="button" class="btn btn-warning" disabled>
                                                                <h5 class="text-black"> On Hold </h5>
                                                            </button>
                                                        @else()
                                                            <button type="button" class="btn bg-success text-white"
                                                                disabled>
                                                                <h5 > Successful </h5>
                                                            </button>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <br><br>
                                    <hr>
                                    <h6 class="text-warning"><i class="bx bx-error-alt" style="color: red"></i> If you
                                        payment hold more then 10 Day. Pleace contact 01305503367 or Room: 202.</h6>
                                @else
                                    {{-- Information not found  --}}
                                    <div id="notfound">
                                        <div class="notfound">
                                            <h3 class="section-title">Oops! Information not found</h3>
                                            <img src="{{ asset('front-end-assets') }}/img/notfound.png"
                                                style="display: block; margin-left: auto; margin-right: auto; width: 300px; hight:400px;"
                                                alt="">
                                        </div>
                                    </div>
                                    {{-- Information not found  --}}
                                @endif

                            @endif

                        </div>
                    </div>
                </div>

            </div>

        </section>
    </main>
@endsection
