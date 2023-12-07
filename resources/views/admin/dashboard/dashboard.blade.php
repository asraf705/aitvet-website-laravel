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
                                <a class="navbar-brand"><b>Payment Status</a>

                                    <form class="form-inline" action="">
                                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search"
                                           value="{{$search}}" aria-label="Search">
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
                                        <th>Payment Type</th>
                                        <th>Bkash Number</th>
                                        <th>Class Roll</th>
                                        <th>Tnx. ID</th>
                                        <th>Amount</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @csrf
                                    @foreach ($paymentstatuses as $paymentstatus)
                                        @if ($paymentstatus->status == 0)
                                            <tr align="center">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $paymentstatus->paytype }}</td>
                                                <td>{{ $paymentstatus->bkashnum }}</td>
                                                <td>{{ $paymentstatus->roll }}</td>
                                                <td>{{ $paymentstatus->txnid }}</td>
                                                <td>{{ $paymentstatus->amount }}</td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            @if ($paymentstatus->status == 0)
                                                                <a href="{{ route('paymentstatuses.show', $paymentstatus->id) }}"
                                                                    class="btn btn-secondary btn-success btn-fw text-white">Conform</a>
                                                            @endif
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <a href="#"
                                                                class="btn btn-primary btn-primary btn-fw">Edit</a>
                                                        </tr>
                                                        <tr></tr>
                                                        <tr>
                                                            <form
                                                                action="{{ route('paymentstatuses.destroy', $paymentstatus->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-secondary btn-danger btn-fw">Delete</button>
                                                            </form>
                                                        </tr>
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
