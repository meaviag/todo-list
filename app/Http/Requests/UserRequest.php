<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [ //валидация к регистрации
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|confirmed|min:8'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Поле "Имя" является обязательным',
            'email.required' => 'Поле "Электронная почта" является обязательным',
            'email.email' => 'Адрес электронной почты должен содержать символ "@"',
            'password.required' => 'Поле "Пароль" является обязательным',
            'password.min' => 'Длина поля "пароль" должна составлять не менее 8 символов.',
            'password.confirmed' => 'Поле "Подтверждение пароля" не соответствует.',
        ];
    }

}
