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
            "title" => ["required", "string", "max:255"],
            "subtitle" => ["required", "string", "max:255"],
            "badge" => ["nullable", "string", "max:255"],
            "duration_days" => ["required", "integer", "max:255"],
            "start_location" => ["required", "string", "max:255"],
            "end_location" => ["required", "string", "max:255"],
            "destinations" => ["required", "string", "max:255"],
            "languages" => ["required", "string", "max:255"],
            "min_participants" => ["required", "integer"],
            "max_participants" => ["required", "integer"],
            "currency" => ["required", "string", "max:5"],
            "price" => ["required", "numeric", "min:0", "max:99999999.99"],
            "discount_percentage" => ["required", "integer"],
            "accommodation" => ["required", "string", "max:255"],
            "departure_dates" => ["required", "string", "max:255"],
            "limited_spots" => ["nullable", "string", "max:255"],
            "overview" => ["required", "string"],
            "highlights" => ["required", "array"],
            "itinerary" => ["required", "array"],
            "inclusions" => ["required", "array"],
            "exclusions" => ["required", "array"],
            "hero_image" => ["required", "image", "mimes:jpeg,png,jpg,gif", "max:2048"],
            "gallery_images" => ["required", "array"],
            "gallery_images.*" => ["image", "mimes:jpeg,png,jpg,gif", "max:2048"],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.string' => 'The title must be a string.',
            'title.max' => 'The title must not exceed 255 characters.',
            
            'subtitle.required' => 'The subtitle field is required.',
            'subtitle.string' => 'The subtitle must be a string.',
            'subtitle.max' => 'The subtitle must not exceed 255 characters.',
            
            'badge.string' => 'The badge must be a string.',
            'badge.max' => 'The badge must not exceed 255 characters.',
            
            'duration_days.required' => 'The duration days field is required.',
            'duration_days.integer' => 'The duration days must be an integer.',
            'duration_days.max' => 'The duration days must not exceed 255.',
            
            'start_location.required' => 'The start location field is required.',
            'start_location.string' => 'The start location must be a string.',
            'start_location.max' => 'The start location must not exceed 255 characters.',
            
            'end_location.required' => 'The end location field is required.',
            'end_location.string' => 'The end location must be a string.',
            'end_location.max' => 'The end location must not exceed 255 characters.',
            
            'destinations.required' => 'The destinations field is required.',
            'destinations.string' => 'The destinations must be a string.',
            'destinations.max' => 'The destinations must not exceed 255 characters.',
            
            'languages.required' => 'The languages field is required.',
            'languages.string' => 'The languages must be a string.',
            'languages.max' => 'The languages must not exceed 255 characters.',
            
            'min_participants.required' => 'The minimum participants field is required.',
            'min_participants.integer' => 'The minimum participants must be an integer.',
            
            'max_participants.required' => 'The maximum participants field is required.',
            'max_participants.integer' => 'The maximum participants must be an integer.',
            
            'currency.required' => 'The currency field is required.',
            'currency.string' => 'The currency must be a string.',
            'currency.max' => 'The currency must not exceed 5 characters.',
            
            'price.required' => 'The price field is required.',
            'price.decimal' => 'The price must be a decimal number with up to 2 decimal places.',
            'price.min' => 'The price must be at least 0.',
            'price.max' => 'The price must not exceed 99,999,999.99.',
            
            'discount_percentage.required' => 'The discount percentage field is required.',
            'discount_percentage.integer' => 'The discount percentage must be an integer.',
            
            'accommodation.required' => 'The accommodation field is required.',
            'accommodation.string' => 'The accommodation must be a string.',
            'accommodation.max' => 'The accommodation must not exceed 255 characters.',
            
            'departure_dates.required' => 'The departure dates field is required.',
            'departure_dates.string' => 'The departure dates must be a string.',
            'departure_dates.max' => 'The departure dates must not exceed 255 characters.',
            
            'limited_spots.string' => 'The limited spots must be a string.',
            'limited_spots.max' => 'The limited spots must not exceed 255 characters.',
            
            'overview.required' => 'The overview field is required.',
            'overview.string' => 'The overview must be a string.',
            
            'highlights.required' => 'The highlights field is required.',
            'highlights.array' => 'The highlights must be a valid array format.',
    
            'itinerary.required' => 'The itinerary field is required.',
            'itinerary.array' => 'The itinerary must be a valid array format.',
            
            'inclusions.required' => 'The inclusions field is required.',
            'inclusions.array' => 'The inclusions must be a valid array format.',
            
            'exclusions.required' => 'The exclusions field is required.',
            'exclusions.array' => 'The exclusions must be a valid array format.',
            
            'hero_image.required' => 'The hero image field is required.',
            'hero_image.image' => 'The hero image must be an image file.',
            'hero_image.mimes' => 'The hero image must be a file of type: jpeg, png, jpg, gif.',
            'hero_image.max' => 'The hero image must not exceed 2MB.',

            'gallery_images.required' => 'The gallery images field is required.',
            'gallery_images.array' => 'The gallery images must be an array of files.',
            'gallery_images.*.image' => 'All gallery files must be images.',
            'gallery_images.*.mimes' => 'All gallery images must be a file of type: jpeg, png, jpg, gif.',
            'gallery_images.*.max' => 'Each gallery image must not exceed 2MB.',
            
        ];
    }
}
