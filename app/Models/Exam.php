<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $primaryKey = 'exams_id'; 
    public $incrementing = false; 

    public function examTypes()
    {
        return $this->hasMany(ExamType::class, 'exams_id');
    }
}
