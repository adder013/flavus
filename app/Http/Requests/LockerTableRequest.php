<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LockerTableRequest extends FormRequest
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
            'year' => 'required',
            'customer' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'year.required' => 'Год является обязательным полем',
            'customer.required' => 'Поле "Заказчик" не может быть пустым',
        ];
    }
}
