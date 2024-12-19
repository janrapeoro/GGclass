<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id'; 

    // Relationship for assessment scores
    public function scores()
    {
        return $this->hasMany(Score::class, 'student_id', 'student_id');
    }

    // Relationship for exam scores
    public function examScores()
    {
        return $this->hasMany(ExamScores::class, 'student_id', 'student_id');
    }
}
