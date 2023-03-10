<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LockerOrderRequest extends FormRequest
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
            'order_option' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'order_option.string' => 'Название не может быть пустым',
        ];
    }
}
