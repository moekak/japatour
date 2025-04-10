<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateTourRequest extends FormRequest
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
            "title" => ["required", "string", "max:255"],
            "subtitle" => ["required", "string", "max:255"],
            "badge" => ["nullable", "string", "max:255"],
            "duration_days" => ["required", "integer", "max:255"],
            "last_name" => ["required", "string", "max:255"],
            "password" => ["required", "string", "min:8", "max:255"],
            "login_id" => ["required", "string", "max:255", "unique:users"], 
            'icon' => ['nullable', 'file', 'mimes:jpeg,png,jpg', 'max:800'],// 800KB制限
            "email" => ["required", "string", "email", "max:255", "unique:users"], 
            "phone_number" => ["required", "string", "max:15", "unique:users"],
            "hire_date" => ["required", "date"], 
            "gender" => ["required", "string", "in:male,female"], 
        ];
    }

    public function messages(): array
    {
        session()->flash('show_modal', true);

        return [
            // Position ID
            'position_id.required' => 'Please select position.',
            'position_id.exists' => 'Invalid data',
            // First Name
            'first_name.required' => 'Please enter your first name.',
            'first_name.string' => 'First name must be text.',
            'first_name.max' => 'First name cannot exceed 255 characters.',
            
            // Last Name
            'last_name.required' => 'Please enter your last name.',
            'last_name.string' => 'Last name must be text.',
            'last_name.max' => 'Last name cannot exceed 255 characters.',
            
            // Password
            'password.required' => 'Password is required.',
            'password.string' => 'Password must be text.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.max' => 'Password cannot exceed 255 characters.',
            
            // Login ID
            'login_id.required' => 'Login ID is required.',
            'login_id.string' => 'Login ID must be text.',
            'login_id.max' => 'Login ID cannot exceed 255 characters.',
            'login_id.unique' => 'This login ID is already in use.',
            
            // Icon
            'icon.string' => 'Icon must be a valid string.',
            'icon.max' => 'Icon path cannot exceed 800KB.',
            
            // Email
            'email.required' => 'Email address is required.',
            'email.string' => 'Email must be text.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email cannot exceed 255 characters.',
            'email.unique' => 'This email address is already registered.',
            
            // Phone Number
            'phone_number.required' => 'Phone number is required.',
            'phone_number.string' => 'Phone number must be text.',
            'phone_number.max' => 'Phone number cannot exceed 13 characters.',
            'phone_number.unique' => 'This phone number is already registered.',
            
            // Hire Date
            'hire_date.required' => 'Hire date is required.',
            'hire_date.date' => 'Please enter a valid date.',
            
            // Gender
            'gender.required' => 'Please select a gender.',
            'gender.string' => 'Gender must be text.',
            'gender.in' => 'Please select either male or female.'
        ];
    }
}
