<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\LoginRequest;

use App\Models\User;
use App\Support\Helper;
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

    public function forgetPassword(Request $request)
    {
        $email = $request->get('email');
        $user = User::where('email', $email)->first();
        if ($user) {
            $data = [
                'fullname'=>$user->fullname,
                'email'=>$email,
                'password' => 'abc123'
            ];
            $userUpdate = User::find($user->id);
            $userUpdate->password =  bcrypt('abc123');
            if ($userUpdate->save()) {
                Helper::sendEmail($email, $data, 'email.forget_password', 'Quên mật khẩu');
                return redirect()->route('auth.login')->with("success", "Vui lòng check mail để đăng nhập!");
            }

        } else {
            return redirect()->route('auth.login')->withErrors('Email chưa tồn tại trên hệ thống');
        }

    }



}
