<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    public function run()
    {
        // Seed scores for various students and assessment types
        DB::table('scores')->insert([
            // Jan Raphael's Scores
            [
                'student_id' => '202010501',
                'assessment_type_id' => 1, // Quiz 1
                'score' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010501',
                'assessment_type_id' => 2, // Quiz 2
                'score' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010501',
                'assessment_type_id' => 3, // Quiz 3
                'score' => 87,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010501',
                'assessment_type_id' => 4, // Quiz 4
                'score' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010501',
                'assessment_type_id' => 5, // Quiz 5
                'score' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010501',
                'assessment_type_id' => 6, // Activity 1
                'score' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010501',
                'assessment_type_id' => 7, // Activity 2
                'score' => 91,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010501',
                'assessment_type_id' => 8, // Activity 3
                'score' => 92,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010501',
                'assessment_type_id' => 9, // Activity 4
                'score' => 93,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010501',
                'assessment_type_id' => 10, // Activity 5
                'score' => 94,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // John Irvin's Scores
            [
                'student_id' => '202010502',
                'assessment_type_id' => 1, // Quiz 1
                'score' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010502',
                'assessment_type_id' => 2, // Quiz 2
                'score' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010502',
                'assessment_type_id' => 3, // Quiz 3
                'score' => 87,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010502',
                'assessment_type_id' => 4, // Quiz 4
                'score' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010502',
                'assessment_type_id' => 5, // Quiz 5
                'score' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // John Ignacious Albano
            [
                'student_id' => '202010503',
                'assessment_type_id' => 1, // Quiz 1
                'score' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010503',
                'assessment_type_id' => 2, // Quiz 2
                'score' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010503',
                'assessment_type_id' => 3, // Quiz 3
                'score' => 87,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010503',
                'assessment_type_id' => 4, // Quiz 4
                'score' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010503',
                'assessment_type_id' => 5, // Quiz 5
                'score' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010502',
                'assessment_type_id' => 4, // Activity 2
                'score' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Angel Santos
            [
                'student_id' => '202010504',
                'assessment_type_id' => 1, // Quiz 1
                'score' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010504',
                'assessment_type_id' => 2, // Quiz 2
                'score' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010504',
                'assessment_type_id' => 3, // Quiz 3
                'score' => 87,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010504',
                'assessment_type_id' => 4, // Quiz 4
                'score' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010504',
                'assessment_type_id' => 5, // Quiz 5
                'score' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'student_id' => '202010504',
                'assessment_type_id' => 6, // Project 1
                'score' => 92,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010504',
                'assessment_type_id' => 7, // Term Paper 1
                'score' => 87,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Brandon Yu
            [
                'student_id' => '202010505',
                'assessment_type_id' => 1, // Quiz 1
                'score' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010505',
                'assessment_type_id' => 2, // Quiz 2
                'score' => 86,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010505',
                'assessment_type_id' => 3, // Quiz 3
                'score' => 87,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010505',
                'assessment_type_id' => 4, // Quiz 4
                'score' => 88,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => '202010505',
                'assessment_type_id' => 5, // Quiz 5
                'score' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],

           
        ]);
    }
}
