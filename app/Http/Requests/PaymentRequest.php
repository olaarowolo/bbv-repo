<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class PaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:125',
            'email' => 'required|email:rfc,dns,spoof,filter,strict',
            'service' => 'required|in:makeup,eyebrow,touchup,eyelash,hairshop',
            'date' => 'required|date_format:m/d/Y|after:' . now()->addHour()->format('Y-m-d H:i:s'),
            'note' => 'string|max:125',
            'phone' => 'required',
        ];
    }

    
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => $validator->errors()->first(),
            'data'      => $validator->errors()
        ]));
    }
}
