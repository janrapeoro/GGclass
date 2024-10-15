@extends('components.layout')


@section('landing')
{{-- Custom CSS --}}
<link rel="stylesheet" href="{{asset('css/grade-book/student-data/left-corner.css')}}">
<link rel="stylesheet" href="{{asset('css/grade-book/student-assessment/student-assessment.css')}}">

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
                <h1 class="text">{{ $assessment->assessment_name }}</h1>
            </div>
            <div class="col-md-4 mt-4">
                <button type="button" class="export">Export</button>
            </div>
        </div>
    </div>
</header>

<div class="custom-line-2 container-sm container-md container-lg"></div>



<main>
  <div class="left-right container-fluid mt-5">
      <div class="left-container">
          <div class="mt-2">
              <img class="profile-img " src="{{ asset('img/ainz.jpg') }}" alt="Profile">
              <h3 class="in-game-name mt-5">{{ $student_data->in_game_name }}</h3>
              <p class="course ">{{ $student_data->course }}</p>

              <div class="custome-line-3"></div>

              <p class="student-name fw-bold mt-3">{{ $student_data->full_name }}</p>
              <p class="school-id">Grading System: {{ $assessment->grading_system }}</p>
              <p class="email">{{ $student_data->email }}</p>
              <div class="custome-line-3"></div>

              <div class="buttons">
              
                <div class="first-button">
                    <a href="" class="btns">Attendance</a>
                </div>

                <div class="second-button">
                    <a href="" class="btns">Feedback</a>
                </div>

                <div class="third-button">
                    <a href="" class="btns">Grade</a>
               </div>

              </div>
          </div>
      </div>
      
      <div class="container right-container">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($assessment_types as $type)
                    <div class="col-6 assessment">
                        <!-- Display the assessment type name, e.g., Quiz 1, Quiz 2 -->
                        <p class="h3 title">{{ $type->assessment_type_name }}</p>
                        
                        <!-- Display the student's score for this assessment type -->
                        <p class="h5 score">
                            Score: 
                            @if(isset($scores[$type->assessment_type_id]))
                                {{ $scores[$type->assessment_type_id]->score }}
                            @else
                                No Grade
                            @endif
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    

  </div>
</main>



@endsection