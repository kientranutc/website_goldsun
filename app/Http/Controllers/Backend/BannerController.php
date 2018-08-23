<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateBannerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{

    public  function index()
    {
        return view('backend.page.banner.index');
    }

    public function  add()
    {
        return view('backend.page.banner.add');
    }

    public function  processAdd(CreateBannerRequest $request)
    {
        $dataRequest = $request->except('_token');
        dd($dataRequest);
    }
}
