<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_types', function (Blueprint $table) {
            $table->id('exams_type_id');
            $table->string('exams_type_name');
            $table->integer('total_scores');
            $table->unsignedBigInteger('exams_id');
            $table->timestamps();
        
            $table->foreign('exams_id')->references('exams_id')->on('exams')->onDelete('cascade');
        });
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams_type');
    }
};
