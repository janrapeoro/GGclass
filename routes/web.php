<?php


use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


// students-list.blade.php
Route::get('/students-list', [StudentController::class, 'index'])->name('student-list');

// student-data.blade.php
// Route::view('/students-data', 'grade-book.student-data.student-data')->name('student-data');
Route::get('/student/{school_id}', [StudentController::class, 'show'])->name('student.show');

// student-assessment.blade.php
Route::get('/student-assessment/{school_id}/{assessment_id}', [StudentController::class, 'assessment'])->name('student-assessment');






// Sample

// Route::get('/', function() { return view('welcome');});

// Route::view('/', 'post.index')->name('home');
// Route::view('/students-list', 'grade-book.student-list')->name('students-list');