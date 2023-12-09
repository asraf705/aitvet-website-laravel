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

                        <div class="accordion accordion-flush" id="accordionFlushExample">

                            <!--  depertment -->

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#depertment" aria-expanded="false" aria-controls="depertment">
                                        Depertment
                                    </button>
                                </h2>
                                <div id="depertment" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <!-- add depertment -->
                                        <div class="d-grid gap-2">
                                            <a href="{{ route('category.create') }}" type="button"
                                                class="btn btn btn-outline-success">Add Depertment</a>
                                        </div>
                                        <hr>
                                        <!-- manage depertment -->
                                        <div class="table-responsive pt-3">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr align="center">
                                                        <th>Sl</th>
                                                        <th>Titel</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody align="center">


                                                        <tr>
                                                            <td>sdfdf</td>
                                                            <td>df</td>
                                                            <td>fdghf</td>
                                                        </tr>

                                                </tbody>
                                            </table>

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
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                        accordion body. Let's imagine this being filled with some actual content.</div>
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
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                        demonstrate the <code>.accordion-flush</code> class. This is the third item's
                                        accordion body. Nothing more exciting happening here in terms of content, but just
                                        filling up the space to make it look, at least at first glance, a bit more
                                        representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
