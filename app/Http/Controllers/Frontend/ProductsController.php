<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public  function category($id,$slug)
    {
        $categoryName = Category::find($id)->toArray();

        if (empty($categoryName['parent_id'])) {
            $str = $id.",";
        } else {
            $str= $categoryName['parent_id'].",".$id;
        }
        $productForCategory = Products::where('category_id', 'like', '%'.$str.'%')->paginate(30);
        return view('frontend.page.products.category', compact('categoryName', 'productForCategory'));
    }

    public function detail($slug)
    {
        $local = (session()->has('locale'))?session('locale'):'vi';
        $productDetail = Products::where('slug_'.$local, $slug)->first()->toArray();
        $productId = $productDetail['id'];
        $categoryId = explode(',',$productDetail['category_id'])[0];
        $productRelate = Products::where('category_id', 'like', '%'.$categoryId.'%')
                        ->where('id', '<>', $productId)
                        ->inRandomOrder()->take(5)
                        ->get()->toArray();
        return view('frontend.page.products.detail', compact('productDetail', 'productRelate'));
    }
}
