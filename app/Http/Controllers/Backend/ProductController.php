<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AddProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProductController extends Controller
{
    public function index()
    {
        $category =  new Category();
        $product = Products::orderBy('created_at', 'DESC')->get();
        return view('backend.page.product.index', compact('category', 'product'));
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
        $product =  new Products();
        if(isset($dataRequest['name_en'])) {
            $product->name_en = $dataRequest['name_en'];
            $product->slug_en = str_slug($dataRequest['name_en'], '-');
        }
        if(isset($dataRequest['name_vi'])) {
            $product->name_vi = $dataRequest['name_vi'];
            $product->slug_vi = str_slug($dataRequest['name_vi'], '-');
        }
        if(isset($dataRequest['image'])) {
            $product->image = $dataRequest['image'];
        }
        if(isset($dataRequest['active'])) {
            $product->active = $dataRequest['active'];
        }
        if(isset($dataRequest['is_hot'])) {
            $product->is_host = $dataRequest['is_hot'];
        }
        if(isset($dataRequest['description_vi'])) {
            $product->description_vi = $dataRequest['description_vi'];
        }
        if(isset($dataRequest['description_en'])) {
            $product->description_en = $dataRequest['description_en'];
        }
        if(isset($dataRequest['category'])) {
            $product->category_id = join(',', $dataRequest['category']);
        }
        if ($product->save()) {
            return redirect()->route('product.index')->with('success', 'Thêm mới sản phẩm thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi thêm mới sản phẩm');
        }

    }

    public function edit($id)
    {
        $dataEdit = Products::find($id);
        $dataCategoryParentNull = Category::whereNull('parent_id')->where('active',1)->get();
        $category =  new Category();
        return view('backend.page.product.edit', compact('dataEdit','dataCategoryParentNull', 'category'));
    }

    public  function processEdit(UpdateProductRequest $request, $id)
    {
        $dataRequest = $request->except('_token');
        $product = Products::find($id);
        if ($product) {
            if(isset($dataRequest['name_en'])) {
                $product->name_en = $dataRequest['name_en'];
                $product->slug_en = str_slug($dataRequest['name_en'], '-');
            }
            if(isset($dataRequest['name_vi'])) {
                $product->name_vi = $dataRequest['name_vi'];
                $product->slug_vi = str_slug($dataRequest['name_vi'], '-');
            }
            if(isset($dataRequest['image'])) {
                $product->image = $dataRequest['image'];
            }
            if(isset($dataRequest['active'])) {
                $product->active = $dataRequest['active'];
            }
            if(isset($dataRequest['is_hot'])) {
                $product->is_host = (int)$dataRequest['is_hot'];
            }
            if(isset($dataRequest['description_vi'])) {
                $product->description_vi = $dataRequest['description_vi'];
            }
            if(isset($dataRequest['description_en'])) {
                $product->description_en = $dataRequest['description_en'];
            }
            if(isset($dataRequest['category'])) {
                $product->category_id = join(',', $dataRequest['category']);
            }
            if ($product->save()) {
                return redirect()->route('product.index')->with('success', 'Cập nhật sản phẩm thành công !');
            } else {
                return redirect()->back()->withErrors('Lỗi cập nhật sản phẩm !');
            }
        } else {
            return redirect()->back()->withErrors('Sản phẩm chưa tồn tại !');
        }
    }

    public function  delete($id)
    {
        $product =Products::find($id);
        if($product) {
            if ($product->delete()) {
                return redirect()->route('product.index')->with('success', 'Xóa sản phẩm thành công !');
            } else {
                return redirect()->back()->withErrors('Lỗi xóa sản phẩm !');
            }
        } else {
            return redirect()->back()->withErrors('Sản phẩm chưa tồn tại !');
        }
    }
    public function  showDetail($id)
    {
        $product = Products::find($id);
        return view('backend.page.product.description', compact('product'));
    }
}
