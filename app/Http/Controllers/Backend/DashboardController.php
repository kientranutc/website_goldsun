<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use App\Models\Contact;
use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function  index()
    {
        $product = Products::count();
        $news = News::count();
        $categoryCount = Category::count();
        $contact =  Contact::count();
        return view('backend.page.dashboard.index', compact('product', 'news', 'categoryCount', 'contact'));
    }
}
