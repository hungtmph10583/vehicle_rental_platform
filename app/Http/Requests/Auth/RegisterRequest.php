<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'      => 'required|max:50',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|string|min:5|max:40',
            'confirmed' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => "Hãy nhập vào tên.",
            'name.max'          => "Tên không được quá 50 ký tự.",
            'email.required'    => "Hãy nhập vào email.",
            'email.email'       => "Email đúng định dạng.",
            'email.max'         => "Email không được quá 255 ký tự.",
            'email.unique'      => "Email này đã được sử dụng.",
            'password.required' => "Hãy nhập vào mật khẩu.",
            'password.min'      => "Mật khẩu phải hơn 5 ký tự.",
            'password.max'      => "Mật khẩu không quá 40 ký tự.",
            'confirmed.required'=> "Hãy nhập xác nhận mật khẩu.",
            'confirmed.same'    => "Mật khẩu xác nhận không khớp."
        ];
    }
}
