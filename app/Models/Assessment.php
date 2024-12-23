<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $primaryKey = 'assessment_id'; 
    public $incrementing = false; 

    public function assessmentTypes()
    {
        return $this->hasMany(AssessmentType::class, 'assessment_id');
    }
}
