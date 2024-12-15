<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamScores extends Model
{
    use HasFactory;

    protected $primaryKey = 'exams_scores_id';

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }

    public function examType()
    {
        return $this->belongsTo(AssessmentType::class, 'exams_type_id');
    }

}
