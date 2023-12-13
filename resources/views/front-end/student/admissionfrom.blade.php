@extends('front-end.master')

@include('front-end.include.header')

@section('content')
    <main id="main" data-aos="fade-up">

        <section id="about" class="aboutall mt-3">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="content pt-2 pt-lg-0 pl-0 pl-lg-2 ">

                            <div class=" justify-content-between align-items-center">
                                <h4 class="text-center" style="color:#7cc576">Student Sign Up</h4>
                                <p style="color: red;size:20px;" class=" text-center">Please enter all information carefully
                                </p>
                            </div>
                            <hr>

                            <form method="POST" role="form">
                                @csrf

                                <div class="row">

                                    {{-- Student name --}}
                                    <div class="form-group col-md-6 mt-3">
                                        <label for="Stuname">Student's Name<samp style="color: red">*</samp></label> <br>
                                        <input type="text" class="form-control" name="Stuname" id="Stuname"
                                            placeholder="Student Name " required>
                                    </div>

                                    <!----- img ---->
                                    <div class="form-group col-md-6 mt-3">
                                        <label for="image">Image (Passport Size Image)<samp
                                                style="color: red">*</samp></label> <br>
                                        <input type="file" class="form-control" name="image" id="image"
                                            placeholder="Passport Size Image">
                                    </div>

                                    {{-- Student Id --}}
                                    <div class="form-group col-md-4 mt-3">
                                        <label for="stuid">Student ID<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="stuid" id="stuid"
                                            placeholder="Student Id " required>
                                    </div>

                                    {{-- Student Depertment --}}
                                    <div class="form-group col-md-5 mt-3">
                                        <label for="stuname">Depertment<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="stuname" id="stuname"
                                            placeholder="Student Id " required>
                                    </div>

                                    {{-- Sessions --}}
                                    <div class="form-group col-md-3 mt-3">
                                        <label for="sessions">Sessions<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="sessions" id="sessions"
                                            placeholder="Sessions" required>
                                    </div>

                                    {{-- Student's number --}}
                                    <div class="form-group mt-3">
                                        <label for="stunumber">Student's Number<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="stunumber" id="stunumber"
                                            placeholder="Phone Number(017XXXXXXXX)" required>
                                    </div>

                                    {{-- Father's name --}}
                                    <div class="form-group mt-3">
                                        <label for="father_name">Father's Name<samp style="color: red">*</samp></label> <br>
                                        <input type="text" class="form-control" name="father_name" id="father_name"
                                            placeholder="Father's Name" required>
                                    </div>

                                    {{-- Father's number --}}
                                    <div class="form-group mt-3">
                                        <label for="father_number">Father's Number<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="father_number" id="father_number"
                                            placeholder="Phone Number(017XXXXXXXX)" required>
                                    </div>

                                    {{-- Mother's name --}}
                                    <div class="form-group mt-3">
                                        <label for="mother_name">Mother's Name<samp style="color: red">*</samp></label> <br>
                                        <input type="text" class="form-control" name="mother_name" id="mother_name"
                                            placeholder="Mother's Name" required>
                                    </div>

                                    {{-- Mother's number --}}
                                    <div class="form-group mt-3">
                                        <label for="mother_number">Mother's Number<samp style="color: red">*</samp></label> <br>
                                        <input type="number" class="form-control" name="mother_number" id="mother_number"
                                            placeholder="Phone Number(017XXXXXXXX)" required>
                                    </div>

                                    <br>
                                    <div class="text-center d-block">
                                        <br>
                                        <button type="submit" class="btn btn-outline-success w-100 ">Register</button>
                                        <p class="small fw-bold mt-2 pt-1 mb-0">already have an account? <a
                                                href="{{ route('stulogin') }}" class="link-danger">Login</a></p>
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
