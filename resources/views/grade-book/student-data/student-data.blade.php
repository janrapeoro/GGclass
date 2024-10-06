@extends('components.layout')


@section('landing')
{{-- Custom CSS --}}
<link rel="stylesheet" href="{{asset('css/grade-book/student-data/left-corner.css')}}">
<link rel="stylesheet" href="{{asset('css/grade-book/student-data/student-data.css')}}">



<main>
  <div class="left-right container-fluid mt-5">
      <div class="left-container">
          <div class="mt-2">
              <img class="profile-img " src="{{ asset('img/ainz.jpg') }}" alt="Profile">
              <h3 class="in-game-name mt-5">{{ $student_data->in_game_name }}</h3>
              <p class="course ">{{ $student_data->course }}</p>

              <div class="custome-line-3"></div>

              <p class="student-name fw-bold mt-3">{{ $student_data->full_name }}</p>
              <p class="school-id">ID number: {{ $student_data->school_id }}</p>
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

        <div class="container assessment-container">
          <div class="row justify-content-center assessment-list">
              @foreach($test as $assessment)
                  <div class="col-6 assessment">
                      <p class="h5 title">{{ $assessment->assessment_name }}</p>
                      <a href="{{route('student-assessment')}}">
                          <button type="button" class="open">Open</button>
                      </a>
                  </div>
              @endforeach
          </div>
      </div>
       
      </div>

  </div>
</main>



@endsection