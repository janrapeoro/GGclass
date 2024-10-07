<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentTypeSeeder extends Seeder
{
    public function run()
    {
        // Seed data for assessment types
        DB::table('assessment_types')->insert([
            [
                'assessment_type_name' => 'Quiz 1',
                'assessment_id' => '202400001', // Links to 'Tests and Quizzes'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_type_name' => 'Quiz 2',
                'assessment_id' => '202400001', // Links to 'Tests and Quizzes'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_type_name' => 'Quiz 3',
                'assessment_id' => '202400001', // Links to 'Tests and Quizzes'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_type_name' => 'Quiz 4',
                'assessment_id' => '202400001', // Links to 'Tests and Quizzes'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_type_name' => 'Quiz 5',
                'assessment_id' => '202400001', // Links to 'Tests and Quizzes'
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'assessment_type_name' => 'Activity 1',
                'assessment_id' => '202400002', // Links to 'Activity'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_type_name' => 'Activity 2',
                'assessment_id' => '202400002', // Links to 'Activity'
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'assessment_type_name' => 'Activity 3',
                'assessment_id' => '202400002', // Links to 'Activity'
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'assessment_type_name' => 'Activity 4',
                'assessment_id' => '202400002', // Links to 'Activity'
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'assessment_type_name' => 'Activity 5',
                'assessment_id' => '202400002', // Links to 'Activity'
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'assessment_type_name' => 'Project 1',
                'assessment_id' => '202400003', // Links to 'Project'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_type_name' => 'Term Paper 1',
                'assessment_id' => '202400004', // Links to 'Term Paper'
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
