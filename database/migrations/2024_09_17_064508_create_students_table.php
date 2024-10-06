<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            // Define the columns of the table
            $table->string('school_id')->primary();   // Primary Key - School ID
            $table->string('full_name');             // Full name of the student
            $table->string('in_game_name');          // In-game name of the student
            $table->string('email')->unique();       // Unique email address
            $table->string('course');                // Course the student is taking
            $table->timestamps();                    // Automatically adds created_at and updated_at columns
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
