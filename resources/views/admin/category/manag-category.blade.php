@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Manage Category</h4>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            {{-- <a href="{{route('category.create')}}" type="button" class="btn btn btn-outline-success">Add Notise</a> --}}
                        </div>
                        <hr>

                        <div class="accordion accordion-flush" id="managecategory">

                            <!--  depertment -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#depertment" aria-expanded="false" aria-controls="depertment">
                                        Depertment
                                    </button>
                                </h2>
                                <div id="depertment" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                    data-bs-parent="#managecategory">
                                    <div class="accordion-body">
                                        <!-- add depertment -->
                                        <div class="d-grid gap-2">
                                            <a href="{{ route('depertment.category') }}" type="button"
                                                class="btn btn btn-outline-success">Add Depertment</a>
                                        </div>
                                        <hr>
                                        <!-- manage depertment -->
                                        <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Sl</th>
                                                        <th>Depertment</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody align="center">

                                                    @csrf
                                                    @foreach ($depertments as $depertment)
                                                        <tr>
                                                            <td data-label="Sl">{{ $loop->iteration }}</td>
                                                            <td data-label="Depertment">{{ $depertment->depertmant_name }}
                                                            </td>
                                                            <td data-label="Action">
                                                                <table>
                                                                    <tr>
                                                                        <a href="{{ route('edit.dept.category', ['id' => $depertment->id]) }}"
                                                                            class="btn btn-primary btn-sm">Edit</a>
                                                                        <a href="{{ route('delete.dept.category', ['id' => $depertment->id]) }}"
                                                                            class="btn btn-danger btn-sm">Delete</a>
                                                                    </tr>

                                                                </table>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--  Semester -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#semester" aria-expanded="false" aria-controls="semester">
                                        Semester
                                    </button>
                                </h2>
                                <div id="semester" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                    data-bs-parent="#managecategory">
                                    <div class="accordion-body">
                                        <!-- add semester -->
                                        <div class="d-grid gap-2">
                                            <a href="{{ route('semester.category') }}" type="button"
                                                class="btn btn btn-outline-success">Add Semester</a>
                                        </div>
                                        <hr>
                                        <!-- manage depertment -->
                                        <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Sl</th>
                                                        <th>Semester</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody align="center">
                                                    @csrf
                                                    @foreach ($semester as $semester)
                                                        <tr>
                                                            <td data-label="Sl">{{ $loop->iteration }}</td>
                                                            <td data-label="Semester">{{ $semester->semester }}</td>
                                                            <td data-label="Action">
                                                                <table>
                                                                    <tr>
                                                                        <a href="{{ route('delete.sem.category', ['id' => $semester->id]) }}"
                                                                            class="btn btn-danger btn-sm">Delete</a>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  Fess Type -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#fees" aria-expanded="false" aria-controls="fees">
                                        Fess Type
                                    </button>
                                </h2>
                                <div id="fees" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                    data-bs-parent="#managecategory">
                                    <div class="accordion-body">
                                        <!-- add fees -->
                                        <div class="d-grid gap-2">
                                            <a href="{{ route('fees.category') }}" type="button"
                                                class="btn btn btn-outline-success">Add fees</a>
                                        </div>
                                        <hr>
                                        <!-- manage fees -->
                                        <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Sl</th>
                                                        <th>Fees</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody align="center">
                                                    @csrf
                                                    @foreach ($fees as $fee)
                                                        <tr>
                                                            <td data-label="Sl">{{ $loop->iteration }}</td>
                                                            <td data-label="Fess">{{ $fee->fees_type }}</td>
                                                            <td data-label="Action">
                                                                <table>
                                                                    <tr>
                                                                        <a href="{{ route('delete.fee.category', ['id' => $semester->id]) }}"
                                                                            class="btn btn-danger btn-sm">Delete</a>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--  admintion Type -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#admintion" aria-expanded="false" aria-controls="admintion">
                                        Admintion Status
                                    </button>
                                </h2>
                                <div id="admintion" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                    data-bs-parent="#managecategory">
                                    <div class="accordion-body">
                                        <!-- add admintion -->

                                        <div class="d-grid gap-2">
                                            <a href="{{ route('admi.category') }}" type="button"
                                                class="btn btn btn-outline-success">Add Admintion</a>
                                        </div>
                                        <hr>

                                        <!-- admintion fees -->
                                        <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Sl</th>
                                                        <th>Depertment</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody align="center">
                                                    @csrf
                                                    @foreach ($admintion as $admintion)
                                                        <tr>
                                                            <td data-label="Sl">{{ $loop->iteration }}</td>
                                                            <td data-label="Depertment">{{ $admintion->depertments->depertmant_name}}</td>
                                                            <td data-label="Status">{{$admintion->status== 1 ? 'Open' : 'Close' }}</td>
                                                        </tr>
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
            </div>
        </div>
    </div>
@endsection
