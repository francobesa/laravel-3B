<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function index() {
        $categories = Category(all);

        return view(categories.index);
    }
}
