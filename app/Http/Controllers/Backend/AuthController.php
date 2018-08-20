<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{


    public function login()
    {
        return view('backend.login');
    }

    public function  processLogin(LoginRequest $request)
    {
        $dataRequest = $request->except(['_token']);
        if (\Auth::attempt($dataRequest,true)) {
            return redirect()->route('dashboard.index');
        }
        else{
            return redirect()->back()->withErrors("Email hoặc mật khẩu không đúng")->withInput($request->all());
        }
    }

    public function  logout()
    {
        \Auth::logout();
        return redirect()->route('auth.login');
    }



}
