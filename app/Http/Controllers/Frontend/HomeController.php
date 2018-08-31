<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Support\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public  function  index()
    {

        $newsLimitThree = News::selectRaw("*,DATE_FORMAT(created_at, '%d') as news_day,DATE_FORMAT(created_at, '%m/%Y') as news_month_year")
                        ->orderBy('created_at', 'DESC')
                        ->take(3)->get()->toArray();
        return view('frontend.page.home', compact('newsLimitThree'));
    }
}
