@extends('admin.master')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <nav class="navbar navbar-light bg-light justify-content-between">
                                <a class="navbar-brand"><b>Payment Status</b></a>

                                <form class="form-inline" action="">
                                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                                        value="{{ $search }}" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </nav>
                            <hr>
                        </div>


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
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @csrf
                                    @foreach ($paymentstatuses as $paymentstatus)
                                        @if ($paymentstatus->status == 1)
                                            <tr align="center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $paymentstatus->depertment }}</td>
                                                <th>{{ $paymentstatus->semester }}</th>
                                                <td>{{ $paymentstatus->roll }}</td>
                                                <td>{{ $paymentstatus->paytype }}</td>
                                                <td>{{ $paymentstatus->bkashnum }}</td>
                                                <td>{{ $paymentstatus->amount }}</td>
                                                <td>{{ $paymentstatus->txnid }}</td>
                                                <td>
                                                    <table border="0" >
                                                        <th>
                                                            @if ($paymentstatus->status == 0)
                                                                <a href="{{ route('paymentstatuses.show', $paymentstatus->id) }}"
                                                                    class="btn btn-secondary btn-success btn-fw text-white">Complete</a>
                                                            @else
                                                                <a href="{{ route('paymentstatuses.show', $paymentstatus->id) }}"
                                                                    class="btn btn-secondary btn-warning btn-fw text-white">On
                                                                    Hold</a>
                                                            @endif
                                                        </th>

                                                        <th>
                                                            <a href="{{ route('paymentstatuses.edit', $paymentstatus->id) }}"
                                                                class="btn btn-primary btn-primary btn-fw">Edit</a>
                                                        </th>

                                                        <th>
                                                            <form
                                                                action="{{ route('paymentstatuses.destroy', $paymentstatus->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-secondary btn-danger btn-fw">Delete</button>
                                                            </form>
                                                        </th>

                                                    </table>
                                                </td>
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
