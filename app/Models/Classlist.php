<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classlist extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'classes';

    // Allow mass assignment for these fields
    protected $fillable = [
        'school_year',
        'semester',
        'subject',
        'section',
        'schedule_day',
        'start_time',
        'end_time',
        'room',
    ];
}
