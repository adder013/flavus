<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductDescriptionRequest extends FormRequest
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
            'url' => ['required', 'exists:products']
        ];
    }

    public function messages()
    {
        return [
            'url.required' => 'Введите URL товара',
            'url.exists' => 'Товара с введённым URL не существует',
        ];
    }
}
