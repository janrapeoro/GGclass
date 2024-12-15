<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('exams_scores', function (Blueprint $table) {
            $table->id('exam_score_id'); // Primary key
            $table->unsignedBigInteger('student_id'); // Foreign key to link to students
            $table->unsignedBigInteger('exams_type_id'); // Foreign key to link to assessment types
            $table->integer('score'); // Student's score
            $table->timestamps();
    
            // Foreign key constraints
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->foreign('exams_type_id')->references('exams_type_id')->on('exams_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams_scores');
    }
};
