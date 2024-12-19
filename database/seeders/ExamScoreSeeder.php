<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed scores for various students and assessment types
        DB::table('exam_scores')->insert([
            // Jan Raphael's Scores
            [
                'student_id' => '202010501',
                'exams_type_id' =>1, // Prelim
                'score' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010501',
                'exams_type_id' =>2, // Midterm
                'score' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010501',
                'exams_type_id' =>3, // Prefinal
                'score' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010501',
                'exams_type_id' =>4, // Final
                'score' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
}

}
