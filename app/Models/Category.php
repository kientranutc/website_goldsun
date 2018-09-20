<?php

namespace App\Models;

use App\Support\Helper;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    public function getCategoryParent($id)
    {
        return Category::where('active', 1)
                        ->where('parent_id', $id)
                        ->orderBy('sort', 'DESC')
                        ->get();
    }


    public function getCategory($str)
    {
        $helper = new Helper();
        $arr = explode(',', $str);
        $category =  Category::whereIn('id', $arr)->get()->toArray();

        return $helper->showCategory($category);
    }
}
