<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LangController extends Controller
{
    public function  index($la)
    {
        session(['locale'=>$la]);
        return redirect('/');
    }
}
