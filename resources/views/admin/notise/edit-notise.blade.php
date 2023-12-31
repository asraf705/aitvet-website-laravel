@extends('admin.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Add Notise</h4>
                        <hr>
                        <form action="{{ route('notise.update',$notise->id) }}" method="POST" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group mt-4">
                                    <label for="titel">Titel</label> <br>
                                    <input type="text" name="titel" class="form-control" id="titel"
                                        placeholder="Titel" value="{{$notise->titel}}" required>
                                </div>
                                <div class="form-group mt-4">
                                    <label for="image" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="image" name="image" value="{{$notise->image}}">
                                </div>
                                <div class="text-center d-block">
                                    <br>
                                    <button type="submit" class="btn btn-primary"><i class="mdi mdi-content-paste"></i>Save</button>                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
