<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            'category_name' => Str::random(10), // Random 10-character category name
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'category_name' => Str::random(10), // Random 10-character category name
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'category_name' => Str::random(10), // Random 10-character category name
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'category_name' => Str::random(10), // Random 10-character category name
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'category_name' => Str::random(10), // Random 10-character category name
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
