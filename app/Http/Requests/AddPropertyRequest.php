<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPropertyRequest extends FormRequest
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
            'name' => ['required', 'unique:options'],
            'url' => ['required', 'unique:options'],
            'type' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Название не может быть пустым',
            'name.unique' => 'Название уже занято',
            'url.required' => 'URL не может быть пустым',
            'url.unique' => 'URL уже занят',
            'type.required' => 'Надо выбрать тип характеристики'
        ];
    }
}
