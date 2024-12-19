<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed data for assessment types
        DB::table('exam_types')->insert([

            [
                'exams_type_name' => 'Prelim Exam',
                'total_scores' => '60',
                'exams_id' => '202400028', // Links to 'Examination'
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'exams_type_name' => 'Midterm Exam',
                'total_scores' => '60',
                'exams_id' => '202400028', // Links to 'Examination'
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'exams_type_name' => 'Prefinal Exam',
                'total_scores' => '60',
                'exams_id' => '202400028', // Links to 'Examination'
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'exams_type_name' => 'Final Exam',
                'total_scores' => '60',
                'exams_id' => '202400028', // Links to 'Examination'
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}
