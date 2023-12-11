@extends('admin.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4>Admintion Category</h4>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('manage.Category') }}" type="button" class="btn btn-outline-danger">Back ></a>
                        </div>
                        <hr>

                        <form action="{{route('admitioncategory.store')}}" method="POST" role="form" >

                            @csrf

                            <div class="row">
                                <div class="form-group mt-3">
                                    <label for="depertmant_name">Depertment</label> <br>
                                    <select name="depertmant_id" id="depertment_id" class="form-select"  required>
                                        <option value="">Select Depertment</option>
                                        @foreach ($depertment_categories as $depertment)
                                            <option value="{{$depertment->depertmant_name}}"> {{$depertment->depertmant_name}}</option>
                                        @endforeach

                                    </select>
                                    {{-- <input type="text" name="depertmant_name" class="form-control" id="depertmant_name"
                                        placeholder="Depertment" required> --}}
                                </div>

                                <div class="text-center d-block">
                                    <br>
                                    <button type="submit" class="btn btn-success w-25" name="status" value="1">Open</button>
                                    <button type="submit" class="btn btn-danger w-25" name="status" value="0">Close</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
