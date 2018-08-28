<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function getCategoryParent($id)
    {
        return Category::where('active', 1)
                        ->where('parent_id', $id)
                        ->get();
    }
}
