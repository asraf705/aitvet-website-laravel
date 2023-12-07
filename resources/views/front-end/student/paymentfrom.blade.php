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
                    <h2>Payment Form</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Payment</li>
                        <li>Payment Form</li>
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


                            <form action="{{ route('paymentstatuses.store') }}" method="POST"
                                role="form">
                                @csrf

                                <div class="row">
                                    {{-- depertment deop down  --}}
                                    <div class="form-group mt-4">
                                        <label for="depertment">Depertment </label> <br>
                                        <select class="form-control" name="depertment" id="depertment">
                                            <option >Select Department</option>
                                            <option value="Architecture">Architecture Technology</option>
                                            <option value="Chemical">Chemical Technology</option>
                                            <option value="Civil">Civil Technology</option>
                                            <option value="Computer">Computer Technology</option>
                                            <option value="Electrical">Electrical Technology</option>
                                            <option value="Electronics">Electronics Technology</option>
                                            <option value="Textile">Textile Technology</option>
                                        </select>
                                    </div>

                                    {{-- semester deop down  --}}

                                    <div class="form-group mt-4">
                                        <label for="semester">Semester </label> <br>

                                        <select class="form-control" name="semester" id="semester">
                                            <option>Select Semester</option>
                                            <option value="1st">1st</option>
                                            <option value="2nd">2nd</option>
                                            <option value="3rd">3rd</option>
                                            <option value="4th">4th</option>
                                            <option value="5th">5th</option>
                                            <option value="6th">6th</option>
                                            <option value="7th">7th</option>
                                            <option value="8th">8th</option>
                                        </select>
                                    </div>

                                    {{-- roll   --}}

                                    <div class="form-group mt-3">
                                        <label for="roll">Class Roll</label> <br>
                                        <input type="number" class="form-control" name="roll" id="roll"
                                            placeholder="Class Roll" min="3" required>
                                    </div>

                                    <br><br><br><br>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4>Bkash Payment</h4>
                                    </div>
                                    <hr>

                                    {{-- Payment type deop down  --}}

                                    <div class="form-group mt-4">
                                        <label for="paytype">Fees Type </label> <br>

                                        <select class="form-control" name="paytype" id="paytype">
                                            <option>Select fees Type</option>
                                            <option value="New Admission">New Admission Fee</option>
                                            <option value="Admission">Admission Fee</option>
                                            <option value="Re Admission">Re-Admission Fee</option>
                                            <option value="Form Fillup">Form Fill up Fee</option>
                                        </select>
                                    </div>

                                    {{-- depertment deop down  --}}

                                    <div class="form-group mt-3">
                                        <label for="amount">Amount</label> <br>
                                        <input type="number" class="form-control" name="amount" id="amount"
                                            placeholder="Amount" min="2" required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="bkashnum">Bkash Number</label> <br>
                                        <input type="number" class="form-control" name="bkashnum" id="bkashnum"
                                            placeholder="Bkash Number" min="5" required>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="txnid">Transaction ID(Txn. ID)</label> <br>
                                        <input type="text" class="form-control" name="txnid" id="txnid"
                                            placeholder="Txn. ID" min="4" required>
                                    </div>

                                    <br>
                                    <div class="text-center d-block">
                                        <br>
                                        <button type="submit" class="btn btn-outline-success w-100 ">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
