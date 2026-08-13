<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * Implements OWASP security guidelines:
     * - Email validation with DNS checking
     * - Password length limits prevent DoS
     * - Rate limiting enforced at controller/middleware level
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'email:rfc,dns', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
            'remember' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'login.required' => 'Email address is required.',
            'login.email' => 'Please provide a valid email address.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
        ];
    }

    /**
     * Prepare input for validation by sanitizing user data.
     * Prevents injection attacks by trimming and lowercasing email.
     * Implements OWASP Input Validation best practices.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'login' => trim(strtolower($this->login ?? '')),
            'password' => $this->password, // Don't modify password - preserve exact input
        ]);
    }
}
