<?php

namespace App\Http\Requests\Apartment;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreApartmentRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:100',
            "rent" => ['nullable', 'numeric', 'min:1', 'max:99999'],
            'image' => 'nullable|file|mimes:jpg,jpeg,png,gif,webp,max:2048'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name may not exceed 100 characters.',
            'rent.numeric' => 'The rent must be a number.',
            'rent.min' => 'The rent must be at least 1.',
            'rent.max' => 'The rent may not be greater than 99,999.',
            'image.mimes' => 'The image must be a file of type: jpg, jpeg, png, gif, or webp.',
            'image.max' => 'The image size must not exceed 2MB.'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'message' => 'Validation Failed',
                'errors' => $validator->errors()
            ], 422)
        );
    }

}
