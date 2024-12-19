<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamScores extends Model
{
    use HasFactory;

    protected $primaryKey = 'exam_score_id';

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }

    public function examType()
    {
        return $this->belongsTo(ExamType::class, 'exams_type_id');
    }
}
