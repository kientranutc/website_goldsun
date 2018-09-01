<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function index()
    {
        $local = (session()->has('locale'))?session('locale'):'vi';
        return view('frontend.page.about_us.about_us_'.$local);
    }
}
