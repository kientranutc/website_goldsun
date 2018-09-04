<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password_old'=>'required|max:16|min:6',
            'password'=>'required|max:16|min:6',
            'cp_password'=> 'required|same:password',
        ];
    }
    public function messages()
    {
        return [
            'password_old.required' => "Bạn chưa nhập mật khẩu cũ!",
            'password.required' => "Bạn chưa nhập mật khẩu mới",
            'cp_password.required' => "Bạn chưa nhập lại mật khẩu mới",
            'cp_password.same' => "Nhập lại mật khẩu mới không đúng !",
            'password.min'=>'Mât khẩu phải từ 6 đến 16 ký tự!',
            'password.max'=>'Mât khẩu phải từ 6 đến 16 ký tự!'
        ];
    }
}
