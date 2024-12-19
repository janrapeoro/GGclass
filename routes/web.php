<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



// Gradebook

// grade-book.student-list.student-list
Route::get('/students-list', [StudentController::class, 'index'])->name('student-list');

// grade-book.student-data.student-assessment
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student-details');

// grade-book.student-assessment.student-score
Route::get('/students/{student_id}/assessment/{assessment_id}/scores', [StudentController::class, 'viewAssessmentScores'])->name('student-assessment-scores');

// Route to view a student's exam scores
Route::get('/students/{student_id}/exam/{exam_id}/scores', [StudentController::class, 'viewExamScores'])->name('student-exam-scores');

// Route for exporting the Excel file
Route::get('/students-list/export', [StudentController::class, 'export'])->name('student-list.export');


//class-dashboard // 
Route::view('/class-dashboard', 'class-dashboard.class-dashboard')->name('create-class');
Route::view('/class-list', 'class-dashboard.class-list')->name('class-list');

Route::post('/classes/store', [ClassController::class, 'store'])->name('classes.store');

Route::get('/class-list', [ClassController::class, 'index'])->name('class-list');




// Sample Route

// Route::view('/students-data', 'grade-book.student-data.student-assessment')->name('students-assessment');
// Route::view('/students-score', 'grade-book.student-assessment.student-score')->name('students-score');

// Route::get('/', function() { return view('welcome');});

// Route::view('/', 'post.index')->name('home');

// Route::view('/students-list', 'grade-book.student-list')->name('students-list');


// student-data.blade.php
// Route::view('/students-data', 'grade-book.student-data.student-data')->name('student-data');
// Route::get('/student/{school_id}', [StudentController::class, 'show'])->name('student.show');

// student-assessment.blade.php
// Route::get('/student-assessment/{school_id}/{assessment_id}', [StudentController::class, 'assessment'])->name('student-assessment');