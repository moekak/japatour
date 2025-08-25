<?php

namespace App\Http\Requests\Admin\Booking;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookingRequest extends FormRequest
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
            'itinerary_id' => ['required', 'integer', 'exists:itineraries,id'],
            'adult_number' => ['required', 'integer', 'min:1'],
            'adult_price' => ['required', 'integer', 'min:1'], 
            'children_number' => ['required', 'integer', 'min:0'], 
            'children_price' => ['required', 'integer', 'min:0'], 
            'tour_date' => ['required', 'date', 'after_or_equal:today'], // 過去の日付を防ぐ
            'first_name' => ['required', 'string'], 
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'], // email形式チェック
            'phone_number' => ['required', 'string', 'max:20'], // 電話番号の最大長
            'request' => ['nullable', 'string'], // リクエストの最大文字数
        ];
    }

    public function messages(): array
    {
        return [
            'itinerary_id.required' => 'Please select a tour.',
            'itinerary_id.exists' => 'Selected tour is not available.',
            'adult_number.min' => 'At least one adult is required.',
            'tour_date.after_or_equal' => 'Please select today or a future date.',
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone_number.required' => 'Phone number is required.',
        ];
    }
}
