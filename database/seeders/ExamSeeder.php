<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insert sample assessments
        DB::table('exams')->insert([

            [
                'exams_id' => '202400028',
                'exam_name' => 'Examination',
                'exam_percentage' => '60',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
