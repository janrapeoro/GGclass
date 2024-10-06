<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('assessments')->insertOrIgnore([
            [
            'assessment_name' => 'Tests and Quizzes',
            'grading_system' => 2018,  
            ],

            [
            'assessment_name' => 'Activities',
            'grading_system' => 2018,  
            ],

            [
            'assessment_name' => 'Project',
            'grading_system' => 2018,  
            ],

            [
            'assessment_name' => 'Term Paper',
            'grading_system' => 2018,  
            ],

        ]);
    }
}
