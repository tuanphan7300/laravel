<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'full'=>'required|min:5',
            'phone'=>'required|min:5|numeric',
            'address'=>'required',
            'id_number'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'full.required'=>'Họ Tên không được để trống',
            'full.min'=>'Họ tên ít nhất 5 ký tự',
            'phone.required'=>'Số điện thoại không được để trống',
            'phone.min'=>'Số điện thoại ít nhất 5 ký tự',
            'phone.numeric'=>'Số điện thoại phải dạng số',
            'address.required'=>'địa chỉ không được để trống',
            'id_number.required'=>'Số CMT không được để trống',
            'id_number.numeric'=>'Số CMT phải dạng số',
        ];
    }
}
