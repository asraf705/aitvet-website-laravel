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

                        <form method="GET" id="ex" role="form">

                            <div class="row">
                                {{-- depertment deop down  --}}
                                <div class="form-group mt-4">
                                    <label for="depertment">Depertment: </label> <br>
                                    <select class="form-control" name="depertment" id="depertment">
                                        <option >Select Department</option>
                                        @foreach ($depertments as $depertment)
                                            <option data-filter="{{ $depertment->depertmant_name }}">
                                                {{ $depertment->depertmant_name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                                {{-- semester deop down --}}

                                <div class="form-group mt-4">
                                    <label for="semester">Semester: </label> <br>
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





                                {{-- Payment type deop down  --}}

                                <div class="form-group mt-4">
                                    <label for="paytype">Payment Type: </label> <br>

                                    <select class="form-control" name="paytype" id="paytype">
                                        <option >Select Payment Type</option>
                                        <option >New Admission Fee</option>
                                        <option value="Admission">Admission Fee</option>
                                        <option value="Re Admission">Re-Admission Fee</option>
                                        <option value="Form Fillup">Form Fill up Fee</option>
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
                                        <th>Sl</th>
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
                                                <td>{{ $loop->iteration }}</td>
                                                <td class='{{ $depertment->depertmant_name }}'>
                                                    {{ $paymentstatus->depertment }}</td>
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
