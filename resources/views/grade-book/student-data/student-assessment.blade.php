@extends('components.layout')

@section('landing')
    {{-- Custom CSS --}}

    <link rel="stylesheet" href="{{ asset('css/grade-book/student-data/left-corner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grade-book/student-data/table.css') }}">


    <header>
        {{-- <div class="header container-sm text-center mt-2">
            <a href="#">Bulletin</a>
            <a href="#">Tutorials</a>
            <a href="#">Challenges</a>
            <a href="#">Players</a>
        </div> --}}

        <div class="container-sm first-line">
            <div class="row justify-content-between">
                <div class="col-md-4 mt-4">
                    <h1 class="text">Assessment Type</h1>
                </div>
                <div class="col-md-4 mt-4">
                    <a href="{{ route('student-list.export') }}">
                        <button type="button" class="export">Export</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="custom-line-2 container-sm container-md container-lg"></div>
    </header>

    <main>
        <div class="left-right container mt-4">

            <div class="left-container">

                <div class ="class-theme">
                    <h6 class="school-year">In Game Name:{{ $student->in_game_name }} </h6>
                    <h6 class="semester ">Course: {{ $student->course }}</h6>
                    <h6 class="section ">Name: {{ $student->full_name }}</h6>
                </div>

                <div class="">
                    <h6 class="mt-3 class">ID number:{{ $student->student_id }} </h6>
                    <h6 class="mt-3 schedule">Email: {{ $student->email }}</h6>
                    <h6 class="mt-3 room">Grading System:{{ $student->grading_system }} </h6>
                </div>

                <div class="line-between"></div>

                <div class="first-button">
                    <a href="" class="btns">Attendance</a>
                </div>

                <div class="second-button">
                    <a href="" class="btns">Feedback</a>
                </div>

                {{-- <div class="third-button">
                    <a href="" class="btns">Gradebook</a>
                </div> --}}

            </div>

            <div class="right-container">
                <table class="styled-table">
                    <thead>
                        <tr class="table-head">
                            <th>
                                <p class="challenge">Challenge type</p>
                            </th>
                            <th>
                                <p class="percentage">Challenge Percentage </p>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($assessments as $assessment)
                            <tr class="table-row"
                                onclick="window.location='{{ route('student-assessment-scores', ['student_id' => $student->student_id, 'assessment_id' => $assessment->assessment_id]) }}'">
                                <td>
                                    <p class="challenge">{{ $assessment->assessment_name }}</p>
                                </td>
                                <td>
                                    <p class="percentage">{{ $assessment->assessment_percentage }}%</p>
                                </td>
                            </tr>
                        @endforeach

                        <!-- New code for exams -->
                        @foreach ($exams as $exam)
                            <tr class="table-row"
                                onclick="window.location='{{ route('student-exam-scores', ['student_id' => $student->student_id, 'exam_id' => $exam->exams_id]) }}'">
                                <td>
                                    <p class="challenge">{{ $exam->exam_name }}</p>
                                </td>
                                <td>
                                    <p class="percentage">{{ $exam->exam_percentage }}%</p>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>


                </table>















                {{-- <div class="challenge-type">
                    <img src="{{ asset('img/icon.png') }}" alt="icon" class="icon">
                    <h4 class="assessment">Quiz</h4>
                </div>

                <div class="challenge-type">
                    <img src="{{ asset('img/icon.png') }}" alt="icon" class="icon">
                    <h4 class="assessment">Quiz</h4>
                </div>

                <div class="challenge-type">
                    <img src="{{ asset('img/icon.png') }}" alt="icon" class="icon">
                    <h4 class="assessment">Quiz</h4>
                </div> --}}
            </div>

        </div>
    </main>
@endsection
