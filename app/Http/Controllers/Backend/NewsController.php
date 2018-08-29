<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreatedNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();
        return view('backend.page.news.index', compact('news'));
    }

    public  function add()
    {
        return view('backend.page.news.add');
    }

    public  function  processAdd(CreatedNewsRequest $request)
    {
        $dataRequest = $request->except('_token');
        $news =  new News();
        if(isset($dataRequest['name_en'])) {
            $news->name_en = $dataRequest['name_en'];
            $news->slug_en = str_slug($dataRequest['name_en'], '-');
        }
        if(isset($dataRequest['name_vi'])) {
            $news->name_vi = $dataRequest['name_vi'];
            $news->slug_vi = str_slug($dataRequest['name_vi'], '-');
        }
        if(isset($dataRequest['image'])) {
            $news->image = $dataRequest['image'];
        }
        if(isset($dataRequest['active'])) {
            $news->active = $dataRequest['active'];
        }
        if(isset($dataRequest['description_vi'])) {
            $news->description_vi = $dataRequest['description_vi'];
        }
        if(isset($dataRequest['description_en'])) {
            $news->description_en = $dataRequest['description_en'];
        }
        if ($news->save()) {
            return redirect()->route('news.index')->with('success', 'Thêm mới tin tức thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi thêm mới tin tức !');
        }
    }

    public function  edit($id)
    {
        $dataEdit = News::find($id);
        return view('backend.page.news.edit', compact('dataEdit'));

    }

    public function processEdit(UpdateNewsRequest $request, $id)
    {
        $dataRequest = $request->except('_token');
        $news = News::find($id);
        if ($news) {
            if(isset($dataRequest['name_en'])) {
                $news->name_en = $dataRequest['name_en'];
                $news->slug_en = str_slug($dataRequest['name_en'], '-');
            }
            if(isset($dataRequest['name_vi'])) {
                $news->name_vi = $dataRequest['name_vi'];
                $news->slug_vi = str_slug($dataRequest['name_vi'], '-');
            }
            if(isset($dataRequest['image'])) {
                $news->image = $dataRequest['image'];
            }
            if(isset($dataRequest['active'])) {
                $news->active = $dataRequest['active'];
            }
            if(isset($dataRequest['description_vi'])) {
                $news->description_vi = $dataRequest['description_vi'];
            }
            if(isset($dataRequest['description_en'])) {
                $news->description_en = $dataRequest['description_en'];
            }
            if ($news->save()) {
                return redirect()->route('news.index')->with('success', 'Cập nhật tin tức thành công !');
            } else {
                return redirect()->back()->withErrors('Lỗi cập nhật tin tức!');
            }
        } else {
            return redirect()->back()->withErrors('Tin tức chưa tồn tại !');
        }
    }

    public function  delete($id)
    {
        $news =News::find($id);
        if($news) {
            if ($news->delete()) {
                return redirect()->route('news.index')->with('success', 'Xóa tin tức thành công !');
            } else {
                return redirect()->back()->withErrors('Lỗi xóa tin tức !');
            }
        } else {
            return redirect()->back()->withErrors('Tin tức chưa tồn tại !');
        }
    }
    public function  showDetail($id)
    {
        $product = News::find($id);
        return view('backend.page.news.description', compact('product'));
    }
}
