<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
     * - Input validation with strong rules
     * - Password policy enforcement
     * - Email verification
     * - Prevents injection and XSS attacks
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'middle_name' => ['nullable', 'string', 'max:50', 'regex:/^[a-zA-Z\s\-\']*$/'],
            'last_name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'mobile_number' => ['required', 'regex:/^(\+63|0)[0-9]{9,10}$/', 'max:20'],
            'city_municipality' => ['required', 'string', 'max:100'],
            'barangay' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email:rfc,dns', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required'],
            'terms' => ['required', 'accepted'],
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required.',
            'first_name.regex' => 'First name can only contain letters, spaces, hyphens, and apostrophes.',
            'last_name.required' => 'Last name is required.',
            'last_name.regex' => 'Last name can only contain letters, spaces, hyphens, and apostrophes.',
            'email.unique' => 'This email address is already registered.',
            'email.email' => 'Please provide a valid email address.',
            'mobile_number.regex' => 'Mobile number must be a valid Philippine number (e.g., 09171234567).',
            'password.required' => 'Password is required.',
            'password.confirmed' => 'Passwords do not match.',
            'terms.required' => 'You must agree to the Terms of Service and Privacy Policy.',
        ];
    }

    /**
     * Prepare input for validation by sanitizing user data.
     * Prevents XSS by stripping tags and trimming whitespace.
     * Implements OWASP Input Validation best practices.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'first_name' => trim(strip_tags($this->first_name ?? '')),
            'middle_name' => trim(strip_tags($this->middle_name ?? '')),
            'last_name' => trim(strip_tags($this->last_name ?? '')),
            'email' => trim(strtolower($this->email ?? '')),
            'mobile_number' => trim($this->mobile_number ?? ''),
            'city_municipality' => trim(strip_tags($this->city_municipality ?? '')),
            'barangay' => trim(strip_tags($this->barangay ?? '')),
        ]);
    }
}
