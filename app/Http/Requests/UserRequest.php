<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;
use App\Base\Requests\BaseRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return array_merge([
            "email" => "required|email",
            "password" => "required",
            "name" => "required"
        ], BaseRequest::rules($request));
    }
    
    /**
     * messages
     *
     * @return void
     */
    public function messages()

    {

        return [
            "email.required" => "Email is required",
            "password.required" => "Password is required",
            "name.required" => "Name is rquired"
        ];

    }

    public function failedValidation(Validator $validator) 
    {
        BaseRequest::failedValidate($validator);
    }
}
