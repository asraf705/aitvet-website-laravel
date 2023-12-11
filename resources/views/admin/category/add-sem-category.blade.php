@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Add Semester</h4>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('manage.Category') }}" type="button" class="btn btn-outline-danger">Back ></a>
                        </div>
                        <hr>

                        <form action="{{ route('new.sem.category') }}" method="POST" role="form">

                            @csrf

                            <div class="row">

                                <div class="form-group mt-4">
                                    <label for="semester">Semester</label> <br>
                                    <input type="text" name="semester" class="form-control" id="semester"
                                        placeholder="Semester" required>
                                </div>

                                <div class="text-center d-block">
                                    <br>
                                    <button type="submit" class="btn btn-outline-success w-100 ">Save</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
