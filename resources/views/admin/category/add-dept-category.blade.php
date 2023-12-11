@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Add Depertment</h4>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('manage.Category') }}" type="button" class="btn btn-outline-danger">Back ></a>
                        </div>
                        <hr>

                        <form method="POST" role="form" action="{{ route('new.dept.category') }}">

                            @csrf

                            <div class="row">

                                <div class="form-group mt-4">
                                    <label for="depertmant_name">Depertment</label> <br>
                                    <input type="text" name="depertmant_name" class="form-control" id="depertmant_name"
                                        placeholder="Depertment" required>
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
