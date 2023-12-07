@extends('admin.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card-body">

                    <form action="{{ route('paymentstatuses.update', $paymentstatuses->id) }}" method="POST" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            {{-- depertment deop down  --}}
                            <div class="form-group mt-4">
                                <label for="depertment">Depertment: </label> <br>
                                <select class="form-control" name="depertment" value="{{ $paymentstatuses->depertment }}"
                                    id="depertment">
                                    <option value="{{ $paymentstatuses->depertment }}">{{ $paymentstatuses->depertment }}
                                    </option>
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
                                <label for="semester">Semester: </label> <br>

                                <select class="form-control" name="semester" id="semester"
                                    value="{{ $paymentstatuses->semester }}">
                                    <option value="{{ $paymentstatuses->semester }}">{{ $paymentstatuses->semester }}
                                    </option>
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
                                <label for="roll">Class Roll: </label> <br>
                                <input type="number" class="form-control" name="roll" id="roll"
                                    placeholder="Class Roll" value="{{ $paymentstatuses->roll }}" min="3" required>
                            </div>

                            <br><br><br><br>
                            <div class="d-flex justify-content-between align-items-center">
                                <h4>Bkash Payment</h4>
                            </div>
                            <hr>

                            {{-- Payment type deop down  --}}

                            <div class="form-group mt-4">
                                <label for="paytype">Payment Type: </label> <br>

                                <select class="form-control" name="paytype" id="paytype"
                                    value="{{ $paymentstatuses->paytype }}">
                                    <option value="{{ $paymentstatuses->paytype }}">{{ $paymentstatuses->paytype }}
                                    </option>
                                    <option value="New Admission">New Admission</option>
                                    <option value="Admission">Admission</option>
                                    <option value="Re Admission">Re-Admission</option>
                                    <option value="Form Fillup">Form Fillup</option>
                                </select>
                            </div>

                            {{-- depertment deop down  --}}

                            <div class="form-group mt-3">
                                <label for="amount">Amount:</label> <br>
                                <input type="number" class="form-control" name="amount" id="amount"
                                    placeholder="Amount" value="{{ $paymentstatuses->amount }}" min="2" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="bkashnum">Bkash Number:</label> <br>
                                <input type="number" class="form-control" name="bkashnum" id="bkashnum"
                                    placeholder="Bkash Number" value="{{ $paymentstatuses->bkashnum }}" min="5"
                                    required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="txnid">Transaction ID(Txn. ID):</label> <br>
                                <input type="text" class="form-control" name="txnid" id="txnid"
                                    placeholder="Txn. ID" value="{{ $paymentstatuses->txnid }}" min="4" required>
                            </div>

                            <br>
                            <div class="text-center d-block">
                                <br>
                                <button type="submit" class="btn btn-outline-success w-100 ">Update</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
    <!-- content-wrapper ends -->
@endsection
