<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function  index()
    {
        $news =  News::where('active',1)->get()->toArray();
        return view('frontend.page.news.index', compact('news'));
    }

    public function detail($slug)
    {
        $local = (session()->has('locale'))?session('locale'):'vi';
        $newsDetail = News::where('slug_'.$local, $slug)
                    ->where('active', 1)
                    ->first()->toArray();
        $newsRelate = News::where('slug_'.$local,'<>', $slug)
            ->where('active', 1)
            ->get()->toArray();
        return view('frontend.page.news.detail', compact('newsDetail', 'newsRelate'));
    }
}
