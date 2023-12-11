@extends('front-end.master')

@include('front-end.include.header')

@section('content')
    <main id="main" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">

        </section>
        <!-- End Breadcrumbs -->

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Admission</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Academic</li>
                        <li>Admission</li>
                    </ol>
                </div>
                <hr>
            </div>
        </section>
        <!-- End Breadcrumbs -->
        <!-- Aitvet About Us Section -->

        <section id="about" class="aboutall">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12" data-aos="fade-left">

                        <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                            <h3>Academic</h3>
                            <hr>
                            <p class="fst-italic">
                                AhsanullahInstitute of Technical and Vocational Education and Training (AITVET) offers
                                education for each and every determent of a global standard. We put emphasis equal
                                importance in the both practical and theoretical. The curriculum so focuses on student –
                                oriented education, enhancing problem solving approaches, superior level thinking skills and
                                learning experience.

                            <h4>Diploma in Engineering and Textile Programs of AITVET:</h4>
                            <hr>

                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th >Serial no</th>
                                        <th >Curriculum Code no</th>
                                        <th >Name of the Technology </th>
                                        <th colspan="2">Number of seats in Karwan Bazar Campus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr align="center">
                                        <td colspan="3"></td>
                                        <td>Morning Shift</td>
                                        <td>Day Shift</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Sl. no:">01</td>
                                        <td data-label="Curriculum Code:">61</td>
                                        <td data-label="Depertment:">Architecture Technology</td>
                                        <td data-label="Morning Shift:">50</td>
                                        <td data-label="Day Shift:">50</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Sl. no:">02</td>
                                        <td data-label="Curriculum Code:">63</td>
                                        <td data-label="Depertment:">Chemical Technology</td>
                                        <td data-label="Morning Shift:">50</td>
                                        <td data-label="Day Shift:">None</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Sl. no:">03</td>
                                        <td data-label="Curriculum Code:">64</td>
                                        <td data-label="Depertment:">Civil Technology</td>
                                        <td data-label="Morning Shift:">50</td>
                                        <td data-label="Day Shift:">100</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Sl. no:">04</td>
                                        <td data-label="Curriculum Code:">66</td>
                                        <td data-label="Depertment:">Computer Technology</td>
                                        <td data-label="Morning Shift:">50</td>
                                        <td data-label="Day Shift:">100</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Sl. no:">05</td>
                                        <td data-label="Curriculum Code:">67</td>
                                        <td data-label="Depertment:">Electrical Technology</td>
                                        <td data-label="Morning Shift:">50</td>
                                        <td data-label="Day Shift:">100</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Sl. no:">06</td>
                                        <td data-label="Curriculum Code:">68</td>
                                        <td data-label="Depertment:">Electronics Technology</td>
                                        <td data-label="Morning Shift:">50</td>
                                        <td data-label="Day Shift:">50</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Sl. no:">07</td>
                                        <td data-label="Curriculum Code:">19</td>
                                        <td data-label="Depertment:">Textile Technology</td>
                                        <td data-label="Morning Shift:">50</td>
                                        <td data-label="Day Shift:">50</td>
                                    </tr>

                                </tbody>
                            </table>

                            <h6 style="color: #188f0d;"><samp style="color: #f30c0c;">*</samp> Shift starts from – 8.00 AM</h6>
                            <h6 style="color: #188f0d;"><samp style="color: #f30c0c;">*</samp> Day Shift starts from – 10.15 AM</h6>

                            <br>

                            <h3>Admission Fee and Semester Fee:</h3>
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr align="center">
                                        <th>Serial no</th>
                                        <th>Expenditure sectors</th>
                                        <th>Amount of tk (for Engineering Technology)</th>
                                        <th>Amount of tk (for Textile Technology)</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr align="center">
                                        <td data-label="Serial no">01</th>
                                        <td data-label="Expenditure sectors">Admission Fee (Admission, Registration and ID card)</td>
                                        <td data-label=" Engineering Technology">5,000 Tk</td>
                                        <td data-label="Textile Technology">5,000/-</td>
                                    </tr>

                                    <tr align="center">
                                        <td data-label="Serial no">02</td>
                                        <td data-label="Expenditure sectors">Tuition Fee</td>
                                        <td data-label=" Engineering Technology">6,500/-</td>
                                        <td data-label="Textile Technology">6,500/-</td>
                                    </tr align="center">

                                    <tr align="center">
                                        <td data-label="Serial no">03</td>
                                        <td data-label="Expenditure sectors">Laboratory Fee</td>
                                        <td data-label=" Engineering Technology">3,000/-</td>
                                        <td data-label="Textile Technology">4,000/-</td>

                                    </tr>

                                    <tr align="center">
                                        <td data-label="Serial no">04</td>
                                        <td data-label="Expenditure sectors">Internal Exam Fee</td>
                                        <td data-label=" Engineering Technology">500/-</td>
                                        <td data-label="Textile Technology">500/-</td>

                                    </tr>

                                    <tr align="center">
                                        <td data-label="Serial no">05</td>
                                        <td data-label="Expenditure sectors">Establishment Fee</td>
                                        <td data-label=" Engineering Technology">6,000/-</td>
                                        <td data-label="Textile Technology">7,000/-</td>

                                    </tr>

                                    <tr align="center">
                                        <td data-label="Serial no">06</td>
                                        <td data-label="Expenditure sectors">Application fee of online by Bangladesh Technical Education Board</td>
                                        <td data-label=" Engineering Technology">160/-</td>
                                        <td data-label="Textile Technology">160/-</td>

                                    </tr>

                                </tbody>
                            </table>
                            <ul>
                                <li>
                                    <h6 style="color: #188f0d;"><samp style="color: #f30c0c;">*</samp><b>Admission fee is applicable only for 1st semester which
                                            is
                                            5,000/- taka.</b></h6>
                                </li>
                                <li>
                                    <h6 style="color: #188f0d;"><samp style="color: #f30c0c;">*</samp> Diploma in Engineering Semester Fee <b> 16,000/-</b> taka.
                                    </h6>
                                </li>
                                <li>
                                    <h6 style="color: #188f0d;"><samp style="color: #f30c0c;">*</samp> Diploma in Textile Semester Fee<b> 18,000/-</b> taka.</h6>
                                </li>
                            </ul>
                            <br><br>
                            </p>
                            <h3>Admission Information:</h3>
                            <hr>
                            <ol>
                                <li>The minimum educational qualification for getting admission in the first semester of the
                                    Diploma in Engineering course is the GPA prescribed by the Bangladesh Technical
                                    Education Board (BTEB) for passing the S.S.C or equivalent examination.</li><br>
                                <li>H.S.C. (Vocational) Passed students will get the opportunity to be admitted in the
                                    fourth semester directly.</li><br>
                                <li>H.S.C. (Science) Passed students will get the opportunity to be admitted directly in the
                                    third semester.</li><br>
                                <li>Class conducting time: Classes are conducted daily in two shifts from 8 a.m. to 5 p.m.
                                </li><br>
                                <li>Certification: Bangladesh Technical Education Board (BTEB) conducts all the 8 semester
                                    examination and issues certificates to successful students.</li><br>
                                <li>Higher Education: After passing the Diploma in Engineering, there are opportunities to
                                    get higher education as well as jobs in the country and abroad.</li>
                            </ol>

                            <div class="d-grid gap-2 col-lg-12">
                                    <button class="btn btn-success" type="button"><a
                                    href="https://docs.google.com/forms/d/e/1FAIpQLSfsuWbZY3Q8cxl1WccHvDA0dsfq6BxzMUX4xRHsebP1WPvXBA/viewform" style="color:white"> Online Admission Form
                                        2023-2024</a></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Aitvet About Us Section -->


    </main>
@endsection
