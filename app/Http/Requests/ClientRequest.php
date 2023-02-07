<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        switch($this->method())
        {
            case 'GET':
                return [];
                break;
            case 'DELETE':
                return [];
                break;
            case 'POST':
                return [
                    'name' => 'required',
                    'password' => 'required|string|min:6|max:20|confirmed',
                ];
                break;
            case 'PUT':
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|string|min:6|max:20|confirmed',
                ];
                break;
            case 'PATCH':
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,'.$this->segment(3),
                    'password' => 'nullable|string|min:6|max:20',
                ];
                break;
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'email.required' => 'E-mail является обязательным полем',
            'email.email' => 'Введите корректный E-mail',
            'email.unique' => 'Указанный E-mail уже используется',
            'name.required' => 'Наименование организации является обязательным полем',
            'password.min' => 'Пароль должен быть не менее :min символов',
            'password.max' => 'Пароль должен быть не более :max символов',
            'password.required' => 'Пожалуйста, введите пароль',
            'password.confirmed' => 'Пароли не совпадают',
        ];
    }
}
