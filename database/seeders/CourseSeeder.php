<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("course")->insert([
            'course_name'=> 'BSCS',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table("course")->insert([
            'course_name'=> 'BSIT',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table("course")->insert([
            'course_name'=> 'BSEM',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table("course")->insert([
            'course_name'=> 'BSBI',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);

        DB::table("course")->insert([
            'course_name'=> 'BSPS',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
