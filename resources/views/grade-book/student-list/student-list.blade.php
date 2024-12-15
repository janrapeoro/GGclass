@extends('components.layout')

@section('landing')
    {{-- Custom CSS --}}

    <link rel="stylesheet" href="{{ asset('css/grade-book/student-list/right-corner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grade-book/student-list/left-corner.css') }}">

    <header>
        <div class="header container-md text-center mt-2">
            <a href="#">Bulletin</a>
            <a href="#">Tutorials</a>
            <a href="#">Challenges</a>
            <a href="#">Players</a>
        </div>
    </header>

    <div class="custom-line container-sm container-md container-lg"></div>

    <header>
        <div class="container first-line">
            <div class="row justify-content-between">
                <div class="col-md-4 mt-4">
                    <h1 class="text">Student Assessment</h1>
                </div>

                <div class="col-md-4 mt-4">
                    <a href="{{ route('student-list.export') }}"> <button type="button" class="export">Export</button> </a>
                </div>


            </div>
        </div>
    </header>

    <div class="custom-line-2 container-sm container-md container-lg"></div>


    <main>
        <div class="left-right container mt-4">

            <div class="left-container">

                <div class ="class-theme">
                    <h6 class="mt-3 school-year">School Year: 2024-2025</h6>
                    <h6 class="mt-3 semester ">Semester: 1st</h6>
                    <h6 class="mt-3 section ">Section: N1Am</h6>
                </div>

                <div class="">
                    <h6 class="mt-3 class">CSDC105</h6>
                    <h6 class="mt-3 schedule"> TTH 9:00AM - 10:30AM </h6>
                    <h6 class="mt-3 room">411B</h6>
                </div>

                <div class="line-between"></div>

                <div class="first-button">
                    <a href="" class="btns">Attendance</a>
                </div>

                <div class="second-button">
                    <a href="" class="btns">Feedback</a>
                </div>

                <div class="third-button">
                    <a href="" class="btns">Gradebook</a>
                </div>

            </div>

            <div class="right-container ">
                <table class="styled-table">
                    <thead>
                        <tr class="table-head">
                            <th>ID number</th>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Grading System</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($student_list as $students)
                            <tr class="table-row"
                                onclick="location.href='{{ route('student-details', ['id' => $students->student_id]) }}'">
                                <td>{{ $students->student_id }}</td>
                                <td>{{ $students->full_name }}</td>
                                <td>{{ $students->course }}</td>
                                <td>{{ $students->grading_system }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </main>
@endsection
