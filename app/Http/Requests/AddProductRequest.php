<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            'image' => 'required',
            'name_en' => 'required|unique:products',
            'name_vi' => 'required|unique:products',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => "Bạn chưa chọn ảnh !",
            'name_en.required' => "Bạn chưa nhập tên sản phẩm (Tiếng việt) !",
            'name_en.unique' => "Tên sản phẩm (Tiếng việt) đã tồn tại !",
            'name_vi.unique' => "Tên sản phẩm (Tiếng anh) đã tồn tại !",
            'name_vi.required' => "Bạn chưa nhập tên sản phẩm (Tiếng anh) !",
        ];
    }
}
