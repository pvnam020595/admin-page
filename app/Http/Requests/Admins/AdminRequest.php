<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // 'name' => "required",
            'password' => "required",
            'email' => "required|email",
        ];
    }

    /**
     * messages.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'password.required' => 'Password is required',
            // 'name.required' => 'Name is rquired',
        ];
    }
}
