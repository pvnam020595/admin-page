<?php

namespace App\Base\Requests;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;

class BaseRequest

{
    public static function rules($request)
    {
        $queryFields = [];
        $dataRequest = $request->query();
        foreach ($dataRequest as $key => $data) {
            array_push($queryFields, $key);
        }

        $rules = [];
        foreach ($queryFields as $queryField) {
            $rules[$queryField] = function ($attribute, $value, $fails) {
                if (in_array(strtolower($attribute), ['select', 'password'])) {
                    return $fails('Field '. strtoupper($attribute) . ' is not allowed');
                }
                if (str_contains($value, 'password')) {
                    return $fails('Value of field ' . strtoupper($attribute) . ' is not allowed');
                }
            };
        }
        return $rules;
    }

    public static function failedValidate(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        $message = (new ValidationException($validator))->getMessage();
        throw new HttpResponseException(response()->json(
            [
                'statusCode' => JsonResponse::HTTP_UNPROCESSABLE_ENTITY,
                'statusText' => JsonResponse::$statusTexts[JsonResponse::HTTP_UNPROCESSABLE_ENTITY],
                'message' => $message,
                'data' => $errors
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
