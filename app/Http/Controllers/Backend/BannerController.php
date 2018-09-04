<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{

    public  function index()
    {
        $banner  = Banner::all();
        return view('backend.page.banner.index', compact('banner'));
    }

    public function  add()
    {
        return view('backend.page.banner.add');
    }

    public function  processAdd(CreateBannerRequest $request)
    {
        $dataRequest = $request->except('_token');
        $banner =  new Banner();

        if (isset($dataRequest['image'])) {
            $banner->image = $dataRequest['image'];
        }
        if (isset($dataRequest['link'])) {
            $banner->link = $dataRequest['link'];
        }
        if (isset($dataRequest['active'])) {
            $banner->active = $dataRequest['active'];
        }
        if ($banner->save()) {
            return redirect()->route('banner.index')->with('success', 'Thêm mới banner thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi thêm mới banner !');
        }
    }
    public function  edit($id)
    {
        $dataEdit = Banner::find($id);
        return view('backend.page.banner.edit', compact('dataEdit'));
    }

    public function  processEdit($id,CreateBannerRequest $request) {
        $dataRequest = $request->except('_token');
        $banner = Banner::find($id);
        if ($banner) {
            if (isset($dataRequest['image'])) {
                $banner->image = $dataRequest['image'];
            }
            if (isset($dataRequest['link'])) {
                $banner->link = $dataRequest['link'];
            }
            if (isset($dataRequest['active'])) {
                $banner->active = $dataRequest['active'];
            }
            if ($banner->save()) {
                return redirect()->route('banner.index')->with('success', 'cập nhật banner thành công !');
            } else {
                return redirect()->back()->withErrors('Lỗi cập nhật banner !');
            }
        } else {

        }
    }

    public function  delete($id)
    {
        $banner = Banner::find($id);

        if ($banner) {
            $banner->delete();
            return redirect()->route('banner.index')->with('success', 'Xóa banner thành công !');
        } else {
            return redirect()->back()->withErrors('Lỗi xóa banner !');

        }
    }
}
