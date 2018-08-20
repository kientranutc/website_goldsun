<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email:max:255',
            'password'=>'required|min:6|max:16'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Bạn chưa nhập email !',
            'email.email' => 'Bạn nhập sai định dạng email !',
            'email.max'  => 'Email không đúng!',
            'password.required' => 'Bạn chưa nhập mật khẩu!',
            'password.max'  => 'Mật khẩu không vượt quá 16 ký tự!',
            'password.min' => 'Mật khẩu từ 6 ký tự trở lên!',
        ];
    }
}
