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
        Schema::create('exam_scores', function (Blueprint $table) {
            $table->id('exam_score_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('exams_type_id');
            $table->integer('score');
            $table->timestamps();
        
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
            $table->foreign('exams_type_id')->references('exams_type_id')->on('exam_types')->onDelete('cascade');
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
