<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table("categories")->insert([
            'id' => 1,
            'category_name' => "Fantasy", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'id' => 2,
            'category_name' => "Sci-Fi", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'id' => 3,
            'category_name' => "Romance",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'id' => 4,
            'category_name' => "Mystery", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table("categories")->insert([
            'id' => 5,
            'category_name' => "Drama", 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
