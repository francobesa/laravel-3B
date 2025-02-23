<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $categories = DB::table("categories")->get(); // Fetch all categories

        foreach ($categories as $category) {
            DB::table("items")->insert([
                'item_id' => $category->id, // Correctly linking to category ID
                'item_name' => Str::random(10), // Random 10-character item name
                'price' => rand(100, 10000) / 100, // Random price (1.00 - 100.00)
                'qty' => rand(1, 50), // Random quantity
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
