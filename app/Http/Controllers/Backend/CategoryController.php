<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Support\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public  function  __construct()
    {
    }

    public function  index()
    {
        $dataCategory = Category::orderBy('parent_id','ASC')->get();
        $data = [];
        foreach ($dataCategory as $item) {
            $aaRow = $item->toArray();
            $dataParent = Category::select('name_vi')->where('id', (int)$item->parent_id)->get()->toArray();
            $aaRow['child'] =Helper::convertArrayString($dataParent);
            $data[]=$aaRow;
        }
        return view("backend.page.category.index", compact('data'));
    }

    public  function delete($id)
    {
        $category =  Category::find($id);
        if ($category->delete()) {
            return redirect()->route('category.index')->with('success', 'Xóa danh mục thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi xóa danh mục');
        }
    }

    public function  add()
    {
        $helper = new Helper();
        $dataCategory = Category::all()->toArray();
        return view("backend.page.category.add", compact('helper', 'dataCategory'));
    }

    public function processAdd(CreateCategoryRequest $request)
    {
        $dataRequest = $request->except('_token');
        $category =  new Category();
        if (isset($dataRequest['image'])) {
            $category->image = $dataRequest['image'];
        }
        if (isset($dataRequest['name_en'])) {
            $category->name_en = $dataRequest['name_en'];
            $category->slug_en = str_slug($dataRequest['name_en'], '-');
        }
        if (isset($dataRequest['name_vi'])) {
            $category->name_vi = $dataRequest['name_vi'];
            $category->slug_vi = str_slug($dataRequest['name_vi'], '-');
        }
        if (isset($dataRequest['parent_id'])) {
            $category->parent_id = $dataRequest['parent_id'];
        }
        if (isset($dataRequest['active'])) {
            $category->active = $dataRequest['active'];
        }
        if ($category->save()) {
            return redirect()->route('category.index')->with('success', 'Thêm mới danh mục thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi thêm mới danh mục');
        }
    }

    public function edit($id)
    {
        $helper = new Helper();
        $dataEdit = Category::find($id);
        $dataCategory = Category::all()->toArray();
        return view("backend.page.category.edit", compact('helper', 'dataCategory','dataEdit'));
    }

    public function processEdit(UpdateCategoryRequest $request, $id)
    {
        $dataRequest = $request->except('_token');
        $category =  Category::find($id);
        if (isset($dataRequest['image'])) {
            $category->image = $dataRequest['image'];
        }
        if (isset($dataRequest['name_en'])) {
            $category->name_en = $dataRequest['name_en'];
            $category->slug_en = str_slug($dataRequest['name_en'], '-');
        }
        if (isset($dataRequest['name_vi'])) {
            $category->name_vi = $dataRequest['name_vi'];
            $category->slug_vi = str_slug($dataRequest['name_vi'], '-');
        }
        if (isset($dataRequest['parent_id'])) {
            $category->parent_id = $dataRequest['parent_id'];
        }
        if (isset($dataRequest['active'])) {
            $category->active = $dataRequest['active'];
        }
        if ($category->save()) {
            return redirect()->route('category.index')->with('success', 'Cập nhật danh mục thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi cập nhật danh mục');
        }
    }
}
