<?php

namespace App\Http\Controllers;
use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        // Retrieve all assessments from the database
        $assessments = Assessment::all(); // Get all assessments

        // Return the 'student-data' view and pass the assessments to it
        return view('grade-book.student-data.student-data', compact('assessments'));
    }
}
