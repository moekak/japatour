<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendContactMailRequest extends FormRequest
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
            "name" => ["required"],
            "email" => ["required", "email", "max:255"],
            "body" => ["required"]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Oops! We need your name to continue.',
            'email.required' => 'Please don\'t forget to enter your email address.',
            'email.email' => 'Hmm... that email doesn\'t look quite right. Mind checking it?',
            'email.max' => 'That email is a bit too long. Could you use a shorter one?',
            'body.required' => 'Don\'t forget to write your message!',
        ];
    }
}
