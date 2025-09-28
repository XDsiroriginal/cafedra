<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fio' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'avatar' => 'sometimes|image|mimes:jpeg,png,jpg',
        ];
    }

    public function messages(): array
    {
        return [
            'fio.required' => 'ФИО является обязательным полем',
            'email.required' => 'Email является обязательным полем',
            'email.email' => 'Введите корректный email адрес',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.required' => 'Пароль является обязательным полем',
            'password.min' => 'Пароль должен содержать минимум 6 символов',
            'avatar.image' => 'Аватар должен быть изображением',
        ];
    }
}
