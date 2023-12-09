@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Add Category</h4>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{route('category.index')}}" type="button" class="btn btn-outline-danger">Back ></a>
                        </div>
                        <hr>

                        <form action="{{ route('category.store') }}" method="POST"
                        role="form"  enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <div class="form-group mt-4">
                                    <label for="titel">Titel</label> <br>
                                    <input  type="text" name="titel" class="form-control"  id="titel"
                                        placeholder="Titel" required>
                                </div>

                                <div class="form-group mt-4">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image">
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
