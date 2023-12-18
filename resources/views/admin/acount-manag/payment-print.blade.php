@extends('admin.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Payment Print</h4>
                        <hr>

                        <form role="form">

                            <div class="row">
                                {{-- depertment deop down  --}}
                                <div class="form-group mt-4">
                                    <label for="depertment">Depertment: </label> <br>
                                    <select class="form-control" name="depertment" id="depertment">
                                        <option >Select Department</option>
                                        @foreach ($depertments as $depertment)
                                            <option>{{ $depertment->depertmant_name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                {{-- semester deop down --}}

                                <div class="form-group mt-4">
                                    <label for="semester">Semester: </label> <br>
                                    <select class="form-control" name="semester" id="semester">
                                        <option>Select Semester</option>
                                        @foreach ($semesters as $semester)
                                            <option>{{ $semester->semester }}</option>
                                        @endforeach
                                    </select>
                                </div>





                                {{-- Payment type deop down  --}}

                                <div class="form-group mt-4">
                                    <label for="paytype">Payment Type: </label> <br>

                                    <select class="form-control" name="paytype" id="paytype">
                                        <option >Select Payment Type</option>
                                        @foreach ($fees as $fee)
                                            <option>{{ $fee->fees_type}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="text-center d-block">
                                    <br>
                                    <button type="search" class="btn btn-outline-success w-100 ">Search</button>
                                </div>
                            </div>
                        </form>

                        {{-- search end  --}}

                        <hr>

                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th>Depertment</th>
                                        <th>Semester</th>
                                        <th>Class Roll</th>
                                        <th>Payment Type</th>
                                        <th>Bkash Number</th>
                                        <th>Amount</th>
                                        <th>Txn.ID</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @csrf
                                    @foreach ($paymentstatuses as $paymentstatus)
                                        @if ($paymentstatus->status == 1)
                                            <tr align="center">
                                                <td>{{ $paymentstatus->depertment }}</td>
                                                <th>{{ $paymentstatus->semester }}</th>
                                                <td>{{ $paymentstatus->roll }}</td>
                                                <td>{{ $paymentstatus->paytype }}</td>
                                                <td>{{ $paymentstatus->bkashnum }}</td>
                                                <td>{{ $paymentstatus->amount }}</td>
                                                <td>{{ $paymentstatus->txnid }}</td>
                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>

    <!-- content-wrapper ends -->
        @endsection
