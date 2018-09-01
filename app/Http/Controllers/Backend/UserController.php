<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\AddUserRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function  index()
    {
        $user = User::all();
        return view('backend.page.user.index', compact('user'));
    }

    public function  add()
    {
        return view('backend.page.user.add');
    }

    public function processAdd(AddUserRequest $request)
    {
        $dataRequest = $request->except('_token');
        $user = new User();

        if(isset($dataRequest['email'])) {
            $user->email = $dataRequest['email'];
        }
        if(isset($dataRequest['fullname'])) {
            $user->fullname = $dataRequest['fullname'];
        }
        if(isset($dataRequest['name'])) {
            $user->name = $dataRequest['name'];
        }
        if(isset($dataRequest['password'])) {
            $user->password = bcrypt($dataRequest['password']);
        }
        if($user->save()) {
            return redirect()->route('user.index')->with('success', 'Thêm người dùng thành công!');
        } else {
            return redirect()->back()->withErrors('Lỗi thêm người dùng mới!');
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            if ($user->delete()) {
                return redirect()->route('user.index')->with('success', 'Xóa người dùng thành công!');

            } else {
                return redirect()->back()->withErrors('lỗi xử lý !');

            }
        } else {
            return redirect()->back()->withErrors('Không tìm thấy người dùng !');
        }
    }

    public function resetPassword()
    {
        return view('backend.page.user.edit');
    }
    public function changePassword(ResetPasswordRequest $request)
    {
        $dataRequest = $request->except('_token');
        if (\Hash::check($dataRequest['password_old'], \Auth::user()->password)) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                $user->password= bcrypt($dataRequest['password']);
                if($user->save()) {
                    Auth::logout();
                    return redirect()->route('auth.login')->with('success', 'Bạn đổi mật khẩu thành công!');
                } else {
                    return redirect()->back()->withErrors('lỗi xử lý !');
                }
            } else {
                return redirect()->back()->withErrors('Không tìm thấy người dùng !');
            }
        } else {
            return redirect()->back()->withErrors('Mật khẩu cũ không đúng!');
        }

    }
}
