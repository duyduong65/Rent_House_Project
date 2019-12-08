<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class HouseRequestValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:30',
            'image' => 'required',
            'address' => 'required|min:5|max:255',
            'kindHouse' => 'required',
            'kindRoom' => 'required',
            'numBedroom' => 'required',
            'numBathroom' => 'required',
            'description' => 'required|min:20',
            'price' => 'required',
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
            //message validate image
            'image.required' => 'Không được để trống!',
            //message validate address
            'address.required' => 'Không được để trống!',
            'address.min' => 'Không hợp lệ!',
            'address.max' => 'Không hợp lệ!',
            //message validate Kindhouse,, kindRoom, numBedRoom, numBathroom, description
            'kindHouse.required' => 'không được để trống!',
            'kindRoom.required' => 'không được để trống!',
            'numBedroom.required' => 'không được để trống!',
            'numBathroom.required' => 'không được để trống!',
            'description.required' => 'không được để trống!',
            'description.min' => 'nội dung quá ngắn!',
            //message validate price, city_id
            'price.required' => 'không được để trống!',
            'city_id.required' => 'không được để trống!',
        ];
    }
}
