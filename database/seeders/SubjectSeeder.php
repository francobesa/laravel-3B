<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = DB::table("course")->get();
        
        foreach ($courses as $course) {
            DB::table("course")->insert([
            'course_id' => $course->id,
            'name' => 'FILI',
            'description' => 'FIlipino',
            'created_at' => now(),
            'updated_at' => now(),          
            ]);
        }
        dd($courses);
    }
}
