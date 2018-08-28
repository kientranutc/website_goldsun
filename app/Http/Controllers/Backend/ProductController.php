<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AddProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.page.product.index');
    }

    public  function  add()
    {
        $dataCategoryParentNull = Category::whereNull('parent_id')->where('active',1)->get();
        $category =  new Category();
        return view('backend.page.product.add', compact('dataCategoryParentNull', 'category'));
    }

    public function processAdd(AddProductRequest $request)
    {
        $dataRequest = $request->except('_token');
        dd($dataRequest);
    }
}
