<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestValidate extends FormRequest
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
            'name' => 'required|string|min:2|max:30',
            'email' => 'required|unique:email|regex:/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/|',
            'password' => 'required|min:8|max:16',
            'phone' => 'required|numeric|size:10|regex:/(01)[0-9]{9}/',
            'dob' => 'required',
            'idCard' => 'required|min:8|max:12',
            'gender' => 'required',
            'address' => 'required|min:5|max:255',
            'image' => 'required',
            'role' => 'required',
            'city_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            //message validate name
            'name.required' => 'Không được để trống',
            'name.min' => 'Tên quá ngắn',
            'name.max' => 'Tên không hợp lệ!',
            //message validate email
            'email.required' => 'Không được để trống!',
            //message validate password
            'password.required' => 'Không được để trống!',
            'password.min' => 'Không hợp lệ!',
            'password.max' => 'Không hợp lệ!',
            //message validate phone
            'phone.required' => 'Không được để trống!',
            'phone.min' => 'Không hợp lệ!',
            'phone.max' => 'Không hợp lệ!',
            //message validate dob
            'dob.required' => 'Không hợp lệ!',
            //message validate idCard
            'idCard.required' => 'Không hợp lệ!',
            'idCard.min' => 'Không hợp lệ!',
            'idCard.max' => 'Không hợp lệ!',
            //message validate gender
            'gender.required' => 'Không được để trống!',
            //message validate address
            'address.required' => 'Không được để trống!',
            'address.min' => 'Không hợp lệ!',
            'address.max' => 'Không hợp lệ!',
            //message validate image
            'image.required' => 'Không được để trống!',
            //message validate role
            'role.required'=>'Không được để trống!',
            //message validate city
            'city_id.required'=>'Không được để trống!'
        ];
    }
}
