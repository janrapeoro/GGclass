<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Assessment;
use Illuminate\Http\Request;

class StudentController extends Controller
{
// Method to get all students and pass them to the view
public function index () {
  // Retrieve all students from the database
  $student_list = Student::orderBy('full_name')->get(); 

  // Pass the students data to the 'student-list' view
  return view('grade-book.student-list.student-list', compact('student_list'));
}

// Method to display individual student data
public function show($school_id)
{
  // Retrieve the student by their school_id
  $student_data = Student::where('school_id', $school_id)->firstOrFail(); 
  // firstOrFail() returns the first result, or throws an error if no result is found

  // Fetch the assessments from the database
  $test = Assessment::all();

  // Return the 'student-data' view and pass the student data to it
  return view('grade-book.student-data.student-data',  compact('student_data', 'test'));
}
      
// New method to display student assessment
public function assessment($school_id, $assessment_id)
{
  // Retrieve the student by their school_id
  $student_data = Student::where('school_id', $school_id)->firstOrFail();

  // Retrieve the specific assessment by its ID
  $assessment = Assessment::where('assessment_id', $assessment_id)->firstOrFail();

  // Return the 'student-assessment' view and pass the student data and assessment name
  return view('grade-book.student-assessment.student-assessment', compact('student_data', 'assessment'));
}


}
