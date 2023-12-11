@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Add Fees Types</h4>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{route('manage.Category')}}" type="button" class="btn btn-outline-danger">Back ></a>
                        </div>
                        <hr>

                        <form action="{{ route('new.fee.category') }}" method="POST"
                        role="form"  enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <div class="form-group mt-4">
                                    <label for="fees_type">Fees Type</label> <br>
                                    <input  type="text" name="fees_type" class="form-control"  id="fees_type"
                                        placeholder="Fees Type" required>
                                </div>

                                <div class="text-center d-block">
                                    <br>
                                    <button type="submit" class="btn btn-outline-success w-100 ">Submite</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
