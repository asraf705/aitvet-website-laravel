@extends('front-end.master')

@include('front-end.include.header')

@section('content')
    <main id="main" data-aos="fade-up">

        <section id="about" class="aboutall mt-3">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 mt-5">
                        <div class="content pt-2 pt-lg-0 pl-0 pl-lg-2 ">
                            <div class="justify-content-between align-items-center">
                                <h4 class="text-center" style="color:#7cc576">Student Login</h4>
                            </div>
                            <hr style=" hight:15px;">
                            <form method="get" role="form">
                                <div class="row">

                                    <div class="form-group mt-3">
                                        <label>Student ID</label> <br>
                                        <input type="number" class="form-control" name="search" id="search"
                                            placeholder="Student ID">
                                    </div>
                                    <div class="text-center">
                                        <br>
                                        <button type="submit" class="btn btn-outline-success w-100 ">Search</button>
                                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('sturegister')}}"
                                                class="link-danger">Register</a></p>
                                    </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </main>
@endsection
