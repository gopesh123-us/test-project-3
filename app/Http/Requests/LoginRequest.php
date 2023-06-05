<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'name' => 'required | alpha',
            'name' => ['required', 'alpha', 'min:6'],
            'email' => ['required', 'email'],
            'password' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Useless person! forgot to put your name',
            'email.required' => 'Soild idiot hai!! You forgot to put your email'
        ];
    }
}
