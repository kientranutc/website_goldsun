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
        $productForCategory = Products::where('category_id', 'like', '%'.$id.'%')->paginate(30);
        return view('frontend.page.products.category', compact('categoryName', 'productForCategory'));
    }

    public function detail($slug)
    {
        $local = (session()->has('locale'))?session('locale'):'vi';
        $productDetail = Products::where('slug_'.$local, $slug)->first()->toArray();
        return view('frontend.page.products.detail', compact('productDetail'));
    }
}
