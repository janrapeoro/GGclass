<?php

namespace App\Exports;

use App\Models\Student;
use App\Models\Assessment;
use App\Models\AssessmentType;
use App\Models\Score;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;

class StudentsExport
{
    public function export()
    {
        $filePath = storage_path('app/public/gradebook.xls');
        $spreadsheet = IOFactory::load($filePath);

        // First sheet population (already implemented)
        $sheet1 = $spreadsheet->getSheet(0);
        $students = Student::all();
        $assessments = Assessment::all();
        $startRow = 22;
        foreach ($students as $index => $student) {
            $row = $startRow + $index;
            $sheet1->setCellValue("B{$row}", $student->school_id);
            $sheet1->setCellValue("C{$row}", $student->full_name);
            $sheet1->setCellValue("D{$row}", $student->course);
            $gradingSystem = $assessments->first()->grading_system ?? null;
            $sheet1->setCellValue("E{$row}", $gradingSystem);
        }

        // Populate the second sheet dynamically
        $sheet2 = $spreadsheet->getSheet(1);
        $assessments = Assessment::with('assessmentTypes')->get();

        // Start populating from column C (3rd column)
        $startColumnIndex = 7;
        foreach ($assessments as $assessment) {
        foreach ($assessment->assessmentTypes as $type) {
            // Calculate the column index
            $column = Coordinate::stringFromColumnIndex($startColumnIndex);

            // Set assessment name in row 2
            $sheet2->setCellValue("{$column}2", $assessment->assessment_name);

            // Set total scores in row 3
            $sheet2->setCellValue("{$column}3", $type->total_scores);

            // Populate student scores in rows 4-103
            foreach ($students as $rowIndex => $student) {
                $score = Score::where('student_id', $student->school_id)
                                ->where('assessment_type_id', $type->assessment_type_id)
                                ->first();
                $scoreValue = $score->score ?? null;
                $sheet2->setCellValue("{$column}" . (4 + $rowIndex), $scoreValue);
            }

            // Move to the next column for the next type
            $startColumnIndex++;
        }
        }

         // 3. Populate the third sheet with assessment_name entries
         $sheet3 = $spreadsheet->getSheet(2);  // Get the third sheet

         // Retrieve all assessments from the database
         $assessments = Assessment::all();
 
         // Start from column E (5th column) for the first assessment name
         $startColumnIndex = 5;  
 
         foreach ($assessments as $index => $assessment) {
             // Calculate the correct column index by adding (3 * index)
             $columnIndex = $startColumnIndex + ($index * 3);  
             $column = Coordinate::stringFromColumnIndex($columnIndex);
 
             // Set the assessment_name in the correct cell (e.g., E2, H2, K2, etc.)
             $sheet3->setCellValue("{$column}2", $assessment->assessment_name);
         }

        // Save the modified file to a temporary location
        $writer = new Xls($spreadsheet);
        $tempFilePath = storage_path('app/public/temporary_gradebook.xls');
        $writer->save($tempFilePath);

        // Return the file for download
        return response()->download($tempFilePath)->deleteFileAfterSend(true);
    }
}
