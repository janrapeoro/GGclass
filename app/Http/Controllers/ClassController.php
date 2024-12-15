<?php

namespace App\Http\Controllers;

use App\Models\Classlist;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Store a newly created class in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'school_year' => 'required|string',
            'semester' => 'required|string',
            'subject' => 'required|string',
            'section' => 'required|string',
            'schedule_day' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'room' => 'required|string',
        ]);

        // Create a new class record
        Classlist::create($validated);

        // Redirect to the class list page
        return redirect()->route('class-list');
    }

    public function index()
    {
        // Retrieve all classes from the database
        $classes = Classlist::all();

        // Pass the data to the view
        return view('class-dashboard.class-list', compact('classes'));
    }
}
