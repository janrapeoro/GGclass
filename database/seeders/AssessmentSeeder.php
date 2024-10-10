<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert sample assessments
        DB::table('assessments')->insert([
            [
                'assessment_id' => '202400001',
                'assessment_name' => 'Tests and Quizzes', 
                'grading_system' => 2018, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_id' => '202400002',
                'assessment_name' => 'Activity', 
                'grading_system' => 2018, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_id' => '202400003',
                'assessment_name' => 'Project', 
                'grading_system' => 2018, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'assessment_id' => '202400004',
                'assessment_name' => 'Term Paper', 
                'grading_system' => 2018, 
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'assessment_id' => '202400005',
                'assessment_name' => 'Exams', 
                'grading_system' => 2018, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
