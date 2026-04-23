<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarRequest extends FormRequest
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
        // dump('Request:');
        // dd(request());
        return [
            'model'             => 'required|max:255',
            'brand_id'             => 'required',
            'license_plate'     => [
                'required',
                'max:12',
                Rule::unique('cars', 'license_plate')->ignore($this->id),
            ],
            'image_url'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fuel_consumption'  => 'nullable|numeric|between:0,99.9', // Ví dụ: tối đa 99.9 lít
            'year'              => 'nullable|numeric|digits:4', // Yêu cầu đúng 4 chữ số

            // 'price_per_hour'    => 'required|numeric', // Yêu cầu đúng 8 chữ số
            // 'price_per_day'     => 'required|numeric', // Yêu cầu đúng 8 chữ số
            // 'price_per_week'    => 'required|numeric', // Yêu cầu đúng 8 chữ số
            // 'price_per_month'   => 'nullable|numeric', // Yêu cầu đúng 8 chữ số

            'weekend_multiplier'=> 'nullable|numeric|between:0,99.9', // tối đa 99.9
            'holiday_multiplier'=> 'nullable|numeric|between:0,99.9', // tối đa 99.9
        ];
    }

    public function messages()
    {
        return [
            'model.required'           => 'Nhập vào Tên Xe.',
            'model.max'                => 'Độ dài không quá 255 kí tự.',

            'brand_id.required'        => 'Chọn thương hiệu xe.',

            'license_plate.required'   => 'Nhập vào Biển số xe.',
            'license_plate.max'        => 'Độ dài không quá 12 kí tự.',
            'license_plate.unique'     => 'Biển số xe này đã tồn tại.',
            
            'image_url.image'          => 'Tập tin phải là định dạng hình ảnh.',
            'image_url.image'          => 'Sai định dạng hình ảnh.',
            'image_url.max'            => 'Hình ảnh không được quá 2MB..',

            'fuel_consumption.numeric' => 'Mức tiêu thụ nhiên liệu phải là định dạng số.',
            'fuel_consumption.between' => 'Mức tiêu thụ nhiên liệu phải nằm trong khoảng 0 đến 99.9.',

            'year.numeric'             => 'Năm sản xuất phải là định dạng số.',
            'year.digits'              => 'Năm sản xuất phải bao gồm đúng 4 chữ số.',

            'price_per_hour.required'  => 'Nhập vào số tiền thuê theo giờ.',
            // 'price_per_hour.numeric'   => 'Số tiền thuê phải là định dạng số.',

            'price_per_day.required'   => 'Nhập vào số tiền thuê theo ngày.',
            // 'price_per_day.numeric'    => 'Số tiền thuê phải là định dạng số.',

            'price_per_week.required'  => 'Nhập vào số tiền thuê theo tuần.',
            // 'price_per_week.numeric'   => 'Số tiền thuê phải là định dạng số.',

            // 'price_per_month.numeric'  => 'Số tiền thuê phải là định dạng số.',

            'weekend_multiplier.numeric' => '% tăng giá phải là định dạng số.',
            'weekend_multiplier.between' => 'Mức % tăng giá phải nằm trong khoảng 0 đến 99.9.',

            'holiday_multiplier.numeric' => '% tăng giá phải là định dạng số.',
            'holiday_multiplier.between' => 'Mức % tăng giá phải nằm trong khoảng 0 đến 99.9.',
        ];
    }
}
