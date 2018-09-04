<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AfterSaleController extends Controller
{
    public function index()
    {
        $local = (session()->has('locale'))?session('locale'):'vi';
        return view('frontend.page.after_sale.after_sale_'.$local);
    }
}
