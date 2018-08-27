<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
             'name_en' => 'required|unique:category',
             'name_vi' => 'required|unique:category',
         ];
     }

    public function messages()
    {
        return [
            'image.required' => "Bạn chưa chọn ảnh !",
            'name_en.required' => "Bạn chưa nhập tên danh mục (Tiếng việt) !",
            'name_en.unique' => "Tên danh mục (Tiếng việt) đã tồn tại !",
            'name_vi.unique' => "Tên danh mục (Tiếng anh) đã tồn tại !",
            'name_vi.required' => "Bạn chưa nhập tên danh mục (Tiếng anh) !",
        ];
    }
}
