@extends('front-end.master')

@include('front-end.include.header')

@section('content')
    <main id="main" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        {{-- <section id="breadcrumbs" class="breadcrumbs"> --}}

        </section>
        <!-- End Breadcrumbs -->

        <section id="about" class="aboutall mt-3" >
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="content pt-2 pt-lg-0 pl-0 pl-lg-2 ">


                            <form  method="POST"
                                role="form">
                                @csrf

                                <div class="row">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h4>Student Profile</h4>
                                    </div>
                                    <hr>

                                    {{-- Student name --}}
                                    <div class="form-group col-md-6 mt-3">
                                        <label for="Stuname">Student's Name<samp style="color: red">*</samp></label> <br>
                                        <input type="text" class="form-control" name="Stuname" id="Stuname"
                                            placeholder="Student Name "  required>
                                    </div>

                                    <!----- img ---->
                                    <div class="form-group col-md-6 mt-3">
                                        <label for="image">Image (Passport Size Image)<samp style="color: red">*</samp></label> <br>
                                        <input type="file" class="form-control" name="image" id="image"
                                            placeholder="Passport Size Image">
                                    </div>

                                    {{-- Student Id --}}
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="Stuname">Student ID<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="Stuid" id="Stuid"
                                            placeholder="Student Id "  required>
                                    </div>

                                    {{-- Student Depertment --}}
                                    <div class="form-group col-md-5 mt-3">
                                        <label for="Stuname">Depertment<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="Stuid" id="Stuid"
                                            placeholder="Student Id "  required>
                                    </div>

                                    {{-- Sessions --}}
                                    <div class="form-group col-md-3 mt-3">
                                        <label for="Stuname">Sessions<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="Stuid" id="Stuid"
                                            placeholder="Sessions"  required>
                                    </div>

                                    {{-- Student's number --}}
                                    <div class="form-group mt-3">
                                        <label for="Stuname">Student's Number<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="Stuid" id="Stuid"
                                            placeholder="Phone Number(017XXXXXXXX)"  required>
                                    </div>

                                    {{-- Father's name --}}
                                    <div class="form-group mt-3">
                                        <label for="Stuname">Father's Name<samp style="color: red">*</samp></label> <br>
                                        <input type="text" class="form-control" name="Stuname" id="Stuname"
                                            placeholder="Father's Name"  required>
                                    </div>

                                    {{-- Father's number --}}
                                    <div class="form-group mt-3">
                                        <label for="Stuname">Father's Number<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="Stuid" id="Stuid"
                                            placeholder="Phone Number(017XXXXXXXX)"  required>
                                    </div>

                                    {{-- Mother's name --}}
                                    <div class="form-group mt-3">
                                        <label for="Stuname">Mother's Name<samp style="color: red">*</samp></label> <br>
                                        <input type="text" class="form-control" name="Stuname" id="Stuname"
                                            placeholder="Mother's Name"  required>
                                    </div>

                                    {{-- Mother's number --}}
                                    <div class="form-group mt-3">
                                        <label for="Stuname">Mother's Number<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="Stuid" id="Stuid"
                                            placeholder="Phone Number(017XXXXXXXX)"  required>
                                    </div>

                                    <br>
                                    <div class="text-center d-block">
                                        <br>
                                        <button type="submit" class="btn btn-outline-success w-100 ">Submit</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
