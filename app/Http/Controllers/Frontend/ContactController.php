<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $local = (session()->has('locale'))?session('locale'):'vi';
        return view('frontend.page.contact.contact_'.$local);
    }
}
