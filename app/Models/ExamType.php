<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamType extends Model
{
    use HasFactory;

    protected $primaryKey = 'exams_type_id';

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exams_id');
    }

    public function scores()
    {
        return $this->hasMany(ExamScores::class, 'exams_type_id');
    }
}
