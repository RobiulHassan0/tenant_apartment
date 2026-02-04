<?php

namespace App\Http\Requests\Tenant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TenantRegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max: 100'],
            'phone' => ['required', 'unique:tenants,phone'],
            'password' => ['required', 'string', 'min:8'],
            'image' => ['nullable', 'file', 'mimes:jpg,jpeg,png,gif,webp', 'max: 2048']
        ];
    }

    public function messages(): array
    {
        return [
            // Name field messages
            'name.required' => 'Please enter the tenant name.',
            'name.string' => 'The name must be a valid text string.',
            'name.max' => 'The name may not be longer than 100 characters.',

            // Phone field messages
            'phone.required' => 'The phone number is required.',
            'phone.unique' => 'This phone number is already registered with another tenant.',

            // Image field messages
            'image.file' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be in jpg, jpeg, png, gif, or webp format.',
            'image.max' => 'The image size may not exceed 2MB.',
        ];
    }

    public function failedValidation(Validator $validator): void
    {
        throw new HttpResponseException(
            response()->json([
                'message' => 'Validation Failed',
                'errors' => $validator->errors()
            ], 422)
        );
    }
}
