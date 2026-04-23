<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BrandRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'slug' => [
                'max:255',
                Rule::unique('brands', 'slug')->ignore($this->id),
            ],
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nhập vào tên Hãng xe.',
            'name.string'   => 'Nhập vào kí tự chuỗi.',
            'name.max'      => 'Độ dài không quá 255 kí tự.',
            'name.max'      => 'Độ dài không quá 255 kí tự.',
            'slug.unique'   => 'Đường đẫn tĩnh này đã tồn tại.',
            'logo.image'    => 'Logo phải là hình ảnh.',
            'logo.max'      => 'Logo hình ảnh không được quá 2048mb.',
        ];
    }
}
